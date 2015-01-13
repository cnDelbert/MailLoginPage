<?php
	function get_lang(){
		global $site_lang, $default_language;
		$param_lang = $_GET["lang"];
		if(!empty($param_lang))
			$lang = $site_lang[strtolower($param_lang)];
		if(empty($lang))
			$lang = $site_lang[strtolower($default_language)];
		return $lang;
	};

	function submit_action($sp){
		global $submit_addr, $lang;
		if($sp == 't'){
			// Tencent
			if($lang == "en"){
				return $submit_addr["te"];
			}else{
				return $submit_addr["tc"];
			}
		}else{
			return $submit_addr[$sp];
		}		
	};
	
	function get_provider(){
		global $provider, $default_provider;
		if(!empty($_GET["sp"]))
			$sp = $provider[strtolower($_GET["sp"])];
		if(empty($sp))
			$sp = $provider[$default_provider];
		return $sp;
	}
	
	function get_alias(){
		global $default_domain;
		if(!empty($_GET["domain"]))
			$alias = $_GET["domain"];
		if(empty($alias))
			$alias = $default_domain;
		return $alias;
	}
	
	function addition_code($sp){
		global $addition_items, $alias;
		$addition_items[$sp] = str_replace("#domain#", $alias, $addition_items[$sp]);
		
		return $addition_items[$sp];
	}

	function get_bgimgs($dir){
		$bgdir = dir($dir);
		$bgarr = array();
		while($bgimg = $bgdir->read()){
			if($bgimg != '.' && $bgimg != '..'){
				$bgarr[] = $dir.$bgimg;
			}
		}
		return $bgarr;
	}
?>