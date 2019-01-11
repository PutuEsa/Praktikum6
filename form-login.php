<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="formdesign.css">
    <title>LOGIN</title>
</head>
<body>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>Username dan Password salah</h3>';
        }
    }
    ?>
    <div class = "login-page">
    <div class = "form">
    <Form action="login.php" method="post">
        <h2>L O G I N</h2> <br>
        <p>
        <input type="text" name="nis" placeholder = "Masukkan NIS"> <br>
        <input type="password" name="password" placeholder = "Masukkan Password"> <br>
        </p>
        <button>LOGIN</button>
    </Form>
    </div>
    </div>
</body>
</html>