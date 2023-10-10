<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        #first{
            margin: 8rem;
            border-radius: .4rem;
            border: 5px solid green;
        }
        span {
            color: red;
        }
    </style>
</head>
<body>
    <div id="first">
        <form action= <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="post">
            <h2>PHP Form Validation Example.</h2>
            <span>* required field</span><br>
            Name: <input type="text" name="name" ><br>
            E-mail: <input type="email" name="email" id="email"><br>
            Website: <input type="text" name="web" id="web"><br>
            Comment: <textarea name="comment" id="comment" cols="40" rows="5"></textarea><br>
            Gender:
            <input type="radio" name="gender" value="female" > Female
            <input type="radio" name="gender" value="male" > Male
            <input type="radio" name="gender" value="other" > Other
        </form>
    </div>
</body>
</html>