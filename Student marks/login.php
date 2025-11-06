<?php
    $user=$_POST["username"];
    $password=$_POST["password"];
    $conn=mysqli_connect('localhost','root','','college');
    $sq1="SELECT * FROM login WHERE username='$user' AND password='$password'";
    $sq2="INSERT INTO login VALUES('$user','$password')";

    if(isset($_POST['login'])) {
        $result=mysqli_query($conn,$sq1);
        if(mysqli_num_rows($result)>0)
            echo "<script>alert('Login Successful!');document.location('admin_page.php');</script>";
        else
            echo "<script>alert('Invalid Username or Password!');document.location('login_page.php');</script>";
    }
    
    if(isset($_POST['change'])) {
        if(mysqli_query($conn,$sq2))
            echo "<script>alert('Username / Password Updated!');document.location('login_page.php');</script>";
        else
            echo "<script>alert('Update Failed!');document.location('login_page.php');</script>";
    }
?>