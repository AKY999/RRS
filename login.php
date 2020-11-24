<body>
 <form action="" method="post">
	
	Login:
	 <br><br>
	 Username:
	 <input type="text" name="n">
	 <br>
	 Password:
	 <input type="password" name="p">
	 <br>
	 <input type="submit" name="s" value="Login">
	 <br>
	 Not Registered?
	 <a href="register.php"><h3>Click Here</h3></a>
	
	
	</form>


</body>

<?php
session_start();
@$_SESSION['n']=$_POST['n'];
@$_SESSION['p']=$_POST['p'];
@$_SESSION['s']=$_POST['s'];
$x=1;
$con=mysqli_connect("localhost","root","");
$s=mysqli_select_db($con,"reg");
$t="select * from id";
$tt=mysqli_query($con,$t);
if(@$_SESSION['s'])
{
	while($row=mysqli_fetch_array($tt))
	{
		if(@$_SESSION['n']==$row[0]&&@$_SESSION['p']==$row[3])
		{
	        $x=0; 	
			header("location: data.php");
			
		}
	  
	}
		if($x!=0)
			{
			echo "Invalid Username or Password";
			}
}
?>