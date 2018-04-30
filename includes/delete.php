<?php 
session_start(); 
include("database.php");

if(isset($_POST['delete1']))
{

	
	header('Location: ../dashbord.php');
	
	
	
}
else if(isset($_POST['delete2']))
{
		
  	
		$stmt = $conn->prepare("DELETE From account WHERE accountid='".$_SESSION["accountid"]."'");
    $stmt->execute();
header('Location: ../dashbord.php');
}else{

   $stmt = $conn->prepare("SELECT * From account WHERE accountid='".$_SESSION["accountid"]."'");
   $stmt->execute();
  
 while($test= $stmt->fetch(PDO::FETCH_ASSOC)) {
 
 
         $title= $test["title"];
         $pic =	$test["ideal_pic"];	
          		 
         
 
	 }
	 
}

if(isset($_POST['delete3'])){
    
    $stmt = $conn->prepare("UPDATE account SET todolist=NULL,todolistdate=null WHERE accountid='".$_SESSION["accountid"]."'");
   $stmt->execute();
    
    header('Location: ../dashbord.php');

    
}









?>