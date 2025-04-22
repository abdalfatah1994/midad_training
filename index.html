<?php
$username = "";
$email= "";
$age = "";
$passwerd = "";
$config = "";
$erorrs_aray = [];
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $username = trim(string: $_GET["username"]);
    $email = trim(string: $_GET["email"]);
    $age = trim(string: $_GET["age"]);
    $passwerd = trim(string: $_GET["passwerd"]);
    $config = trim(string: $_GET["config"]);
    if(empty($username)){
        $erorrs_aray['username'] = "user name is required";
    }
    if(empty($email)){
        $erorrs_aray['email'] = "E-mail is required";
    }elseif (!filter_var(value:$email , filter:FILTER_VALIDATE_EMAIL)) {
        $erorrs_aray['email'] = "Invalid E-mail format";        
    }
    if(empty($age)){
        $erorrs_aray['age'] = "Age is required";
    }elseif (!is_numeric(value:$age)) {
        $erorrs_aray['age'] = "Invalid Age format";        
    }
    if(empty($passwerd)){
        $erorrs_aray['passwerd'] = "Passwerd is required";
    }elseif (strlen($age)>5) {
        $erorrs_aray['passwerd'] = "Invalid password format";        
    }
    if (empty($config)) {
        $erorrs_aray['config'] = "the config is required";
    }elseif($passwerd !== $config){
        $erorrs_aray['config'] = "the config is not match";
    }
    if(empty($erorrs_aray)){
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
        <form method="GET" action="./data.php">
            <h1>log in</h1>
            <label for="username">user name</label>
            <input type="text" name="username" id="username" value="<?= htmlspecialchars(string:$username) ?>">
            <div class="erorrs_attention"> <?php if(isset($erorrs_aray['username'])): ?>
                <p style="color: red;"><?= $erorrs_aray['username']  ?></p>
                 <?php endif; ?> 
                </div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars(string:$email) ?>">
                <div class="erorrs_attention"> <?php if(isset($erorrs_aray['email'])): ?>
                    <p style="color: red;"><?= $erorrs_aray['email']  ?></p>
                    <?php endif; ?> 
                </div>
                <label for="age">age</label>
                <input type="number" name="age" id="age" value="<?=  htmlspecialchars(string:$age) ?>">
                <div class="erorrs_attention"> <?php if(isset($erorrs_aray['age'])): ?>
                    <p style="color: red;"><?= $erorrs_aray['age']  ?></p>
                    <?php endif; ?> 
                </div>
                <label for="passwerd">password</label>
                <input type="password" name="passwerd" id="passwerd">
                <div class="erorrs_attention"> <?php if(isset($erorrs_aray['passwerd'])): ?>
                    <p style="color: red;"><?= $erorrs_aray['passwerd']  ?></p>
                    <?php endif; ?> 
                </div>
                <label for="passwerd">password confirm</label>
                <input type="password" name="config" id="config">
                <div class="erorrs_attention"> <?php if(isset($erorrs_aray['config'])): ?>
                                <p style="color: red;"><?= $erorrs_aray['config']  ?></p>
                                <?php endif; ?> 
                            </div>
                            <button>Submit</button>
                        </form>
                    </div>
                </body>
                </html>