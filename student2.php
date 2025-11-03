<?php
    $con=mysqli_connect('localhost','root','','student');
    $sq="SELECT * from stud";
    $result=mysqli_query($con,$sq);
    if(mysqli_num_rows($result)>0) {
        echo "<label>Roll No.</label>";
        echo "<select>";
        while($row=mysqli_fetch_assoc($result)) {
            echo '<option value='.$row["rollno"].'>'.$row["rollno"].'</option>';
        }
        echo "</select>";
        
    }
?>