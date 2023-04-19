<html>
<head>
    <title>Register</title>
</head>

<body>
    <a href="index.php">Home</a> <br />
    <?php
    include("connection.php");
    
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        
        //$username_error = "";
        //$errors = array();    
        
        $user_check_query = "SELECT * FROM login WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($mysqli, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
          if ($user['username'] === $username) {
           //array_push($errors, "Username already exists");
           echo "<font color='red'>Username already exists.</font><br/>";
           
          }
      
          if ($user['email'] === $email) {
            //array_push($errors, "email already exists");
            echo "<font color='red'>Email already exists.</font><br/>";
        }
        }
        if($username == "" || $pass == "" || $name == "" || $email == "") {
            echo "<font color='red'>All fields should be filled. Either one or many fields are empty.</font>";
            echo "<br/>";
            echo "<a href='register.php'>Go back</a>";
        } else {
            mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$username','$pass')")
            or die("Could not execute the insert query.");
			
            echo "<font color='green'>Registration successfully!</font>";
            echo "<br/>";
            echo "<a href='login.php'>Login</a>";
        }
    } else {
?>
        <p><font size="+2">Register</font></p>
        <form name="form1" method="post" action="">
            <table width="75%" border="0">
                <tr> 
                    <td width="10%">Full Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr> 
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>			
                <tr> 
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr> 
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr> 
                    <td> </td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>
</html>