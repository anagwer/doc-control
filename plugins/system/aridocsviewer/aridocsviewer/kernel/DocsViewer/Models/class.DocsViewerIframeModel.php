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

AriKernel::import('DocsViewer.Models.DocsViewerModel');

class AriDocsViewerIframeModel extends AriDocsViewerModel
{
	var $_isDownloadableDoc = false;

	function processContent($params, $content)
	{
		$url = trim($params['url']);
		$preparedUrl = trim(AriUtils::getParam($params, 'preparedUrl', $url));

		if (empty($preparedUrl))
			return JText::_('ADV_EMPTY_URL');

		$showDownloadLink = (bool)AriUtils::getParam($params, 'showDownloadLink');
		$downloadLink = AriUtils::getParam($params, 'downloadLink');
		$showLoading = (bool)$params['loadingPane'];
		$loadingMessage = $showLoading ? AriUtils::getParam($params, 'loadingMessage') : null;
		$width = AriUtils::getParam($params, 'width', 500);
		$height = AriUtils::getParam($params, 'height', 350);
		$frameId = !empty($params['id']) ? $params['id'] : uniqid('aridoc_', false);

		return sprintf('<div class="aridoc-container %6$s %5$s">%4$s<iframe id="%8$s" class="aridoc-frame" src="%1$s" width="%2$s" height="%3$s" frameBorder="0" allowTransparency="true"%9$s></iframe>%7$s</div>',
			$preparedUrl,
			$width,
			$height,
			$loadingMessage ? '<div class="aridoc-loading-message">' . $loadingMessage . '</div>' : '',
			AriUtils::getParam($params, 'class'),
			$showLoading ? 'aridoc-loading' : '',
			$this->_isDownloadableDoc && $url && $showDownloadLink && $downloadLink 
				? sprintf('<div class="aridoc-dl-container" style="width:%3$s"><a class="aridoc-dl" href="%1$s" target="_blank">%2$s</a></div>',
					$url,
					$downloadLink,
					strpos($width, '%') === false ? $width . 'px' : $width
				  )
				: '',
			$frameId,
			!empty($params['onload']) ? ' onload="' . $params['onload'] . '"' : '');
	}
}
?>