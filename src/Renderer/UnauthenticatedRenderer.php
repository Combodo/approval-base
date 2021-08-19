<?php
namespace Combodo\iTop\ApprovalBase\Renderer;
use Dict;

/**
 * Renderer abstracting UnauthenticatedWebPage used to display approval form
 *
 * @author Stephen Abello <stephen.abello@combodo.com>
 *
 * @since 3.1.0
 */
class UnauthenticatedRenderer extends AbstractRenderer {
	
	/**
	 * @inheritdoc
	 */
	function RenderTitle($oPage, $sTitle){
		$oPage->SetPanelTitle($sTitle);
	}
	
	/**
	 * @inheritdoc
	 */
	function RenderFormHeader($oPage, $sFormHeaderContent)
	{
		$oPage->add('<div id="form_approval_introduction" class="uwp-description">'.$sFormHeaderContent."</div>");
	}

	/**
	 * @inheritdoc
	 */
	function RenderFormInputs($oPage, $sFormName, $sForm)
	{
		$oPage->add('<div id="form_approval">');
		$oPage->add('<form action="" id="form_approve" method="post">');
		$oPage->add('<input type="hidden" id="my_operation" name="operation" value="_not_set_">');
		$oPage->add($sForm);
		$oPage->add('<input type="hidden" name="from" value="'.$sFormName.'">');

		$oPage->add('<div class="form-group form_mandatory">');
		$oPage->add('<div class="form_field_label">');
		$oPage->add('<label for="comment" class="control-label" title="'.Dict::S('Approval:Comment-Tooltip').'">'.Dict::S('Approval:Comment-Label').'</label><i class="fas fa-question-circle uwp-text-hint--icon" title="'.Dict::S('Approval:Comment-Mandatory').'"></i>');
		$oPage->add('</div>');
		$oPage->add('<div class="form_field_control">');
		$oPage->add("<textarea type=\"textarea\" name=\"comment\" id=\"comment\" class=\"form-control\"></textarea>");
		$oPage->add('</div>');

		$oPage->add("<div>");
		$oPage->add("</div>");
		$oPage->add("</form>");
		$oPage->add("</div>");	
	}

	/**
	 * @inheritdoc
	 */
	function RenderFormFooter($oPage, $sFooterContent)
	{
		$oPage->add('<div class="email_body alert alert-info">'.$sFooterContent.'</div>');
		
		$oPage->add("<div id='uwp-bottom-buttons'>");
		$oPage->add("<input type=\"submit\" class=\"btn btn-secondary\" id=\"rejection-button\" form=\"form_approve\" onClick=\"$('#my_operation').val('do_reject');\" value=\"".Dict::S('Approval:Action-Reject')."\">");
		$oPage->add("<input type=\"submit\" class=\"btn btn-primary\" id=\"approval-button\" form=\"form_approve\" onClick=\"$('#my_operation').val('do_approve');\" value=\"".Dict::S('Approval:Action-Approve')."\">");
		$oPage->add("</div>");

	}
}