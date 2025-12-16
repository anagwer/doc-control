<?php
/*
 * ARI Docs Viewer
 *
 * @package		ARI Docs Viewer
 * @version		1.0.0
 * @author		ARI Soft
 * @copyright	Copyright (c) 2010 www.ari-soft.com. All rights reserved
 * @license		GNU/GPL (http://www.gnu.org/copyleft/gpl.html)
 * 
 */

defined('ARI_FRAMEWORK_LOADED') or die('Direct Access to this location is not allowed.');

AriKernel::import('DocsViewer.Models.DocsViewerIframeModel');

class AriDocsViewerZohoModel extends AriDocsViewerIframeModel
{
	function processContent($params, $content)
	{
		return JText::_('ADV_ZOHO_NOSUPPORT');
	}
}
?>