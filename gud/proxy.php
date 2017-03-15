<form action="" method="POST">
    <input type="text" name="ip" placeholder="IP:PORT" />
    <input type="submit" />
    <p>
    <?php
    if(!empty($_POST['ip'])){
        @file_put_contents("proxy.txt", $_POST['ip']);
    }
    ?>
    </p>
</form>