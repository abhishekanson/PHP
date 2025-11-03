<?php
    $name=$_POST["name"];
    $roll=$_POST["rollno"];
    $gender=$_POST["gender"];
    $mark1=$_POST["mark1"];
    $mark2=$_POST["mark2"];
    $con=mysqli_connect('localhost','root','','student');
    if($con)
        echo "Connection success<br>";
    else
        echo "Cannot connect";
    $ins_Que="INSERT INTO stud VALUES($roll,'$name','$gender',$mark1,$mark2,$mark1+$mark2)";
    $sq="SELECT rollno from stud where rollno=$roll";
    $result=mysqli_query($con,$sq);
    if(mysqli_num_rows($result)>0) {
        echo "<script>alert('Roll no already exists');document.location='student.php';</script>";
    }
    else if(mysqli_query($con,$ins_Que))
        echo "<script>alert('Inserted');document.location='student.php';</script>";
    else
         echo "Error in insertion"
    
?>