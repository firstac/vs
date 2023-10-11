<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <title>PHP</title>
</head>

<body>
    <?php
    //define variables and set to empty values.
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST['name']);
            //chack if name contains letters and white spaces.
            if (!preg_match("/^[a-zA-Z-'  ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed.";
            }
        }
        if (empty($_POST['email'])) {
            $emailErr = "Email is required.";
        } else {
            $email = test_input($_POST['email']);
            //check if e-mail address is well-formed.
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST['website'])) {
            $website = "";
        } else {
            $website = test_input($_POST['website']);
            //check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }
        if (empty($_POST['comment'])) {
            $comment = "";
        } else {
            $comment = test_input($_POST['comment']);
        }
        if (empty($_POST['gender'])) {
            $genderErr = "Gender is required.";
        } else {
            $gender = test_input($_POST['gender']);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>PHP Form Validation Example</h2>
    <?php date_default_timezone_set("America/New_York"); echo "date: ".date("y-m-d")." ".date("h:i:s a"); ?>;
    <?php echo "date: ".date("l"); ?>;
    <p><span class="error">* required field</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Name: <input type="text" name="name" id="name" value="<?php echo $name ?>"><span class="error">*
            <?php echo $nameErr; ?>
        </span><br><br>
        E-mail: <input type="text" name="email" id="email" value="<?php echo $email; ?>"><span class="error">*
            <?php echo $emailErr; ?>
        </span><br><br>
        Website: <input type="text" name="website" id="website" value=<?php echo $website; ?>><span class="error">*
            <?php echo $websiteErr; ?>
        </span><br><br>
        Comment: <textarea name="comment" id="comment" cols="40" rows="5"><?php echo $comment; ?></textarea><br><br>
        Gender: <input type="radio" name="gender" id="female" <?php if (isset($gender) && $gender == "female")
            echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" id="male" <?php if (isset($gender) && $gender == "male")
            echo "checked"; ?>
            value="male">Male
        <input type="radio" name="gender" id="other" <?php if (isset($gender) && $gender == "other")
            echo "checked"; ?>
            value="other">Other
        <input type="submit" value="Submit">
    </form>
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>



</body>

</html>