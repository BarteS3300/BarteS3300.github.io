<?php
    session_start();
    include_once "module/modul-functii.php";
    $link = mysqli_connect("localhost", "root", "", "atestat");
    if(! $link)
    {
        print "Conexiune imposibila.";
        die();
    }       
    if(Login()==0)
        {
            header("Location: index.php");
        }
    $sqlq = "SELECT username FROM conturi WHERE ID = '{$_SESSION['user_id']}'";
    $rez = mysqli_query($link , $sqlq);
    $data = mysqli_fetch_assoc($rez);
    $username =  $data['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="icon" type="image/png" href="img/Logo1.PNG">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/quizstyle.css" rel="stylesheet">
</head>
<body>
<header class="sticky-top my-nav-container">
  <nav class="navbar navbar-expand-sm navbar-light nav-bag my-nav">
    <div class="container-fluid">
        <!--<a class="navbar-brand" href="">-->
          <img src="img/Logo1.PNG" width="60" height="60" class="icon d-inline-block align-text-top m-0 h1">
          <p class="username-nav center"><?=$username?></p>
        <!-- </a>-->
      <button class="custom-toggler navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon custom-toggler-1" ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" >
          <li class="nav-item ">
            <a class="nav-link my-nav-link" href="main.php">--></a>
          </li>
        </ul> 
      </div>
    </div>
  </nav>
</header>
<main class="container">
      <form method="post"> 
       <?php
            $pages = range(1,10);
            shuffle($pages);
            
            foreach($pages as $page)
                {
                    $sqlq = "SELECT ID, intrebare, a, b, c, d, raspuns FROM quiz WHERE ID = '{$page}'";
                    $rez = mysqli_query($link , $sqlq);
                    $intrebare = mysqli_fetch_assoc($rez);
                    if($intrebare != [])
                        {
                          $cnt++;
                          ?>
                            <label><?=$intrebare['intrebare']?></label>
                            <p><input type="radio" name="question[$cnt]" value="a"  /><?=$intrebare['a']?></p>
                            <p><input type="radio" name="question[$cnt]" value="b" /><?=$intrebare['b']?></p>
                            <p><input type="radio" name="question[$cnt]" value="c" /><?=$intrebare['c']?></p>
                            <p><input type="radio" name="question[$cnt]" value="d" /><?=$intrebare['d']?></p>
                          <?php
                        }
                }
        ?>
      <button name="submitBtn">Submit</button>
    </form>
</main>
</body>
</html>