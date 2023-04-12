<?php
include('db_connect.php');
$username = $_POST["username"];
$password = $_POST["password"];

    if($conn->connect_error)
    {
			die('Connection Failed   :' .$conn->connect_error);
			echo "<script> alert('Login credential are incorrect'); </script>";
			echo "<script> window.location = 'login.php' </script>";
    }
    
    else
    {
		$sel = $conn->prepare ("select * from client_data where username= ?");

		$sel->bind_param("s" , $username );
		$sel->execute();
		$sel_result = $sel->get_result();

		if($sel_result->num_rows > 0)
		{
			$data = $sel_result->fetch_assoc();
			if($data['password'] === $password)
			{
				session_start();
				$_SESSION['user'] = $username;

				echo "<script> 
				function showSnackBar() {
  					var x = document.getElementById('snackbar');
  					x.className = 'show';
  					setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
				}

				</script>";
			 	echo "<script> window.location = 'index.php' </script>";
			}
			
			// else
			// {
			// 	echo "<script> alert('Login credential are incorrect'); </script>";
			//  	echo "<script> window.location = 'login.php' </script>";
			// }

		}
		else
		{
			echo "<script> alert('Login credential are incorrect'); </script>";
			echo "<script> window.location = 'login.php' </script>";
		}
    }
?>