<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <form action="./23.post.php" method="post">
        <input type="text" name="account" placeholder="account">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>

        <input type="checkbox" name="fav[]" id="fav1" value="swimming">
        <label for="fav1">swimming</label>
        <br>
        <input type="checkbox" name="fav[]" id="fav2" value="mountain climbing">
        <label for="fav2">mountain climbing</label>
        <br>
        <input type="checkbox" name="fav[]" id="fav3" value="jogging">
        <label for="fav3">jogging</label>
        <br>

        <button type="submit">Submit</button>

    </form>
</body>

</html>