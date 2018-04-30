<?php 
session_start();
include("header.php");
include("nav.php");
?>

 <div class='global_div global_div2'> 

<a style="color:#fff;">Login Here</a>

<form method="post" action="includes/authenticate.php" class="logintype" >
<label>username</label>
<input type="text" name="name" class="login_form login_form2" ><br><br>


<br>
<label>password</label>
<input type="text" name="pass"  class="login_form login_form2" >
<br><br>
<?php 
if (isset($_SESSION['authenticated']))
    
	{
        if($_SESSION['authenticated']=="false")
        
    {echo "password or username wrong";}

}
?>
<br>
<input type="submit" class="login_form login_form3">
<br><br>

</form>
<br><br><br><br><br><br>
</div> 

<?php 
include("foot.php");
session_destroy();
?>