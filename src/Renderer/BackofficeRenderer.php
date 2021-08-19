<?php
namespace Combodo\iTop\ApprovalBase\Renderer;

use Dict;

/**
 * Renderer abstracting iTopWebpage used to display approval form
 *
 * @author Stephen Abello <stephen.abello@combodo.com>
 *
 * @since 3.1.0
 */
class BackofficeRenderer extends AbstractRenderer {
	/**
	 * @inheritdoc
	 */
	function RenderTitle($oPage, $sTitle){
		$oPage->add('<h2>'.$sTitle.'</h2>');
	}

	/**
	 * @inheritdoc
	 */
	function RenderFormHeader($oPage, $sFormHeaderContent)
	{
		$oPage->add('<div id="form_approval_introduction">'.$sFormHeaderContent.'</div>');
	}

	/**
	 * @inheritdoc
	 */
	function RenderFormInputs($oPage, $sFormName, $sForm)
	{
		$oPage->add("<div class=\"wizContainer\" id=\"form_approval\">\n");
		$oPage->add("<form action=\"\" id=\"form_approve\" method=\"post\">\n");
		$oPage->add("<input type=\"hidden\" id=\"my_operation\" name=\"operation\" value=\"_not_set_\">");
		$oPage->add($sForm);
		$oPage->add("<input type=\"hidden\" name=\"from\" value=\"$sFormName\">");

		$oPage->add('<div title="'.Dict::S('Approval:Comment-Tooltip').'">'.Dict::S('Approval:Comment-Label').'</div>');
		$oPage->add("<textarea type=\"textarea\" name=\"comment\" id=\"comment\" class=\"resizable\" cols=\"80\" rows=\"5\"></textarea>");
		$oPage->add("<input type=\"submit\" id=\"approval-button\" onClick=\"$('#my_operation').val('do_approve');\" value=\"".Dict::S('Approval:Action-Approve')."\">");
		$oPage->add("<input type=\"submit\" id=\"rejection-button\" onClick=\"$('#my_operation').val('do_reject');\" value=\"".Dict::S('Approval:Action-Reject')."\">");
		$oPage->add("<span id=\"comment_mandatory\">".Dict::S('Approval:Comment-Mandatory')."</span>");
		$oPage->add("</form>");
		$oPage->add("</div>");	
	}
	
	/**
	 * @inheritdoc
	 */
	function RenderFormFooter($oPage, $sFooterContent)
	{
		$oPage->add('<div class="email_body">'.$sFooterContent.'</div>');
	}
}