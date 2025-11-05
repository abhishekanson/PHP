<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function validatepassword() {
            const password=document.getElementById("password").value;
            const repassword=document.getElementById("re-password").value;
            if(password!=repassword) {
                alert("Error: Passwords doesn't match");
                document.getElementById("password").value="";
                document.getElementById("re-password").value="";
                document.getElementById("password").focus();
                return false;
            }
            else
                return true;
        }
    </script>
</head>
<body>
    <form action="student_details.php" method="post" onsubmit="return validatepassword()">
        <label for="rollno">RollNo</label>
        <input type="text" id="rollno" name="rollno">
        <br><br>
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <br><br>
        <label for="address">Address</label>
        <textarea id="address" name="address" rows="3" cols="25"></textarea>
        <br><br>
        <label for="phone">Ph No</label>
        <input type="tel" pattern="[0-9]{10}" name="phone" id="phone">
        <br><br>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br><br>
        <label for="re-password">Retype Password</label>
        <input type="password" name="re-password" id="re-password">
        <br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>