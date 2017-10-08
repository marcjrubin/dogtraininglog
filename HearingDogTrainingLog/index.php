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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/about.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/form.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/logentry.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/parallax.css" rel="stylesheet" type="text/css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
                    <a href="Login.php" class="btn btn-primary btn-lg active">Login</a><br>
                    Login to enter your training log
                </p>
            </div>
        </section>
        
        <div class="parallax-container2" data-parallax="scroll" data-image-src="./assets/img/LabsChasingBalls.jpg"></div> 
        
        <section class="content-container">
            <div class="content-body">
                <h1>About</h1>
                <p>
                    A place where dog trainers and handlers log the training sessions
                </p>
            </div>
        </section>
        
        <div class="parallax-container3" data-parallax="scroll" data-image-src="./assets/img/LabsOnStairs.jpg"></div> 
        
        <section class="content-container">
            <div class="content-body">
                <h1>Contact</h1>
                <p>
                    Contact Us
                </p>
            </div>
        </section>
        
        <div class="parallax-container4" data-parallax="scroll" data-image-src="./assets/img/LabsRunning.jpg"></div> 
        
        <section class="content-container">
            <div class="content-body">
                <h1>Register</h1>
                <p>
                    Create an account and start logging away 
                </p>
            </div>
        </section>
        
             
                
        <script type="text/javascript">
            $('.parallax-container').parallax({imageSrc: '/assets/img/GraduateInGarden.jpg'});
            $('.parallax-container2').parallax({imageSrc: '/assets/img/LabsChasingBalls.jpg'});
            $('.parallax-container3').parallax({imageSrc: '/assets/img/LabsOnStairs.jpg'});
            $('.parallax-container4').parallax({imageSrc: '/assets/img/LabsRunning.jpg'});
        </script>
        
        

        <?php 
            include 'Footer.php';
        ?>
        
    </body>
</html>
