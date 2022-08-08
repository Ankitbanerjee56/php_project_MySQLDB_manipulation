<?php
try{
   $con =new PDO("mysql:host=localhost;dbname=sqltut","root","");
}
catch(PDOException $e){
    echo $e->getMessage();

}
  
   
?>