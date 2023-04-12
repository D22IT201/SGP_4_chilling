<?php 
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"]; 
    $email = $_POST["email"]; 
    $contact = $_POST["contact"]; 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    $cnfpassword = $_POST["cnfpassword"]; 
    $secque = $_POST["secque"]; 
    $secans = $_POST["secans"]; 


    include('db_connect.php');
    // $conn = new mysqli('localhost' , 'root' , '' , 'chilling_point');
    
    if($conn->connect_error)
    {
        die('Connection Failed   :' .$conn->connect_error);
        echo "<script> alert('UserID already available, try another...') </script>"; 
        echo "<script> window.location = 'register.php' </script>"; 
    }
    
    else
    {
        $stmt = $conn->prepare("INSERT INTO client_data (firstname, lastname, email, contact, username, password, repassword, sque, sans) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

      if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
      }

      $stmt->bind_param("sssssssss", $first_name, $last_name, $email, $contact, $username, $password, $cnfpassword, $secque, $secans);

      // Execute statement
      if ($stmt->execute() === false) {
        die("Error executing statement: " . $stmt->error);
      }

      echo "<script> alert('Record inserted successfully...') </script>"; 
        echo "<script> window.location = 'login.php' </script>"; 

      // Close statement and connection
    
      $stmt->close();
      $conn->close();
    }
  
?>