<?php
$errors_array = [];
$username = "";
$email= "";
$age = "";
$password = "";
$confirm_password = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = trim($_POST["username"]);
    $email = trim( $_POST["email"]);
    $age = trim( $_POST["age"]);
    $password = trim( $_POST["password"]);
    $confirm_password = trim( $_POST["confirm_password"]);
    if(empty($username)){
        $errors_array['username'] = "user name is required";
    }
    if(empty($email)){
        $errors_array['email'] = "E-mail is required";
    }elseif (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $errors_array['email'] = "Invalid E-mail format";        
    }
    if(empty($age)){
        $errors_array['age'] = "Age is required";
    }elseif (!is_numeric($age)) {
        $errors_array['age'] = "Invalid Age format";        
    }
    if(empty($password)){
        $errors_array['password'] = "password is required";
    }elseif (strlen($password) < 6) {
        $errors_array['password'] = "Invalid password format";        
    }
    if (empty($confirm_password)) {
        $errors_array['confirm_password'] = "the confirm_password is required";
    }elseif($password !== $confirm_password){
        $errors_array['confirm_password'] = "the confirm_password is not match";
    }
    if(empty($errors_array)){
        echo "<h2>the form submition is successfully</h2>";
    }
}
?>
<?php


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <title>Home page</title>
</head>
<body>
    <div class="header_home">
        <form method="POST" action="./data.php">
            <h1>log in</h1>
            <label for="username">user name</label>
            <input type="text" name="username" id="username" value="<?= htmlspecialchars($username) ?>">
            <div class="erorrs_attention"> <?php if(isset($errors_array['username'])): ?>
                <p style="color: red;"><?= $errors_array['username']  ?></p>
                 <?php endif; ?> 
                </div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>">
                <div class="erorrs_attention"> <?php if(isset($errors_array['email'])): ?>
                    <p style="color: red;"><?= $errors_array['email']  ?></p>
                    <?php endif; ?> 
                </div>
                <label for="age">age</label>
                <input type="number" name="age" id="age" value="<?=  htmlspecialchars($age) ?>">
                <div class="erorrs_attention"> <?php if(isset($errors_array['age'])): ?>
                    <p style="color: red;"><?= $errors_array['age']  ?></p>
                    <?php endif; ?> 
                </div>
                <label for="password">password</label>
                <input type="password" name="password" id="password">
                <div class="erorrs_attention"> <?php if(isset($errors_array['password'])): ?>
                    <p style="color: red;"><?= $errors_array['password']  ?></p>
                    <?php endif; ?> 
                </div>
                <label for="password">password confirm</label>
                <input type="password" name="confirm_password" id="confirm_password">
                <div class="erorrs_attention"> <?php if(isset($errors_array['confirm_password'])): ?>
                                <p style="color: red;"><?= $errors_array['confirm_password']  ?></p>
                                <?php endif; ?> 
                            </div>
                            <button>Submit</button>
                        </form>
                    </div>
                </body>
                </html>