

<?php
echo "<ul id='nav'>";


if ($_SESSION["authenticated"] == "true")
	{echo " <li><a class='active' href='dashbord.php'>My Accounts</a></li>
			<ul id='subnav'><li><a href='includes/kill_session_logout.php'>Logout</a></li></ul>
			"
			;}
else{
	echo "
	<ul  id='subnav'>
		<li><a class='active' href='register.php'>Register</a></li>
		  <li><a href='index.php'>Login</a></li>
	</ul>
	";}

?>


