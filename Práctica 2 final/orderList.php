<?php
include_once('lib.php');
    if(User::isClient()){
        $userID=$_GET['id'];
        View::start('Client');
        
        View::showOrderTable($userID);
        echo "<div class=\"centre\"><div class=\"button\"><a class=\"a\" href='clientIndex.php?id=".$userID."'>Volver</a></div></div>";
        View::end();
    }
?>