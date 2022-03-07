<?php

/**
 * Copyright (C) 2013-2020 Combodo SARL
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 *
 *
 */

namespace Combodo\iTop\Portal\Controller;

use ApprovalScheme;
use AttributeDate;
use AttributeDateTime;
use DBObjectSet;
use DBSearch;
use Dict;
use IssueLog;
use MetaModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use UserRights;

/**
 * Class ApprovalBrickController
 *
 * @package Combodo\iTop\Portal\Controller
 */
class ApprovalBrickController extends BrickController
{
	/**
	 * @param \Symfony\Component\HttpFoundation\Request $oRequest
	 * @param                                           $sBrickId
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @throws \ArchivedObjectException
	 * @throws \Combodo\iTop\Portal\Brick\BrickNotFoundException
	 * @throws \CoreException
	 * @throws \CoreUnexpectedValue
	 * @throws \DictExceptionMissingString
	 * @throws \MySQLException
	 * @throws \OQLException
	 */
	public function DisplayAction(Request $oRequest, $sBrickId)
	{
		/** @var \Combodo\iTop\Portal\Brick\BrickCollection $oBrickCollection */
		$oBrickCollection = $this->get('brick_collection');
		/** @var \Combodo\iTop\Portal\Routing\UrlGenerator $oUrlGenerator */
		$oUrlGenerator = $this->get('url_generator');

		/** @var \Combodo\iTop\Portal\Brick\ApprovalBrick $oBrick */
		$oBrick = $oBrickCollection->GetBrickById($sBrickId);
		$aClassesConfig = $oBrick->GetClasses();

		$oMyself = UserRights::GetContactObject();

		$iProcessed = 0;
		$sOperation = $oRequest->get('operation');
		// For correct right check, find the selected object in the list of ongoingApproval
		$aApprovals = ApprovalScheme::ListOngoingApprovals(get_class($oMyself), $oMyself->GetKey());
		$sComment = '';
		$aSelected = [];
		$aObjects = [];
		if ($sOperation != '') {
			$sComment = $oRequest->get('comment');
			$aSelected = $oRequest->get('selected');
		}
		foreach ($aApprovals as $oApproval)
		{
			$sObjClass = $oApproval->Get('obj_class');
			$iObjKey = $oApproval->Get('obj_key');
			$bIsDisplay = true;
			if ($sOperation != '') {
				foreach ($aSelected as $sClassSelected => $aObjectsSelected) {
					if ($sClassSelected == $sObjClass) {
						foreach ($aObjectsSelected as $iKeySelected) {
							if ($iKeySelected == $iObjKey) {
								if ($sOperation == 'approve') {
									$oApproval->Approve($oMyself, $sComment);
								} elseif ($sOperation == 'reject') {
									$oApproval->Reject($oMyself, $sComment);
								}
								$bIsDisplay = false;
								break;
							}
						}
						break;
					}
				}
			}
			if ($bIsDisplay){
				if (array_key_exists($sObjClass, $aClassesConfig)) {
					$aObjects[$sObjClass][$iObjKey] = MetaModel::GetObject($sObjClass, $iObjKey, true, true);
				}
			}
		}

		$iTotalCount = 0;
		foreach ($aClassesConfig as $sClass => $aClassData)
		{
			$aData = array(
				'sId' => $sClass,
				'sClass' => $sClass,
				'sTitle' => MetaModel::GetName($sClass),
				'aItems' => array(),
			);
			$aData['aColumns'][] = array(
				'sAttCode' => '_self_',
				'sLabel' => MetaModel::GetName($sClass),
			);
			foreach ($aClassData['fields'] as $sAttCode)
			{
				$aData['aColumns'][] = array(
					'sAttCode' => $sAttCode,
					'sLabel' => MetaModel::GetLabel($sClass, $sAttCode),
				);
			}
			if (array_key_exists($sClass, $aObjects))
			{
				foreach ($aObjects[$sClass] as $oObject)
				{
					$sUrl = $oUrlGenerator->generate('p_approval_view_object', array('sObjectClass' => get_class($oObject), 'sObjectId' => $oObject->GetKey()));
					$sLabel = $oObject->GetAsHTML('friendlyname');
					$aValues = array(
						'_self_' => '<a href="'.$sUrl.'" data-toggle="modal" data-target="#modal-for-all">'.$sLabel.'</a>',
					);
					foreach ($aClassData['fields'] as $sAttCode)
					{
						$oAttDef = MetaModel::GetAttributeDef($sClass, $sAttCode);
						if ($oAttDef instanceof \AttributeExternalKey)
						{
							$sDisplayValue = $oObject->GetAsHTML($sAttCode.'_friendlyname');
						}
						else
						{
							$sDisplayValue = $oObject->GetAsHTML($sAttCode);
						}
						$aValues[$sAttCode] = $sDisplayValue;
					}
					$aData['aItems'][] = $aValues;
					$aData['aRowToKey'][] = $oObject->GetKey();
				}
			}
			$aData['iItemsCount'] = count($aData['aItems']);
			$iTotalCount += count($aData['aItems']);

			$aExpectedApprovals[$sClass] = $aData;
		}

		$aData = array(
			'oBrick' => $oBrick,
			'sBrickId' => $sBrickId,
			'sDateFormat' => AttributeDate::GetFormat()->ToMomentJS(),
			'sDateTimeFormat' => AttributeDateTime::GetFormat()->ToMomentJS(),
			'iTotalCount' => $iTotalCount,
			'aExpectedApprovals' => $aExpectedApprovals,
			'sMessage' => null,
		);
		if ($sOperation != '')
		{
			$aData['sMessage'] = Dict::Format('Approval:Portal:Success', $iProcessed);
		}
		$oResponse = $this->render($oBrick->GetPageTemplatePath(), $aData);

		return $oResponse;
	}

	/**
	 * @param \Symfony\Component\HttpFoundation\Request $oRequest
	 * @param                                           $sObjectClass
	 * @param                                           $sObjectId
	 *
	 * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
	 * @throws \ArchivedObjectException
	 * @throws \Combodo\iTop\Portal\Brick\BrickNotFoundException
	 * @throws \CoreException
	 * @throws \DictExceptionMissingString
	 * @throws \OQLException
	 */
	public function ViewObjectAction(Request $oRequest, $sObjectClass, $sObjectId)
	{
		/** @var \Combodo\iTop\Portal\Helper\ObjectFormHandlerHelper $oObjectFormHandler */
		$oObjectFormHandler = $this->get('object_form_handler');
		/** @var \Combodo\iTop\Portal\Brick\BrickCollection $oBrickCollection */
		$oBrickCollection = $this->get('brick_collection');

		// Checking parameters
		if ($sObjectClass === '' || $sObjectId === '')
		{
			IssueLog::Info(__METHOD__.' at line '.__LINE__.' : sObjectClass and sObjectId expected, "'.$sObjectClass.'" and "'.$sObjectId.'" given.');
			throw new HttpException(Response::HTTP_INTERNAL_SERVER_ERROR, Dict::Format('UI:Error:2ParametersMissing', 'class', 'id'));
		}

		// Checking security layers
		// - Current object is in list of approvals of the current user
		$bUserIsApprover = false;
		$oMyself = UserRights::GetContactObject();
		$aApprovals = ApprovalScheme::ListOngoingApprovals(get_class($oMyself), $oMyself->GetKey());
		foreach ($aApprovals as $oApproval)
		{
			if ($sObjectClass == $oApproval->Get('obj_class') && $oApproval->Get('obj_key') == $sObjectId )
			{
				$bUserIsApprover = true;
				break;
			}
		}
		if (!$bUserIsApprover)
		{
			// We should never be there as the secuirty helper makes sure that the object exists, but just in case.
			IssueLog::Info(__METHOD__.' at line '.__LINE__.' : Could not load object '.$sObjectClass.'::'.$sObjectId.'.');
			throw new HttpException(Response::HTTP_NOT_FOUND, Dict::S('UI:ObjectDoesNotExist'));
		}

		// There is no security checks on purpose.
		// Retrieving object
		$oObject = MetaModel::GetObject($sObjectClass, $sObjectId, false /* MustBeFound */, true);
		if ($oObject === null)
		{
			// We should never be there as the secuirty helper makes sure that the object exists, but just in case.
			IssueLog::Info(__METHOD__.' at line '.__LINE__.' : Could not load object '.$sObjectClass.'::'.$sObjectId.'.');
			throw new HttpException(Response::HTTP_NOT_FOUND, Dict::S('UI:ObjectDoesNotExist'));
		}

		$aData = array('sMode' => 'view');
		$aData['form'] = $oObjectFormHandler->HandleForm($oRequest, $aData['sMode'], $sObjectClass, $sObjectId);
		$aData['form']['title'] = Dict::Format('Brick:Portal:Object:Form:View:Title', MetaModel::GetName($sObjectClass), $oObject->GetName());

		// Preparing response
		if ($oRequest->isXmlHttpRequest())
		{
			// We have to check whether the 'operation' parameter is defined or not in order to know if the form is required via ajax (to be displayed as a modal dialog) or if it's a lifecycle call from a existing form.
			if ($oRequest->request->get('operation') === null)
			{
				$oResponse = $this->render('approval-base/view/portal/object/modal.html.twig', $aData);
			}
			else
			{
				$oResponse = $this->json($aData);
			}
		}
		else
		{
			// Adding brick if it was passed
			$sBrickId = $oRequest->get('sBrickId');
			if ($sBrickId !== null)
			{
				/** @var \Combodo\iTop\Portal\Brick\ApprovalBrick $oBrick */
				$oBrick = $oBrickCollection->GetBrickById($sBrickId);
				if ($oBrick !== null)
				{
					$aData['oBrick'] = $oBrick;
				}
			}
			$aData['sPageTitle'] = $aData['form']['title'];
			$oResponse = $this->render('approval-base/view/portal/object/layout.html.twig', $aData);
		}

		return $oResponse;
	}

	/**
	 * Handles attachment download on an object under approval.
	 *
	 * Note: This doesn't use the ObjectController::AttachmentAction() because Attachments might be linked to objects that are not allowed to the current user's scopes.
	 *
	 * @param Request $oRequest
	 * @param string  $sAttachmentId
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @throws \ArchivedObjectException
	 * @throws \CoreException
	 */
	public function AttachmentAction(Request $oRequest, $sAttachmentId)
	{
		// Check if attachment exists
		$oAttachment = MetaModel::GetObject('Attachment', $sAttachmentId, false, true);
		if ($oAttachment === null)
		{
			// We should never be there as the secuirty helper makes sure that the object exists, but just in case.
			IssueLog::Info(__METHOD__.' at line '.__LINE__.' : Could not load attachment #'.$sAttachmentId.'.');
			throw new HttpException(Response::HTTP_NOT_FOUND, Dict::S('UI:ObjectDoesNotExist'));
		}

		$sLinkedObjClass = $oAttachment->Get('item_class');
		$iLinkedObjId = $oAttachment->Get('item_id');
		$oCurrentContact = UserRights::GetContactObject();

		// Check if attachment linked to object in approval scope
		$aApprovals = ApprovalScheme::ListOngoingApprovals(get_class($oCurrentContact), $oCurrentContact->GetKey());
		$aObjects = array();
		$bFound = false;
		foreach ($aApprovals as $oApproval)
		{
			$sObjClass = $oApproval->Get('obj_class');
			$iObjKey = $oApproval->Get('obj_key');
			if (($sObjClass === $sLinkedObjClass) && ($iObjKey == $iLinkedObjId))
			{
				$bFound = true;
				break;
			}
		}

		if (!$bFound)
		{
			IssueLog::Info(__METHOD__.' at line '.__LINE__.' : Attachment #'.$sAttachmentId.' not linked to an object in Contact #'.$oCurrentContact->GetKey().' approval schemes.');
			throw new HttpException(Response::HTTP_NOT_FOUND, Dict::S('UI:ObjectDoesNotExist'));
		}

		// Prepare response
		// - One year ahead: an attachement cannot change
		$iCacheSec = 31556926;
		$aHeaders = array();
		$aHeaders['Expires'] = '';
		$aHeaders['Cache-Control'] = 'no-transform, public,max-age='.$iCacheSec.',s-maxage='.$iCacheSec;
		// Reset the value set previously
		$aHeaders['Pragma'] = 'cache';
		// An arbitrary date in the past is ok
		$aHeaders['Last-Modified'] = 'Wed, 15 Jun 2015 13:21:15 GMT';

		/** @var \ormDocument $oDocument */
		$oDocument = $oAttachment->Get('contents');
		$aHeaders['Content-Type'] = $oDocument->GetMimeType();
		$aHeaders['Content-Disposition'] = 'attachment;filename="'.$oDocument->GetFileName().'"';

		return new Response($oDocument->GetData(), Response::HTTP_OK, $aHeaders);
	}

}
