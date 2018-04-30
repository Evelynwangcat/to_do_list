<?php 
session_start();
include("database.php");


try{
$stmt1 = $conn->prepare("SELECT * FROM account WHERE id = ? and name = ?");
$stmt1->bindValue(1,  $_SESSION["id"], PDO::PARAM_STR);
$stmt1->bindValue(2,  $_POST["search"], PDO::PARAM_STR);
$stmt1->execute();
 
   if($stmt1->rowCount()<=0){
    $stmt1 = $conn->prepare("SELECT * FROM account WHERE id = ? and phone = ?");
    $stmt1->bindValue(1,  $_SESSION["id"], PDO::PARAM_STR);
    $stmt1->bindValue(2,  $_POST["search"], PDO::PARAM_STR);
   $stmt1->execute();
   }
   if($stmt1->rowCount()<=0){
    $stmt1 = $conn->prepare("SELECT * FROM account WHERE id = ? and email = ?");
    $stmt1->bindValue(1,  $_SESSION["id"], PDO::PARAM_STR);
    $stmt1->bindValue(2,  $_POST["search"], PDO::PARAM_STR);
   $stmt1->execute();
   }

//      $_SESSION["authenticated"] = "true";
//          while($test= $stmt->fetch(PDO::FETCH_ASSOC)) {
//         echo   "
//         <div class='image image2'>
//         <a href='your_idea_detail.php?id=".$test["id"]."'>
//         <img class='idea_title idea_title2' src=".$test["account_pic"]. ">";
//         echo   "<p class='idea_discription'>".$test["name"]. " </p>
//         </a>
//         </div> 
//         " ;
    
//     }

//   while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//       $_SESSION["name"] = $row["name"];

//   header("Location: ../dashbord.php"); 
//     exit;
//   }
//   }
}
  catch (PDOException $e) {
      echo "There is an error";
      exit;
  }
  ?>

