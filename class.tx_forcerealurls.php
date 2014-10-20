<?php

class tx_forcerealurls {

	function check($params,$pObj) {
		if ($pObj->siteScript && $pObj->config['config']['tx_realurl_enable'] && (
            substr($pObj->siteScript, 0, 9) == 'index.php' || 
            substr($pObj->siteScript, 0, 1) == '?'
        )) {
            $extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['forcerealurls']);

            // Skipping section
            if ($extConf['skip_if_logged_in'] && $GLOBALS['BE_USER']->user) {
                return;
            }

            $query = array();
            parse_str(t3lib_div::getIndpEnv('QUERY_STRING'), $query);

            if ($extConf['skip_if_no_cache'] && $query['no_cache']) {
                return;
            }

            if ($extConf['skip_if_typeNum'] && $query['type']) {
                return;
            }

            // Stripping section
            $strip_params = explode(' ', $extConf['strip_params']);
            foreach($strip_params as $strip_param) {
                unset ($query[$strip_param]);
            }

            $queryString = http_build_query($query);

            $baseURL = $pObj->config['config']['baseURL'];
            $LD = $pObj->tmpl->linkData($pObj->page,'',false,'','',$queryString);
            $url = $baseURL.$LD['totalURL'];

            header('HTTP/1.1 301 Moved Permanently');
            header('Location: '.$url);
            header('X-Redirected-By: forcerealurls');

            exit;	
		}
	}
}

