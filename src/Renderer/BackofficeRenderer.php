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
		$oPage->add('<h2 class="ibo-title--text">'.$sTitle.'</h2>');
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
		$oPage->add("<div class=\"wizContainer ibo-alert ibo-is-information\" id=\"form_approval\">\n");
		$oPage->add("<form action=\"\" id=\"form_approve\" method=\"post\">\n");
		$oPage->add("<input type=\"hidden\" id=\"my_operation\" name=\"operation\" value=\"_not_set_\">");
		$oPage->add($sForm);
		$oPage->add("<input type=\"hidden\" name=\"from\" value=\"$sFormName\">");

		$oPage->add('<div class="ibo-field"><div class="ibo-field--label"><span title="'.Dict::S('Approval:Comment-Tooltip').'">'.Dict::S('Approval:Comment-Label').'</span><span class="ibo-has-description" title="'.Dict::S('Approval:Comment-Mandatory').'"></span></div>');
		$oPage->add("<textarea  type=\"textarea\" name=\"comment\" id=\"comment\" class=\"resizable ibo-input ibo-input-text\" cols=\"80\" rows=\"5\"></textarea></div>");
		$oPage->add("<div class=\"approval-button-group\"><input type=\"submit\" class=\"ibo-button ibo-is-alternative ibo-is-secondary\" id=\"rejection-button\" onClick=\"$('#my_operation').val('do_reject');\" value=\"".Dict::S('Approval:Action-Reject')."\">");
		$oPage->add("<input type=\"submit\" class=\"ibo-button ibo-is-regular ibo-is-primary\" id=\"approval-button\" onClick=\"$('#my_operation').val('do_approve');\" value=\"".Dict::S('Approval:Action-Approve')."\"></div>");
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