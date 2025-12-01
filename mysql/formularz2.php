<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> .error {color: #FF0000;} </style>
</head>
<body>
    <?php $nameErr= $emailErr= $genderErr= $websiteErr= "";
    $name= $email =$gender= $comment= $website= "";?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">*<?php echo $nameErr;?></span>
        <br><br>
        E-Mail:<input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">*<?php echo $emailErr;?></span>
        <br><br>
        Website=<input type="text" name="website" value="<?php echo $website;?>">
        <span class="error">*<?php echo $websiteErr;?></span>
        Comment: <textarea name="comment" rows="" cols="30"><?php echo $comment;?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if(isset($gender)&&$gender=="female") echo "checked";?> value="female">female
        <input type="radio" name="gender" <?php if(isset($gender)&&$gender=="male") echo "checked";?> value="male">male
        <input type="radio" name="gender" <?php if(isset($gender)&&$gender=="other") echo "checked";?> value="other">other
        <span class="error">*<?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(empty($_POST["name"])){
        $nameErr="Name is required"; }
        else{
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-']*$/",$name)){
            $nameErr = "Only letters and white space allowed";
        }
    } ?>
        <?php
    if(empty($_POST["email"])){
        $emailErr="email is required"; }
        else{
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $nameErr = "invalid email";
        }
    } ?>
        <?php
    if(empty($_POST["website"])){
        $emailErr=""; }
        else{
        $email = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
            $websiteErr = "invalid URL";
        }
    } ?>
</body>
</html>
