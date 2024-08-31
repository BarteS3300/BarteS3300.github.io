<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "", "atestat");
    if(! $link)
    {
        print "Conexiune imposibila.";
        die();
    }

    if(isset($_POST['operatie']) && $_POST['password'] == $_POST['password2'])
    {
        $q = "INSERT INTO conturi
            (username, password) 
            VALUES 
            ('{$_POST['username']}', '{$_POST['password']}')";
        mysqli_query($link , $q);
        header("Location: ./");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account</title>
    <link rel="icon" type="image/png" href="img/Logo1.PNG">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
            <h1>Creare cont</h1>
            <form method="post">
                <input type="hidden" name="operatie" value="adaugare">
                <div>
                    Nume utilizator<input name="username">
                </div>
                <div>
                    Parola <input name="password">
                </div>
                <div>
                    Confirmare parola <input name="password2">
                </div>
                <div>
                    <input type="submit" value="Adaugare">
                </div>
            </form>
</body>
</html>