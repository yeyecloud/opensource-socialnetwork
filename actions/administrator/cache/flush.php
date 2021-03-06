<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */

 if(ossn_site_settings('cache') == true){
  	if(ossn_disable_cache()){
		if(ossn_create_cache()){
			    ossn_trigger_message(ossn_print('cache:flushed'));
				redirect(REF);
		}
  	}
 } 
 ossn_trigger_message(ossn_print('cache:flush:error'), 'error');
 redirect(REF);

  