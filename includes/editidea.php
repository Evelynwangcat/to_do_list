<?php
session_start();
include("database.php");

if( isset($_POST["submit"]))
{   
	
	if( $_POST["submit"]=="update")
	{ $iid=$_SESSION["accountid"]; 
      
	  try{
	      
	      $dir = "uploads/";
	      $target1 = str_replace(' ', '',$dir . basename($_FILES["image"]["name"]));
           
     $account_pic = "includes/".$target1;; 
     $stmt1 = $conn->prepare("SELECT * From account where id= ?  ");
                $stmt1->bindValue(1,$iid, PDO::PARAM_STR);
                $stmt1->execute();
                    while($test= $stmt1->fetch(PDO::FETCH_ASSOC)) {
       $pic=$test["account_pic"]; 
                    }
                    
                    $pic="includes/uploads/";
     if($account_pic!=$pic){
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target1)) {
		 { $path1 = "includes/".$target1; }
}
	  $sql5= "UPDATE account SET account_pic='".$account_pic."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql5);
		   $stmt->execute();}
		   
	      
	      
	      
	        if(isset($_POST['name']))
	  {$e=$_POST['name'];}
	  if($e){$sql5= "UPDATE account SET name='".$e."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql5);
		   $stmt->execute();}
	      
	      
	  
	  
	   if(isset($_POST['record']))
	  {$e=$_POST['record'];}
	  if($e){$sql5= "UPDATE account SET record='".$e."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql5);
		   $stmt->execute();}
		   
	  
	   if(isset($_POST['recorddate']))
	  {$f=$_POST['recorddate'];}
	  if($f){$sql6= "UPDATE account SET recorddate='".$f."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql6);
		   $stmt->execute();}
	  
     
   if(isset($_POST['todolist']))
	  {$e=$_POST['todolist'];}
	  if($e){$sql5= "UPDATE account SET todolist='".$e."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql5);
		   $stmt->execute();}
		   
	  
	   if(isset($_POST['todolistdate']))
	  {$f=$_POST['todolistdate'];}
	  if($f){$sql6= "UPDATE account SET todolistdate='".$f."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql6);
		   $stmt->execute();}
		   
	 	   if(isset($_POST['phone']))
	  {$f=$_POST['phone'];}
	  if($f){$sql6= "UPDATE account SET phone='".$f."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql6);
		   $stmt->execute();}
		   
	 
	 	   if(isset($_POST['email']))
	  {$f=$_POST['email'];}
	  if($f){$sql6= "UPDATE account SET email='".$f."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql6);
		   $stmt->execute();}
		   
	 
	 	   if(isset($_POST['company']))
	  {$f=$_POST['company'];}
	  if($f){$sql6= "UPDATE account SET company='".$f."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql6);
		   $stmt->execute();}
		   
	 
	 	   if(isset($_POST['age']))
	  {$f=$_POST['age'];}
	  if($f){$sql6= "UPDATE account SET age='".$f."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql6);
		   $stmt->execute();}
		   
	 	   if(isset($_POST['status']))
	  {$f=$_POST['status'];}
	  if($f){$sql6= "UPDATE account SET status='".$f."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql6);
		   $stmt->execute();}
		   
		   if(isset($_POST['location']))
	  {$f=$_POST['location'];}
	  if($f){$sql6= "UPDATE account SET location='".$f."' WHERE accountid='".$iid."'";
		   $stmt = $conn->prepare($sql6);
		   $stmt->execute();}
		   
	 
		   
		   
		   echo "Update already!!! <a href='../dashbord.php'>back</a>";
		   
		   
       }catch(PDOException $e){
		   
	   }
	 
	 
      
	  
	 
	  
	 
   
    }
	else if($_POST["submit"]=="delete"){
		
	header('Location: ../confirm_delete.php');
		
		
		
		
		
		
		
		
	} 
	
	 
	
	
	
	
}






?>