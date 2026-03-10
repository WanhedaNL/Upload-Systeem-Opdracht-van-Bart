<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
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
    <main>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <article>
            <form action="admin.php" method="post" enctype="multipart/form-data">
                <label for="file">Upload a file:</label>
                <input type="file" id="file" name="file"><br><br>
                <input type="submit" value="Upload" required="fold">


            </form>
        </article>
        
    
    
    
    
    <a href="logout.php">Logout</a>




</main>
    
    
</body>
</html>