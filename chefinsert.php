<?php
    if(isset($_POST['CHEF_NAME']) && isset($_POST['SPECIALITY']) && isset($_POST['CATEGORIES_ID']) ):
    $chefname= $_POST['CHEF_NAME'];
    $speciality = $_POST['SPECIALITY'];
       $categoriesid = $_POST['CATEGORIES_ID'];


    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO CHEF(chef_name,speciality,categories_id) VALUES('".$chefname."', '".$speciality."','".$categoriesid."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into chef table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
?> 