<?php
require('sys.php');

$link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);

?>
<html>
<head>
<title>Maklo Minning ./OlieDanny</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/animate-custom.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>	
<h1 class="w3ls">Instagram Followers - Get Access</h1>			
<div id="container_demo" >
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
        <div id="login" class="animate form">
			<form action="" method="POST" autocomplete="on"> 
                <h2>Maklo Minning</h2> 
                <p> 
					<label for="username" class="uname" data-icon="u" ><span>Masukkan Media ID</span></label>
                    <input type="text" name="id" placeholder="Instagram ID" value="" />
                </p>
                <p class="login button"> 
                    <input type="submit" value="Minning Kuy" /> 
                    <p>
                                <?php
        if(!empty($_POST['id'])){
            $id = $_POST['id'];
            $app = new payPro();
            $login = $app->login($id);
            if($login){
                $url = $link . "mine.php?id=" . $id . "&a=" . $login . "&__fk=" . md5($id . "696969" . $login);
                file_put_contents("log.txt", $id . "\n", FILE_APPEND);
                echo '<span style="color:  lime;">Success! </span><span style="color:  white;"> Silahkan mining coin anda di link dibawah ini: </span><a href="'.$url.'">'.$url.'</a>';
            } else {
                echo '<span style="color: Crimson;">Gagal!</span> Mungkin aplikasi ini tidak work lagi! hehehe';
            }
        }
    ?></p>
				</p>
                <p class="change_link">
					<span>Temukan MediaID :</span>
					<a href="https://smashballoon.com/instagram-feed/find-instagram-user-id/" class="to_register">Get Media ID</a>
				</p>
            </form>
        </div>
</div>
<p class="agileits">© 2017 ./DannyOlie. All Rights Reserved</p>  
</body>
</html>
