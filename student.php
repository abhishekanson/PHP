<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <form action="student1.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="rollno">Roll No</label>
        <input type="number" name="rollno">
        <br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <br>
        <label for="mark1">Mark1</label>
        <input type="number" name="mark1">
        <br>
        <label for="mark2">Mark2</label>
        <input type="number" name="mark2">
        <br>
        <input type="submit" value="Save">
        <input type="reset">
    </form>
</body>
</html>