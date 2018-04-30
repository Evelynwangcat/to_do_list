<?php 
session_start();
include("database.php");

$id = $_SESSION["id"];

try{
$stmt1 = $conn->prepare("SELECT * FROM account WHERE id` = '$id'");
$stmt1->execute();
// if($stmt == null){
//   $stmt = $conn->prepare("SELECT * FROM `client` WHERE `name` = '$name'");
//   $stmt->execute();
  // if($stmt == null){
  //   $stmt = $conn->prepare("SELECT * FROM `client` WHERE `email` = '$clientid'");
  //   $stmt->execute();

//   }else{
//      $_SESSION["authenticated"] = "true";

//   while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//       $_SESSION["name"] = $row["name"];

//   header("Location: ../dashbord.php"); 
//     exit;
//   }
// }
//}else{
//     $_SESSION["authenticated"] = "true";
//
//  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//      $_SESSION["phone"] = $row["phone"];
//
//   header("Location: ../dashbord.php"); 
//    exit;
//  }
 }

catch (PDOException $e) {
    echo "There is an erro when register";
    exit;
  }
//    else{
//     $_SESSION["authenticated"] = "true";
//
//  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//      $_SESSION["email"] = $row["email"];
//
//   header("Location: ../dashbord.php"); 
//    exit;
//  }
  

 


?>