<?php
    session_start();
    include_once "module/modul-functii.php";
    $link = mysqli_connect("localhost", "root", "", "atestat");
    if(! $link)
    {
        print "Conexiune imposibila.";
        die();
    }       

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $clean = [
            'username' => trim($_POST['username']), 
            'password' => trim($_POST['password']),
        ];
        $sqlq = "SELECT ID,username,password,rol FROM conturi WHERE username = '{$clean['username']}'";
        $rez = mysqli_query($link , $sqlq);
        $user = mysqli_fetch_assoc($rez);
        if($user != [] && $clean['password'] == $user['password'])
                {
                    $_SESSION['username'] = $clean['username'];
                    $_SESSION['user_id'] = $user['ID'];
                    header("Location: main.php");
                    die();
                }
        MesajAdaugare('Utilizator/Parola incorecte' , 'danger');
        header("Location: index.php");
        die();
    }



    $pagina = "login";
    $culoare_text = "light";
    $culoare_bg = "light";
    if(isset($_SESSION['culoare_text']))
        $culoare_text = $_SESSION['culoare_text'];
    if(isset($_SESSION['culoare_bg']))
        $culoare_bg = $_SESSION['culoare_bg'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div>
    <form method="post">   
        <div class="m-3 text-start">
            <label class="control-label" for="username">
                <h5 class="login-info">Utilizator</h5>
            </label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="m-3 text-start">
                        <label class="control-label text-start" for="password">
                            <h5 class="login-info">Parola</h5>
                        </label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>                    
                  <div class="modal-footer">
                  <a class="btn" href="new-account.php" role="button">Creare cont</a>
                <button type="submit" class="btn btn-login">
                    <span class="button-text">Conectare</span>
                </button>
            </div>
        </form>
</div>
</body>
</html>