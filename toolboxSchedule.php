<?php
session_start();
include("header.php");
?>

<!-- 
<div class="global_div"> tablecontainer-->
</ul>

<p class="" style="font-size:28px; text-align: center; padding: 20px;">Schedule</p>
<div class="listBG">
<div class="global_layout"> 
<div style="width: 30%">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="col col2">
      <p style="font-size:25px">Quick Create</p>
      <input type="text" placeholder="Date" name="date" required><br><br>
      <input type="text" placeholder="Your Toolbox" name="your toolbox" required><br><br>
      <input type="text" placeholder="Duration" name="duration" required><br><br>
      <br><br><br>  <input type="submit" class="add_detail" name="add">
    </div>
  </form>
</div>
<div style="width: 70%">
    <table style="width:100%; font-size: 22px; background-color: #fff; text-align: center; margin-top: 20px;">
      <tr>
        <td>Date</td>
        <td>Toolbox</td>
        <td>Duration</td>
        <td>Checkbox</td>
      </tr>
    </table>
</div>
</div>
</div>
<!-- </div> -->

</body> 
<?php 
include("foot.php");
?>