<?php 
session_start();
include("header.php");
include("nav.php");
?>

    

</ul>
<h1>New Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="dashbord.php" style="font-size: 16px;">Go back>></a></h1>
<br><br>


<div class="listBG">
<div class="global_div global_layout" style="background-color: #fff">
<div class="col"><img src="img/generic-image-placeholder.png"><br><br>
<form action="includes/insertaccount.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg" required />

</div>

<div class="col"> New account(Name)<br><br> <!-- todolistdate <br><br> todolist <br><br> Description <br><br> -->
	phone <br><br>
	email <br><br>
	status <br><br>
	age <br><br>
	company <br><br>
	position <br><br>
	location <br><br>
    
	recorddate <br><br>
    record <br><br>
	todolistdate <br><br> 
	todolist <br><br>	




</div>
<div class="col">
    
	<input type="text" placeholder="enter name" name="name" required><br><br>
	<input type="text" placeholder="phone" name="phone" required><br><br>
	<input type="text" placeholder="email" name="email" required><br><br>
	<input type="text" placeholder="status" name="status" required><br><br>
	<input type="number" placeholder="age" name="age" required><br><br>
	<input type="text" placeholder="company" name="company" required><br><br>
	<input type="text" placeholder="position" name="position" required><br><br>
		<input type="text" placeholder="location" name="location" required><br><br>
<input type="date" placeholder="recorddate" name="recorddate" required><br><br>
	<input type="text" placeholder="record" name="record" required><br><br>
	<input type="date" placeholder="todolistdate" name="todolistdate" required><br><br>
	<input type="text" placeholder="todolist" name="todolist" required><br><br>
<br><br><br>  <input type="submit" class="add_detail" name="add">
</div>


<br>

</form>
</div>
</div>

<?php 
include("foot.php");
?>