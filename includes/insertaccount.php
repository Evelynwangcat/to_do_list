<?php
session_start();

 try {
	 $dir = "uploads/";
	 
//	 $target1 = str_replace(' ', '',$dir . basename($_FILES["image"]["name"]));
//	 $target2 = str_replace(' ', '',$dir . basename($_FILES["file1"]["name"]));
//	 $target3 = str_replace(' ', '',$dir . basename($_FILES["file2"]["name"]));
//	 $target4 = str_replace(' ', '',$dir . basename($_FILES["file3"]["name"]));
//	 $target5 = str_replace(' ', '',$dir . basename($_FILES["file4"]["name"]));
//	 
//	 
//	 $path1 = "";
//	 $path2= "";
//	 $path3 = "";
//	 $path4 = "";
//	 $path5 = "";
//	 
//         if (move_uploaded_file($_FILES["image"]["tmp_name"], $target1)) {
//		 { $path1 = "includes/".$target1; }
//}
//	 
//	 	 if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target2)) {
//		 { $path2 = "includes/".$target2;}
//}
//	  	 if (move_uploaded_file($_FILES["file2"]["tmp_name"], $target3)) {
//		 { $path3 = "includes/".$target3; }
//}
//	    	 if (move_uploaded_file($_FILES["file3"]["tmp_name"], $target4)) {
//		 { $path4 = "includes/".$target4; }
//}
//	   	 if (move_uploaded_file($_FILES["file4"]["tmp_name"], $target5)) {
//		 { $path5 = "includes/".$target5;}
//}
//	 
//     $name= $_POST['name'];
//     $phone= $_POST['phone'];
//     $company= $_POST['company'];
//     $age= $_POST['age'];
//     $company= $_POST['company'];
//     $position= $_POST['position'];
//     $location= $_POST['location'];
//     $recorddate = $_POST['recorddate'];
//     $record= $_POST['record'];
//     $todolistdate= $_POST['todolistdate'];
//     $todolist= $_POST['todolist'];
//     $account_pic= $_POST['account_pic'];



    $target1 = str_replace(' ', '',$dir . basename($_FILES["image"]["name"]));
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target1)) {
		 { $path5 = "includes/".$target1;}
    }
	 
     
     
     	 
     $name= $_POST['name'];
     $phone= $_POST['phone'];
     $email= $_POST['email'];
     $status = $_POST['status'];
     $age= $_POST['age'];
     $company= $_POST['company'];
     $position= $_POST['position'];
     $location= $_POST['location'];
     $recorddate = $_POST['recorddate'];
     $record= $_POST['record'];
     $todolistdate= $_POST['todolistdate'];
     $todolist= $_POST['todolist'];
//     $$account_pic= $_POST['account_pic'];
     
     $id= $_SESSION["id"];
     
     $target1 = str_replace(' ', '',$dir . basename($_FILES["image"]["name"]));
     $account_pic = "includes/".$target1;; 
     
     
     
	 include("database.php");
	 
	 
      $stmt = $conn->prepare("INSERT INTO account(name,phone,email,status,age,company,position,location,recorddate,record,todolistdate,todolist,account_pic,id) VALUES( ?,?,?,?,?,?,?,?,?,?,?,?,?,?)" );
      $stmt->execute(array($name,$phone,$email,$status,$age,$company,$position,$location,$recorddate,$record,$todolistdate,$todolist,$account_pic,$id));
	     header("Location: ../dashbord.php");    

}catch (PDOException $e) {
      echo "There is an error";
      exit;
  }

  
  
?>