<?php session_start(); ?>
<html>
<head>
    <title>Login</title>
</head>

<body>
<a href="index.php">Home</a> <br />
<?php
include("connection.php");

if(isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($mysqli, $_POST['username']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

    if($user == "" || $pass == "") {
        echo "Either username or password field is empty.";
        echo "<br/>";
        echo "<a href='login.php'>Go back</a>";
    } else {
        echo "Invalid username or password.";
        echo "<br/>";
        echo "<a href='login.php'>Go back</a>";
        $query = "SELECT * FROM login WHERE username = '$user'";  
        $result = mysqli_query($mysqli, $query);  
        if(mysqli_num_rows($result) > 0)  
        {  
             while($row = mysqli_fetch_array($result))  
             {  
                  if(password_verify($pass, $row["password"]))
                  { 
                      
		
        if(is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
        } else {
            
        }
    }
} 
    if(isset($_SESSION['valid'])) {
            header('Location: index.php');			
        }
    }
}
} else {
?>
    <p><font size="+2">Login</font></p>
    <form name="form1" method="post" action="">
        <table width="75%" border="0">
            <tr> 
                <td width="10%">Username</td>
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

