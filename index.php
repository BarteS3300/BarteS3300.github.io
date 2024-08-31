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
        //MesajAdaugare('Utilizator/Parola incorecte' , 'danger');
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
    <title>Home</title>
    <link rel="icon" type="image/png" href="img/Logo1.PNG">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

</head>
<body class="my-body">
    <header class="sticky-top my-nav-container">
        <nav class="navbar navbar-expand-sm navbar-light nav-bag my-nav">
                <div class="container-fluid">
                    <!--<a class="navbar-brand" href="">-->
                      <!-- Button trigger modal -->
                      <button type="button" class="my-modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="img/Logo1.PNG" width="60" height="60" class="icon d-inline-block align-text-top m-0 h1">
                      </button>
                      <button type="button" class="my-modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <?php 
                          //MesajAfisare();
                        ?>
                      </button>  
                   <!-- </a>-->
                  <button class="custom-toggler navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon custom-toggler-1" ></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" >
                      <li class="nav-item ">
                        <a class="nav-link my-nav-link" href="#">.is{}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link my-nav-link" href="#projects">.projects{}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link my-nav-link" href="#recenzii">.comeing soon{}</a>
                      <li class="nav-item">
                        <a class="nav-link my-nav-link" href="#contact">.comeing soon{}</a>
                      </li>
                    </ul> 
                  </div>
                </div>
              </nav>
      </header>
      <main>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
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
            </div>
          </div>
        </div>
        <section id="is">
          <div class="container" style="padding: 10vh;">
            <div class="row align-items-center">
              <div class="col-md-6">
                <h2 class="my-text ms-5" id="cuvant"></h2>
                <div class="lumina">
                  <div class="soare-luna">
                    <div class="perete">
                      <img src="img/Sample_1.png" class="sample img-fluid"/>
                    </div>
                  </div>
                </div>
              </div>  
              <div class="col-md-6">
                <h1>Hello and welcome!</h1>
                <br/>
                <p class='about-me-text'>
                  &nbsp; I'm <b>Silviu Bartes</b>, a passionate Computer Science student with a deep curiosity and eagerness to learn. 
                  I thrive on working with clients and exploring the vast world of technology, with a strong foundation in many domains of computer science. 
                  I'm interested in Artificial Intelligence, but I'm currently looking to grow my skills and find opportunities as a Full Stack Developer or Software Engineer.
                </p>
                <p class='about-me-text'>
                  &nbsp; This site is a small, fun project of mine—a place to showcase my journey, interests, and work. 
                  Feel free to scroll down to check out my CV, explore my GitHub for some interesting projects, and connect with me on LinkedIn. Thanks for stopping by!
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="load">
          <div class="container align-items-center my-work">
            <div class="animatie1"></div>
            <div class="animatie2"></div>
            <div class="animatie3"></div>
            <div class="animatie4"></div>
            <div class="animatie5"></div>
            <div class="animatie6"></div>
            <div class="linie-1">
                <div class="linie-1a">
                  <div class="linie-2">
                    <div class="linie-2a">
                      <div class="linie-3">
                        <div class="linie-3a">   
                        </div>   
                      </div>   
                    </div>   
                  </div>
                </div>
            </div>
          </div>
        </section>
        <section id="projects">
          <div class="container ">
            <a href="" class="project-link"><div class="proiect-1 text-proiect">CV</div></a>
            <a href="https://github.com/BarteS3300" class="project-link"><div class="proiect-2 text-proiect">GitHub</div></a>
            <a href="https://www.linkedin.com/in/silviu-bartes-7588b82a4/" class="project-link"><div class="proiect-3 text-proiect">LinkedIn</div></a>
          </div>
        </section>
        <div class="container" style="text-align: center;">
        <h1>🚧Work in progress🚧</h1>
        <h2>Come later...</h2>
        </div>

        <!-- <section id="recenzii" class="">
          <div class="container" style="text-align:center">
            <h1>Recenzii</h1>
            <div class="re-box">
              <div class="review">
                <div class="card re-card" style="width: 18rem;">
                  <div class="card-body re-bcard">
                    <h5 class="card-title">5 stele</h5>
                    <p class="card-text">bun</p>
                  </div>
                </div>
                <div class="card re-card" style="width: 18rem;">
                  <div class="card-body re-bcard">
                    <h5 class="card-title">3 stele</h5>
                    <p class="card-text">ok</p>
                  </div>
                </div>
                <div class="card re-card" style="width: 18rem;">
                  <div class="card-body re-bcard">
                    <h5 class="card-title">4 stele</h5>
                    <p class="card-text">aproape perfect</p>
                  </div>
                </div>
              </div>
            <div class="review-links">
              <a href="login.php"><h2>Mai multe recenzii</h2></a>
              <a href="login.php"><h2>Adauga recenzie</h2></a>
            </div>
          </div>
        </section> -->
        <footer></footer>
      </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/CSSRulePlugin.min.js" integrity="sha512-Aa3UvVB5yhH/dNXMt8nGZDD15Xmntq1ODcavfgT8omSLaomrJKYybWczzc6UJYDUAdqR1hmDJ47V4Ux50PPIuw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/type.js"></script>
    <script src="js/scroll.js"></script>
</body>
</html>