<?
require_once('config/config.php');
$query = "INSERT INTO coments VALUES(null, '".$_POST['body']."', '".$_POST['type']."', '".$_POST['type_id']."', 1)";
if(!mysqli_query($dbcnx, $query)){
 exit($query);
}
header("Location: ".$_SERVER['HTTP_REFERER']);