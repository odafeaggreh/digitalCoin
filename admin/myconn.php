<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=digtdttj_coin','digtdttj_coinUser','Sonthelastmob1997');
    }catch (PDOException $ex) {
        $ex->getMessage();
        
    }