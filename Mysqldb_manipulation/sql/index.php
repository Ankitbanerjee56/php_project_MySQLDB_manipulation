<?php
include('db.php');
$sql = "select * from studentrecord ";
$stmt1 = $con->prepare($sql);
$stmt1->execute();
$arr1=$stmt1->fetchAll(PDO::FETCH_ASSOC);
$total_num = count($arr1);
$per_page=10;
$start=0;
if(isset($_GET['start'])){
    $start=$_GET['start'];
    $start=($start-1)*$per_page;
}
$num=floor($total_num/$per_page);
$rem=floor($total_num%$per_page);
if($rem>0){
    $num++;
}



if(isset($_POST['search']) && $_POST['search'] !=''){
    
    $search_text = $_POST['search_text'];
    $sql.="where name like'%$search_text%'";
    
    
}
else{
    $search_text='';
}
$sql.="order by id asc limit $start,$per_page";
$stmt = $con->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>';
//print_r($arr);
if($arr==null){
    echo '<script>alert("no record found")</script>';
}

?>
<form method="post">
    <input type="textbox" name="search_text" placeholder="search name" value="<?php echo $search_text?>">
    <input type="submit" name="search" value="search">
</form>
<a href="create.php">Add User</a>
<br>
<table border="1" cellspacing="4" cellpadding="4" width="50%">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>marks</th>
        <th>city</th>
        <th>operations</th>
    </tr>
    <?php foreach($arr as $list) {?>
    <tr>
        <td><?php echo $list['id']?></td>
        <td><?php echo $list['name']?></td>
        <th><?php echo $list['marks']?></td>
        <td><?php echo $list['city']?></td>
        <td><a href="delete.php?id=<?php echo $list['id']?>">delete</a>&nbsp;
        <a href="create.php?id=<?php echo $list['id']?>">Edit</a>
        
    </td>
    </tr>
<?php } ?>
</table>
<br><br>
<?php
 for($i=1;$i<=$num;$i++){
    echo '&nbsp;&nbsp;&nbsp;<a href="index.php?start='.$i.'">'.$i. '</a>&nbsp;';
 }
?>

