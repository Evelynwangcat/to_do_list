<?php
session_start();
include("includes/database.php");
include("includes/show_user_account.php");
include("header.php");
include("nav.php");
?>

<!-- 
<div class="global_div"> tablecontainer-->
</ul>

<p class="" style="font-size:28px; text-align: center; padding: 20px;">To do list</p>
<div class="listBG">
<div class="global_layout"> 
<div style="width: 30%">
  <form action="includes/insertaccount2.php" method="post" enctype="multipart/form-data">
    <div class="col col2">
      <p style="font-size:25px">Quick Create</p>
      <input type="text" placeholder="enter name" name="name" required><br><br>
      <input type="text" placeholder="phone" name="phone" required><br><br>
      <input type="text" placeholder="email" name="email" required><br><br>
      <br><br><br>  <input type="submit" class="add_detail" name="add">
    </div>
  </form>
</div>
<div style="width: 70%">
    <table style="width:100%; font-size: 22px; background-color: #fff; text-align: center; margin-top: 20px;">
      <tr>
        <td>Task</td>
        <td>Date</td>
        <td>Account</td>
        <td>Update</td>
      </tr>
      <?php 
      
      echo "<div class='global_div'> ";
      $stmt1->execute();
        while($test= $stmt1->fetch(PDO::FETCH_ASSOC)) {
            $name =$_SESSION["name"];
            
            echo   "<tr><td><p class='account_todolist' style='font-size: 18px;'>".$test["todolist"]. " </p></td>
            <td>
            <p class='account_todolistdate' style='font-size: 18px;'>".$test["todolistdate"]. "</td>
            <td>
                 <p class='account_name'  style='font-size: 18px;'>".$test["name"]. "
            </td>
            <td>
                              <a href='your_account_detail2.php?id=".$test["accountid"]."'>update

            </td>
            </div> </tr>
            " ;
        
        }
       echo "</div>";
      ?>
    </table>
</div>
</div>
</div>
<!-- </div> -->

</body> 
<?php 
include("foot.php");
?>