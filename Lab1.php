<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Lab_1.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label>Enter Your Marks: </label>
        <br>
        <label for="mark1">English</label>
        <input type="text" name="mark1" id="mark1">
        <br>
        <label for="mark2">Computer</label>
        <input type="text" name="mark2" id="mark2">
        <br>
        <label for="mark3">Maths</label>
        <input type="text" name="mark3" id="mark3">
        <br>
        <button type="button" id="calcBtn">Show Total Marks</button>
        <br><br>
        <div id="totalDisplay"></div>
        <br>
        <input type="submit" value="Submit">
    </form>
    <script>
    document.getElementById('calcBtn').addEventListener('click', function() {
      const a = parseFloat(document.getElementById('mark1').value) || 0;
      const b = parseFloat(document.getElementById('mark2').value) || 0;
      const c = parseFloat(document.getElementById('mark3').value) || 0;
      const total = a + b + c;
      document.getElementById('totalDisplay').innerHTML =
        '<strong>Total Marks = ' + total + '</strong>';
    });
    </script>
</body>
</html>