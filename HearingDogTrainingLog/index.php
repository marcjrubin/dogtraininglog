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
        <link href="assets/css/about.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/form.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/logentry.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/parallax.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="assets/js/parallax.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php 
            include 'NavigationBar.php';
        ?>
        
        <div class="parallax-container" data-parallax="scroll" data-image-src="./assets/img/GraduateInGarden.jpg"></div>
        
        <section class="content-container">
            <div class="content-body">
                <h1>Login</h1>
                <p>
                    <a href="#" class="btn btn-primary btn-lg active">Login</a><br>
                    Login to enter your training log
                </p>
            </div>
        </section>
        
        <div class="parallax-container2" data-parallax="scroll" data-image-src="./assets/img/LabsChasingBalls.jpg"></div> 
        
        <section class="content-container">
            <div class="content-body">
                <h1>About</h1>
                <p>
                    A place where dog trainers and handlers log the training sessions. 
                </p>
            </div>
        </section>
        
             
                
        <script type="text/javascript">
            $('.parallax-container').parallax({imageSrc: '/assets/img/GraduateInGarden.jpg'});
            $('.parallax-container2').parallax({imageSrc: '/assets/img/LabsChasingBalls.jpg'});
        </script>
        
<!--        <main>
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
        </main>-->

        <?php 
            include 'Footer.php';
        ?>
        
    </body>
</html>
