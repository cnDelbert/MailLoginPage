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
		var usernm = document.getElementById('username');
		var passwd = document.getElementById('password');
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
			var n_acc = document.getElementById('n_acc');
			n_acc.value = usernm.value;
		<?php }?>

		<?php if($sp=='g' || $sp=='n'){?>
		if(usernm.value.indexOf('@') ==-1){
			usernm.value += "<?php echo "@".$alias;?>";
		}
		<?php }?>
	}
	</script>
    <link rel="stylesheet" href="css/master.css" type="text/css"/>
</head>
<body>
    <div class="title_bar">
        <div class="header">
            <div class="logo">
                <img src="<?php if(empty($_GET['logo'])) echo $default_logo; else echo $_GET['logo'];?>"> 
                <?php echo $page_title[$lang];?>

            </div>
            <div class="help">
                <a target="_blank" href="https://github.com/cnDelbert/MailLoginPage"><?php echo $help_info[$lang];?></a>
            </div>
        </div>
    </div>
	<div id="wrap" style="background-image: url(<?php if(empty($_GET['bgimg'])) echo $default_bgimg[array_rand($default_bgimg)]; else echo $_GET['bgimg'];?>)">
      <div id="mainform">
		<form action="<?php echo submit_action($sp);?>" method="POST">
            <label for="username"><input type="text" id="username" name="<?php echo $username[$sp];?>"> @ <?php echo $alias;?></label>
			<input type="password" id="password" name="<?php echo $password[$sp];?>">
			<?php echo addition_code($sp);?>
			<input class="btn" type="submit" onClick="submit_check();" value="<?php echo $submit_btn[$lang];?>"> <input
                type="reset" class="btn" value="<?php echo $reset_btn[$lang];?>"/>
		</form>
	  </div>
    </div>

    <div class="footer">&copy 2015<?php if(date('Y')>2015) echo date('-Y');?> by <a href="//delbert.me">Delbert</a></div>
</body>
</html>
