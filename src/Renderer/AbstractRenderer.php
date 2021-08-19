<?php
namespace Combodo\iTop\ApprovalBase\Renderer;

/**
 * Renderer abstracting webpage used to display approval form
 *
 * @author Stephen Abello <stephen.abello@combodo.com>
 * 
 * @since 3.1.0
 */
abstract class AbstractRenderer
{
	/**
	 * Display form title
	 * 
	 * @param $oPage \WebPage Page to write in
	 * @param $sTitle string Title to display
	 *
	 */
	abstract function RenderTitle($oPage, $sTitle);

	/**
	 * Display form header
	 *
	 * @param $oPage \WebPage Page to write in
	 * @param $sFormHeaderContent string Content to display in form's header
	 *
	 */
	abstract function RenderFormHeader($oPage, $sFormHeaderContent);

	/**
	 * Display form input(s)
	 *
	 * @param $oPage \WebPage Page to write in
	 * @param $sFormName string Form name used to identify current form
	 * @param $sForm string Form content to display
	 */
	abstract function RenderFormInputs($oPage, $sFormName, $sForm);


	/**
	 * Display form footer
	 *
	 * @param $oPage \WebPage Page to write in
	 * @param $sFooterContent string Form footer content to display
	 */
	abstract function RenderFormFooter($oPage, $sFooterContent);
}