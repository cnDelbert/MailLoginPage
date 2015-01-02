<?php
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://accounts.google.com/ServiceLoginAuth'); 
	curl_setopt($curl, CURLOPT_HEADER, 1); 
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// 运行cURL，请求网页
	$data = curl_exec($curl);
	// 关闭URL请求
	curl_close($curl);
	// 显示获得的数据
	//echo $data;
	
	$galx = substr($data, strpos($data, 'GALX=')+5, 11); 
?>