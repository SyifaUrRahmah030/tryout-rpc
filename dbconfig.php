<?php

    try {

        $con = new PDO('mysql:host=localhost;dbname=id20238889_tryout', 'id20238889_rpc', '30M1424h_sy1f4', array(PDO::ATTR_PERSISTENT => true));
    } catch (PDOException $e) {

        echo $e->getMessage();
    }

    include_once 'AuthClass.php';

    $user = new Auth($con);
