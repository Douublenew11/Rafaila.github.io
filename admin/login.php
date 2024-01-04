<?php
require "../config/koneksi.php";
session_start();
if(isset($_SESSION["login"])){
    header("location: index.php");
}
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' || $password == '') {
        $_SESSION['error_login'] = 'Mohon Cek Kembali Username dan Password Anda';
    } else {
        $data_user = [
            'username' => 'Rafaila',
            'password' => '123',
        ];
        if ($username == $data_user['username'] && ($password) == $data_user['password']){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['login'] = TRUE;

            echo "<script>alert('Berhasil Login!');window.location.href = 'index.php'</script>";
        }
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>

    <style>
        input {
            width: 100%;
            height: 28px;
            border-radius: 7px;
            }
        * {
            box-sizing: border-box;
            }

            body {
            font-family: Arial, Helvetica, sans-serif;
            background-color : #be0000;
            }

            /* Float four columns side by side */
            .column {
            margin-left: 40%;
            margin-top: 8%;
            width: 25%;
            height: 50%;
            padding: 0 10px;
            }

            /* Remove extra left and right margins, due to padding in columns */
            .row {margin: 0 -5px;}

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            /* Style the counter cards */
            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
            padding: 16px;
            background-color: #f1f1f1;
            border-radius : 10px;
            }

            /* Responsive columns - one column layout (vertical) on small screens */
            @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
            }
            h1{
                text-align: center;
            }
            .submit {
                width: 100%;
                height: 30px;
                background-color: #be0000;
                color : white;
                border-radius: 7px;
            }
            .kembali {
                margin-left: 41%;
                margin-top : 2%;
                border-radius : 5px;
                background-color: #f1f1f1;
                width: 10%;
                height: 30px;
                font-size: 15px;
            }
            .kembali a {
                color : black;
                text-decoration : none;
            }
    </style>
</head>
<body>
<div class="row">
    <div class="column">
        <div class="card">
            <h1>Login</h1>
            <form action="" method="post">
            <input type="text" name="username" value="" placeholder="Masukkan Username Anda"></td><br><br>
            <input type="password" name="password" value="" placeholder="Masukkan Password Anda"></td><br> <br>
            <button class="submit" type="submit" name="login" id="submit">Login</button>
        </form>
        </div>
    </div>
    </div>
    <button class="kembali"> <a href="../" >Kembali ke home</a></button>
</body>
</html>