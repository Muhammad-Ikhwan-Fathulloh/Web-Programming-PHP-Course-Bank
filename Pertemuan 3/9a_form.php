<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handling</title>
</head>
<body>
    <h1>Forms</h1>
    
    <!-- POST to 9b_handlePost.php -->
    <!-- data will send via http body request -->
    <form action="9b_handlePost.php" method="post">
        Nama: <input type="text" name="nama">
        Email: <input type="text" name="surel">
        <input type="submit">
    </form>

    <!-- GET to 9c_handleGet.php -->
    <!-- data will send via query url param -->
    <form action="9c_handleGet.php" method="get">
        Nama: <input type="text" name="nama">
        Email: <input type="text" name="surel">
        <input type="submit">
    </form>
</body>
</html>