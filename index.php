<?php require_once("./inc/inc.php");
	$lang  = get_lang();
	$alias = get_alias();
	$sp    = get_provider();
	if($sp == 'g') {
	header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
	setcookie("GALX", "IARFjGgZlac", 0, "/", "accounts.google.com", true);
	
	/*
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
	$galx = substr($data, strpos($data, 'GALX=')+5, 11);*/
	}
?>

<!doctype html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title[$lang];?></title>
	<script>
	function submit_check(){
		usernm = document.getElementById('username');
		passwd = document.getElementById('password');
		if(usernm.value=='' || passwd.value==''){
			alert("<?php echo $empty_alert[$lang];?>");
			return;
		}
		
		<?php /* if($sp=='g'){?>
			galx = document.getElementById('galx');
			galx.value = "<?php echo $galx;?>";
			console.log(galx.value);
		<?php }*/?>
		
		<?php if($sp=='n'){?>
			n_acc = document.getElementById('n_acc');
			n_acc.value = usernm.value;
		<?php }?>

		<?php if($sp=='g' || $sp=='n'){?>
		if(usernm.value.indexOf('@') ==-1){
			usernm.value += "<?php echo "@".$alias;?>";
		}
		<?php }?>
	}
	</script>
</head>
<body>
	<div id="wrap">
      <div id="mainform">
		<form action="<?php echo submit_action($sp);?>" method="POST">
			<input type="text" id="username" name="<?php echo $username[$sp];?>">@<?php echo $alias;?>
			<input type="password" id="password" name="<?php echo $password[$sp];?>">
			<?php echo addition_code($sp);?>
			<input type="submit" onClick="submit_check();" value="<?php echo $submit_btn[$lang];?>">
		</form>
	  </div>
    </div>
</body>
</html>
