<?php

class tx_forcerealurls {

	function check($params,$pObj) {
		if ($pObj->siteScript && $pObj->config['config']['tx_realurl_enable'] && (
				substr($pObj->siteScript, 0, 9) == 'index.php' || 
				substr($pObj->siteScript, 0, 1) == '?'
			)) {
					$baseURL = $pObj->config['config']['baseURL'];
					$LD = $pObj->tmpl->linkData($pObj->page,'',$pObj->no_cache,'','',t3lib_div::getIndpEnv('QUERY_STRING'));
					$url = $baseURL.$LD['totalURL'];

					header('HTTP/1.1 301 Moved Permanently');
					header('Location: '.$url);
					
					exit;	
		}
	}
}

?>