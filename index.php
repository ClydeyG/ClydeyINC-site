<!DOCTYPE html>

<?php

    require 'steamauth/steamauth.php';  

?>

<style>
.dropbtn {
  background-color: #35424a;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #35424a;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #e64316;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #e64316;}
</style>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="We are a group that does things">
        <meta name="keywords" content="Clydey, ClydeyG, Clyde, ClydeG">
        <meta name="author" content="Clyde Ghost">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Clydey Inc. | Welcome</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><img src="./img/logo_main.png" width="25px" height="28px"><span class="highlight"> Clydey</span> Inc. </h1>
                </div>
                <nav>
                    <ul>
                        <li class="current"><a href="../index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="new.php">New Stuff</a></li>
                        <li><a></a>                    <?php if(!isset($_SESSION['steamid'])) {

                        loginbutton();

                     } else { ?>                    </li>                       


   
                </nav>
            </div>                 </ul> <div class="dropdown">
    <button class="dropbtn"><?php     include ('steamauth/userInfo.php'); ?><img class="img-rounded" src="<?=$steamprofile['avatar'];?>"> <b><?=$steamprofile['personaname'];?></b></button>
    <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#"><?php logoutbutton(); } ?></a>
</div>
</div>    
        </header>

        <section id="showcase">
            <div class="container">
                <h1>We Do Things</h1>
                <p>We are a company that was set up by Clyde Ghost we have still not found out how we make money.</p>
            </div>
        </section>

        <section id="newsletter">
            <div class="container">
                    <form action="/signup" method="POST"></form>
                    <h1>Signup to Get Nothing!</h1>
                <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="form-control"
                      placeholder="Email"
                    />
                    <button type="submit" class="button_1" >Subscribe</button>
                </form>
                </div>
            </div>
        </section>

        <section id="boxes">
            <div class="container">
                <div class="box">
                    <img src="./img/logo_graph.png">
                    <h3>Professional Graphs</h3>
                    <p>We have a Professional Monotonectally Reconceptualizing Resource-Sucking Infomediaries Manager that makes graphs and provides them to the CEO for inspection</p>
                </div>
                <div class="box">
                    <img src="./img/logo_research.png">
                    <h3>Professional Graphs Decoding</h3>
                    <p>We have a Professional Research Team that figures out what the graphs are supposed to mean</p>
                </div>
                <div class="box">
                    <img src="./img/logo_secratary.png">
                    <h3>Professional Gay Secratary</h3>
                    <p>We have a Professional Gay Secretary that no one hired. He came in once and said "I work here" so now he is the secratary</p>
                </div>
            </div>
        </section>

        <footer>
            <p>Clydey INC, Copyright &copy; 2018</p>
        </footer>
    </body>
</html>