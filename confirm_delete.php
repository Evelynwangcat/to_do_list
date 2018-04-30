<?php 
session_start();
include("header.php");
include("includes/delete.php");
?>
<div class="global_div">
<h1>Delete Comfirm</h1>

<h1>Are you sure delete thie account</h1>

<br>
<br>


<div class="mid">
<li><p class="idea_p"><?php echo $name?></p></li>

<br>
<?php echo $pic?>
<img class="idea_title" src= <?php echo $pic?> >	







<br>

</div> 
<br><br><br>


 <form action="includes/delete.php" method="post">
 

  <input type="submit" name="delete1" value="back">
 <input type="submit" name="delete2" value="yes">
 </form>

  </body>



<?php 
include("foot.php");
?>