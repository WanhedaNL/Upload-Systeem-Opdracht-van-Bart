<?php 
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$ressult=$conn->query($sql);
if($ressult->num_rows>0){
    $_SESSION['username']=$username;
    header("Location: index.php");
    echo "Login successful";
}else {
    echo "Invalid username or password";
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <form action=" login.php ">
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">



        </form>
  
    </main>
</body>
</html>