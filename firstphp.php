<?php
require_once("pdo.php");
if(isset($_POST['name'])){
$sql= "INSERT INTO mydb.users(name, email) VALUES (:name, :email)";
$stmt=$pdo->prepare($sql);
$stmt->execute(array(
  ':name' => $_POST['name'],
  ':email' => $_POST['email']));
}
if(isset($_POST['delvalue'])){
$newsql="DELETE FROM mydb.users WHERE name= :delvalue";
$newstmt=$pdo->prepare($newsql);
$newstmt->execute(array(':delvalue' => $_POST['delvalue']));
}
 ?>
<html>
<?php
//$stmt= $pdo->query("SELECT name,email FROM users");
//while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
//print_r($row);
//}
?>
<form method="post">
<input type="text" name="name">
<input type="text" name="email">
<input type="submit">
<input type="text" name="delvalue">
<input type="submit">
</form>
</html>
