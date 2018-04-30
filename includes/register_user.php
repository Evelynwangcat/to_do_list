<?php 
include("database.php");
try {
$stmt = $conn->prepare("INSERT INTO user( pass, name,email) VALUES( ?,?,?)" );
$stmt->execute(array(
         $_POST["_pass"],     $_POST["_user"],     $_POST["_email"]
));
header("Location: ../thankspage.php");
}catch (PDOException $e) {
    echo "There is an erro when register";
    exit;
  }
?>
