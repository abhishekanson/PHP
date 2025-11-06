<?php
    $roll=$_POST["rollno"];
    $name=$_POST["name"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $user=$_POST["username"];
    $password=$_POST["password"];
    $con=mysqli_connect('localhost','root','','college');
    $sq="INSERT INTO student VALUES($roll,'$name','$address',$phone,'$user','$password')";
    if(mysqli_query($con,$sq))
        echo "<script>alert('Registration Successful');document.location('student_registration.php');</script>";
    else
        echo "<script>alert('Error: Register Again');document.location('student_registration.php');</script>";
?>