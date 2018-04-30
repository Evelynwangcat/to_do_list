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
<div class="global_div">
<div class="col">
    <img <?php echo "src=".$pic ?> alt="img/generic-image-placeholder.png"><br><br>



</div>
<div class="col"> Name<br><br> To do list date <br><br> Email <br><br> To do list <br><br>









<br>

</div>
<br>


<div class="col">
    <input type="text" name="name" value=<?php echo $name?> ><br><br>
    <input type="date" value="<?php echo date('Y-m-d',strtotime($todolistdate) )?>" name="date"><br><br>
    <input type="text" value=<?php echo $email?> name="email"><br><br>
    <input type="text" value=<?php echo $todolist?> name="todolist"><br><br>
    <input type="submit" value="update" name="submit"  class="save">
</div>

<br>

</div>
</form>
</body>
<?php 
include("foot.php");
?>