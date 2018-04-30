<?php
session_start();
include("includes/database.php");
include("includes/show_user_account.php");
include("header.php");
include("nav.php");
$userid = $_SESSION["id"];

$stmt = $conn->prepare("SELECT * FROM `user` WHERE `id` = '$userid'");
$stmt->execute();
$row = $stmt->fetch();

// echo ($userid);
// echo 'test';
?>



<div class="global_div">


</ul>
<h1 id="greeting">Hi,<?= $row["name"] ?>! </h1>

<p id="datetime">Today is <?= date("Y/m/d") ?></p>

<div class="mianbuttoncontainer">
<li class="mainbutton"><a href="new_account.php" target="_blank">
 <img src="img/to-do-list_03.gif" style="width:100px" />New Account  
</a>
</li>

<li class="mainbutton">
  <a href="https://accounts.google.com" target="_blank"> 
  <img src="img/to-do-list_05.gif" style="width:100px" />Email  
</a>
</li>

<li class="mainbutton">
  <a href="new_task.php">
    <img src="img/to-do-list_08.gif" style="width:100px" />
    New Task
  </a>
</li>
</div>

<p class="info">View all the accounts below</p>

  <?php 
  
  echo "
<div class='listBG'>
  <div class='global_div global_layout'> ";
  $stmt1->execute();
    while($test= $stmt1->fetch(PDO::FETCH_ASSOC)) {
        echo   "
        <a href='your_account_detail.php?id=".$test["accountid"]."'>
        <div class='image image3'>
        
        <p class='idea_discription'><img class='idea_title idea_title3' src=".$test["account_pic"]. "></p>";
        echo   "<p class='idea_discription'>".$test["name"]. " </p>
        
        </div>
        </a> 
        " ;
    
    }
   echo "</div></div>";




  

?>

</div></body> 
<?php 
include("foot.php");
?>