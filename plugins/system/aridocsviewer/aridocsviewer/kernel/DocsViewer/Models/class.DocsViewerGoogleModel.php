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

jimport('joomla.environment.uri');
AriKernel::import('DocsViewer.Models.DocsViewerIframeModel');

class AriDocsViewerGoogleModel extends AriDocsViewerIframeModel
{
	var $_isDownloadableDoc = true;

	function processContent($params, $content)
	{
		$url = trim($params['url']);
		if (empty($url))
			return JText::_('ADV_EMPTY_URL');

		$pageNum = intval(AriUtils::getParam($params, 'pageNum', 0), 10);
		if ($pageNum > 0)
		{
			$params['onload'] = sprintf('var self = this;setTimeout(function() { try { self.contentWindow.location.hash = \':0.page.%1$d\'; } catch(e) {} }, 10);',
				$pageNum);
		}

		if (!AriUtils::isRemoteResource($url))
			$url = JURI::root() . $url;
			
		$cache = (bool)AriUtils::getParam($params, 'cache', true);
		if (!$cache)
		{
			$url = new JURI($url);
			$url->setVar('t', time());
			$url = $url->toString();
		}

		$params['preparedUrl'] = sprintf('//docs.google.com/viewer?url=%1$s&embedded=true',
			htmlentities(urlencode($url), ENT_QUOTES));

		return parent::processContent($params, $content);
	}
}
?>