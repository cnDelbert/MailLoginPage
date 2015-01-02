<?php
     $provider = array(
		"ali" => "a",
		"wanwang" => "a",
		
		"tengxun" => "t",
		"tencent" => "t",
		"qq" => "t",
		
		"neteast" => "n",
		"163" => "n",
		"126" => "n",
		
		"gmail" => "g",
		"google" => "g",
		
		"microsoft" => "m",
		"ms" => "m",
		
		"mail.ru" => "r",
		"biz.mail.ru" => "r",
		
		"zoho" => "z"
		
	 );
	 
	 $submit_addr = array(
		"te" => "https://en.exmail.qq.com/cgi-bin/login",
		"tc" => "https://exmail.qq.com/cgi-bin/login",
		"n" => "https://entry.qiye.163.com/domain/domainEntLogin",
		"g" => "https://accounts.google.com/ServiceLoginAuth"
	 );
	 
	 $addition_items = array(
		"t" => '<input type="hidden" name="firstlogin" value="false" />
				<input type="hidden" name="errtemplate" value="dm_loginpage" />
				<input type="hidden" name="aliastype" value="other" />
				<input type="hidden" name="dmtype" value="bizmail" />
				<input type="hidden" name="p" value="" />
				<input type="hidden" name="domain" value="#domain#" />',
		
		"n" => '<input type="hidden" value="#domain#" name="domain" class="js-domain">
                <input id="n_acc" type="hidden" value="" name="account_name" class="js-accname">
                <input type="hidden" value="1" name="secure" class="js-isSecure">
                <input type="hidden" value="0" name="all_secure" class="js-isAllSecure">
                <input type="hidden" value="0" name="language" class="js-language">
                <input type="hidden" value="" name="ch" class="js-operator">',
				
		"g" => '<input id="galx" type="hidden" value="IARFjGgZlac" name="GALX">
				<input type="hidden" value="mail" name="service">
				<input type="hidden" value="default" name="ltmpl">
				<input type="hidden" value="1" name="sacu">
				<input type="hidden" value="#domain#" name="hd">
				<input id="_utf8" type="hidden" value="☃" name="_utf8">
				<input id="bgresponse" type="hidden" value="js_disabled" name="bgresponse">'				
	 );
	 
	 $username = array(
		"t" => "uin",
		"g" => "Email",
		"n" => "accname"
	 );
	 
	 $password = array(
		"t" => "pwd",
		"g" => "Passwd",
		"n" => "password"
	 );
?>
