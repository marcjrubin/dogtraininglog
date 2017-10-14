<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create New Account</title>
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/about.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="assets/js/scripts.js" type="text/javascript"></script>
        <script src="assets/js/about.js" type="text/javascript"></script>
        <link href="assets/css/form.css" rel="stylesheet" type="text/css"/> 
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body onload="currentYearCopyright()">
        <?php
            include 'NavigationBar.php';
        ?>
        
        <script src="assets/js/navigation.js" type="text/javascript"></script>
        
        <main>
            <header>
                <h1>Create New Account</h1>
            </header>            
            
            <section id="formEntry">
                <form id="createacct" name="createacct" action="CreateAccount2.php" method="post" onsubmit="return validateForm()">                    
                    <fieldset>
                        <legend>Enter your information</legend>     
                        <div id="html_element">
                            <table>
                                <tr>
                                    <td class="fieldName">First Name</td>
                                    <td class="inputField"><input type="text" id="firstname" name="firstname" form="createacct" size="30" maxlength="50" onchange="firstNameUpdated()"></td>                                
                                    <td id="firstnamemsg"></td>
                                </tr>
                                <tr>
                                    <td class="fieldName">Last Name</td>
                                    <td class="inputField"><input type="text" id="lastname" name="lastname" form="createacct" size="30" maxlength="50" onchange="lastNameUpdated()"></td>
                                    <td id="lastnamemsg"></td>
                                </tr>
                                <tr>
                                    <td class="fieldName">Email</td>
                                    <td class="inputField"><input type="email" id="emailAddress" name="emailAddress" form="createacct" size="30" maxlength="50" onchange="emailUpdated()"></td>
                                    <td id="emailmsg"></td>
                                </tr>
                                <tr>
                                    <td class="fieldName">Select a username</td>
                                    <td class="inputField"><input type="text" id="username" name="username" form="createacct" size="30" maxlength="50" onchange="usernameUpdated()"></td>
                                    <td id="usernamemsg"></td>
                                </tr>
                                <tr>
                                    <td class="fieldName">Enter your password</td>
                                    <td class="inputField"><input type="password" id="password" name="password" form="createacct" size="30" maxlength="50" onchange="pwdUpdated()"></td>
                                    <td id="passwordmsg"></td>
                                </tr>
                                <tr>
                                    <td class="fieldName">Confirm password</td>
                                    <td class="inputField"><input type="password" id="confirmpwd" name="confirmpwd" form="createacct" size="30" maxlength="50" onchange="confirmUpdated()"></td>
                                    <td id="confirmpwdmsg"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="2">
                                        <div class="g-recaptcha" data-sitekey="6LchaDQUAAAAAKfvJnG_6PREp1BhRnzELzjhT7VO"></div>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td id="saveMsg"></td>
                                    <td colspan="2" class="submitButton">                                    
                                        <input type="reset" value="Clear all fields" class="styleButton" onclick="clearFields(this)">
                                        <input type="submit" value="Create New Account" class="styleButton" onclick="return createNewAccount()">                                    
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </fieldset>
                </form>                
            </section>            
        </main>
        
        <?php 
            include 'Footer.php';
        ?>
        
    </body>
</html>
