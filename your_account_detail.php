<?php session_start();
include("header.php");
include("nav.php");
include("includes/see_account_detail.php");
?>
</ul>
<h1>Account detail</h1>
<a href="dashbord.php">Go back</a>
<br><br>
<form action="includes/editidea.php" method="post" enctype="multipart/form-data">
    	
<div class="listBG">
<div class="global_div global_layout">
<div class="col">
    <img <?php echo "src=".$pic ?> alt="img/generic-image-placeholder.png"><br><br>
    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg"  />



</div>
<div class="col"> Name<br><br> Company <br><br> phone <br><br> Email <br><br>Status <br><br>Age <br><br>Position <br><br>Location <br><br>Record Date <br><br>Record<br><br>Todolist Date<br><br>To do list<br><br>






<br>

</div>
<br>


<div class="col">
    <input type="text" name="name" value=<?php echo $name?> ><br><br>
    <input type="text" value=<?php echo $company?> name="company"><br><br>
	<input type="text" value=<?php echo $phone?> name="phone"><br><br>
	<input type="text" value=<?php echo $email?> name="email" ><br><br>
	<input type="text" value=<?php echo $status?> name="status" ><br><br>
	<input type="number" value=<?php echo $age?> name="age" ><br><br>
	<!--<input type="text" value=<?php echo $company?> name="company" ><br><br>-->
	<input type="text" value=<?php echo $position?> name="position" ><br><br>
		<input type="text" value=<?php echo $location?> name="location" ><br><br>
<input type="date" value="<?php echo date('Y-m-d',strtotime($recorddate) )?>" name="recorddate" ><br><br>
	<input type="text" value=<?php echo $record?> name="record" ><br><br>
	<input type="date" value="<?php echo date('Y-m-d',strtotime($todolistdate) )?>" name="todolistdate" ><br><br>
	<input type="text" value=<?php echo $todolist?> name="todolist" ><br><br>
    <input type="submit" value="update" name="submit"  class="save">
    
</div>

<br>

<input type="submit" name="submit"  value="delete" class="deleteButton">
</div>
</div>
</form>
</body>
<?php 
include("foot.php");
?>