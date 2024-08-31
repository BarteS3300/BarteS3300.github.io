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
                        <img src="img/Logo1.PNG" width="60" height="60" class="icon d-inline-block align-text-top m-0 h1">
                        <p class="username-nav center"><?=$username?></p>
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
                        <a class="nav-link my-nav-link" href="#recenzii">.review{}</a>
                      <li class="nav-item">
                        <a class="nav-link my-nav-link" href="#contact">.contact{}</a>
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
              </div>  
              <div class="col-md-6">
                <div class="lumina">
                    <div class="soare-luna">
                      <div class="perete">
                        <img src="img/Sample_1.png" class="sample img-fluid"/>
                      </div>
                    </div>
                </div>
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
            <a href="Bootstrap1/index.html" class="project-link"><div class="proiect-1 text-proiect">P1. Mini-Site</div></a>
            <a href="calc.php" class="project-link"><div class="proiect-2 text-proiect">P2. PHP Calculator</div></a>
            <a href="quiz.php" class="project-link"><div class="proiect-3 text-proiect">P3. Quiz</div></a>
          </div>
        </section>
        <section id="recenzii" class="">
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
              <a href="#"><h2>Mai multe recenzii</h2></a>
              <a href="#"><h2>Adauga recenzie</h2></a>
            </div>
          </div>
        </section>
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