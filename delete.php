<?php


include "config.php";

if(isset($_GET['id'])){


    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id = $id";
    
    $deleteData = mysqli_query($connected, $query);
    
    if($deleteData){
      
        header("location: index.php");
      
       }
    
       else{
    
        echo 'fail to data';
    
       }
    



}



?>