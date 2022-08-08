<?php
include('db.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $marks=$_POST['marks'];
    $city=$_POST['city'];
    $id=$_POST['id'];
    if($id>0){
        $sql="update studentrecord set name = '$name', marks = '$marks', city = '$city' where id='$id'";
    }
    else{
    $sql="insert into studentrecord(name,marks,city)values('$name','$marks','$city')";
}
    $stmt=$con->prepare($sql);
    $stmt->execute();
    header('location:index.php');
    die();
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from studentrecord where id='$id'";
    $stmt=$con->prepare($sql);
    $stmt->execute();
    $arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $name=$arr['0']['name'];
    $marks=$arr['0']['marks'];
    $city=$arr['0']['city'];
}
else{
    $name='';
    $marks='';
    $city='';
    $id='';

}

?>
<form method="post">
<table border="1" cellspacing="4" cellpadding="4" width="50%">
    <tr>
        <td>Name</td>
        <td><input type="textbox" name="name" value="<?php echo $name
        ?>"></td>
    </tr>
    <tr>
        <td>Marks</td>
        <td><input type="textbox" name="marks" value="<?php echo $marks
        ?>"></td>
    </tr>
    <tr>
        <td>City</td>
        <td><input type="textbox" name="city" value="<?php echo $city
        ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Enter"></td>
    </tr>
</table>
               <input type="hidden" name="id" value="<?php echo $id?>">
</form>
