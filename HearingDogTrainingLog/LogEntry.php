<?php 
    session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="logApp">
    <head>
        <meta charset="UTF-8">
        <title>Log Entry <?php echo ''; ?></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/about.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/form.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/logentry.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>        
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.6/angular-route.js"></script>
        <script src="assets/js/scripts.js" type="text/javascript"></script>   
        <script src="assets/js/addnewentry.js" type="text/javascript"></script>        
    </head>
    
    <body>
        <?php
            include 'includes/NavigationBar.php';
        ?>  
        
        <div ng-view>
        </div>
        
        <?php
            include 'includes/Footer.php';
        ?>
    </body>
</html>
