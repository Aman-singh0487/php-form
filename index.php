<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>html forms</title>
</head>
<body>
    <h1>HTMLFORMS</h1>

    <div class="container">
        <form action="connect.php" method="post">
            <div>
                <label>name</label>
                <input tpe="text" name="name" placeholder="enter your name">
            </div>
            <div>
                <label>email</label>
                <input type="text" name="email" placeholder="enter your email">
            </div>
            <div class="gendercontainer">
                <label>Gender</label>
                <input class="gender1" type="radio" name="gender" value="m">male
                <input class="gender1" type="radio" name="gender" value="f">female
                <input class="gender1" type="radio" name="gender" value="o">others
            </div>
            <div>
                <label>mobile</label>
                <input type="text" name="mobile" placeholder="enter your mobile">
            </div>
            <div>
                <label>password</label>
                <input type="password" name="password" placeholder="enter your password">
            </div>
            <div class="btn">
                <button type="submit">submit data</button>
            </div>
        </form>
    </div>
</body>
</html>