<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hearing Dog Training Log</title>
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/home.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/loginform.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/flexslider.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/slides.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="assets/js/scripts.js" type="text/javascript"></script>
        <script src="assets/js/home.js" type="text/javascript"></script>
        <script src="assets/js/about.js" type="text/javascript"></script>
        <script src="assets/js/jquery.flexslider.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="navHeader" class="navHome">
            <div id="navBar">
                
                <header>
                    <h1>Hearing Dog Training Log</h1>
                </header>
                
                <nav>
                  <a id="login" href="#">Login</a>                     
                </nav>  
                
                <div id="loginbox">  
                    <div id="loginform">
                        <h2>Login</h2>
                        <form>
                          <input type="text" id="username" name="username" placeholder="username" size="30">

                          <br> 

                          <input type="password" id="pwd" name="pwd" placeholder="password" size="30">

                          <br> 

                          <input class="styleButton" type="submit" value="Login">
                        </form>
                    </div>
                </div>
                
            <script src="assets/js/login.js" type="text/javascript"></script>
                
            </div> 
         </div>
        
        <div id="backgroundImage">
            <header>
            </header>
        </div>
        
        <hr>
        
        <div>
            <h1>Flexslider</h1>    
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="assets/img/nature1.jpg" /></li>
                    <li><img src="assets/img/nature2.jpg" /></li>
                    <li><img src="assets/img/nature3.jpg" /></li>
                    <li><img src="assets/img/nature4.jpg" /></li>
                    <li><img src="assets/img/nature5.jpg" /></li>
                </ul>
            </div>
            
            <script type="text/javascript">
                $(function() {
                   $('.flexslider').flexslider({
                       slideshow: true,
                       startAt: 0,
                       slideshowSpeed: 2500,
                       initDelay: 0,
                       randomize: true,
                       animation: "slide"
                   }); 
                });
            </script>
            
        </div>        
        
        <hr>
        
        <main>
            <a href="About.php"><section id="about" class="topRow running" onmouseover="textItalics(this)" onmouseout="textNormal(this)">
                    <h2>About</h2>                
                </section></a>
            
            <a href="LogEntry.php"><section id="soundwork" class="topRow stairs" onmouseover="textItalics(this)" onmouseout="textNormal(this)">
                <h2>Log Entry</h2>
                </section></a>
            
            <a href="CreateNewAccount.php"><section id="signup" class="bottomRow swimming" onmouseover="textItalics(this)" onmouseout="textNormal(this)">
                <h2>Sign up</h2>
            </section></a>
            
            <a href="Contact.php"><section id="contact"  class="bottomRow garden" onmouseover="textItalics(this)" onmouseout="textNormal(this)">
                <h2>Contact</h2>
            </section></a>
        </main>
        
        <?php 
            include 'Footer.php';
        ?>
        
    </body>
</html>
