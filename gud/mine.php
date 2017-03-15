
<meta http-equiv="refresh" content="2">
<?php
require('sys.php');

$link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);

?>
<html>
<head>
<title>Mining Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/animate-custom.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<br><br><br><br>
    <div id="container_demo" >
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
        <div id="login" class="animate form">
<center>
    <h1 class="w3ls">Instagram Followers - Get Coin</h1>
    <p>
    <?php
    $f = false;
    $n = 0;
    
    $id = $_GET['id'];
    $a = $_GET['a'];
    $sec = $_GET['__fk'];
    if(!empty($id) AND !empty($a) AND !empty($sec)){
        if(md5($id . "696969" . $a) == $sec){
            $app = new payPro();
            $app->session = $a;
            $app->id = $id;
            
            if(isset($_POST['tukar'])){
                $tc = $_POST['__tc'];
                if($tc >= 20000){
                    $g = 'com.ty.vl.follower6';
                } else if($tc >= 6000){
                    $g = 'com.ty.vl.follower5';
                } else if($tc >= 2500){
                    $g = 'com.ty.vl.follower4';
                } else if($tc >= 500){
                    $g = 'com.ty.vl.follower3';
                } else if($tc >= 250){
                    $g = 'com.ty.vl.follower2';
                } else if($tc >= 80){
                    $g = 'com.ty.vl.follower1';
                } else {
                    $g = false;
                }
                if($g){
                    $v = $app->getFollowers($g);
                    if($v){
                        echo '<span style="color: green;">Success!</span> Followers berhasil dikirim, cek saja langsung!<br />';
                    } else {
                        echo '<span style="color: red;">Waho!</span> Ane bilang jangan maksain deh!<br />';
                    }
                } else {
                    echo '<span style="color: red;">Waho!</span> Coin lu kurang broh<br />';
                }
                
            }
			echo "ID : ".$id;
			echo "<br><br>";
			$zain=1;
			while($zain<=5){
            $gc = $app->getCoin(1, 100);
			echo "Jumlah Coin: ".$gc;
			echo "<br>";
			$zain++;
            if($gc >= 80){
                @file_put_contents("success.txt", $gc[0]);
                    $f = true;
                    $n = $gc;
					}
                }
            } 
         }
    
    ?>
    </p>
     <?php
    if($f == true){
    ?>
    <form action="" method="POST">
    <p class="login button"> 
        <input type="hidden" value="<?=$gc;?>" name="__tc" />
        <input type="submit" name="tukar" value="Tukar Followers" />
        <p>
    </form>  
    <?php
    }
    ?> 
    <p class="agileits">© 2017 ./Danny Olie. All Rights Reserved</p>  
</body>
</html>