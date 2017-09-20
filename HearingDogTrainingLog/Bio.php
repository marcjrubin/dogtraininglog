<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Marc J Rubin - Developer's Bio</title>
        <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bio.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="assets/js/scripts.js" type="text/javascript"></script>
        <script src="assets/js/bio.js" type="text/javascript"></script>
    </head>
    <body onload="currentYearCopyright()">
        <?php
            //echo "Developer's Bio";
        ?>
        
        <div id="navHeader">
            <div id="navBar">
              
              <header>
                <h1>Marc J Rubin</h1>
              </header>
              
              <nav>
                <a href="#" onmouseover="navBackground(this);" onmouseout="navBackgroundOut(this)">Contact</a>
                <a href="#" onmouseover="navBackground(this);" onmouseout="navBackgroundOut(this)">Portfolio</a>
                <a href="#" onmouseover="navBackground(this);" onmouseout="navBackgroundOut(this)">Bio</a>        
                <a href="#" onmouseover="navBackground(this);" onmouseout="navBackgroundOut(this)">Home</a>
              </nav>
                
            </div>  
        </div>  
        
        <div id="backgroundImage">
            <header>                
            </header>
        </div>
        
        <main>
            <header>
                <h1>Developer's Bio</h1>
            </header>
            
            <section id="story">
                <!--<img class="imgDeveloperBio" src="assets/img/MarcRubinAlaska.jpg" alt="Marc J Rubin" width="250px" />-->
                <h2>His story</h2>
                <p>
                    Marc began his web development journey as a hobby in his first year 
                    of college in the late 1990s. However, he swayed off to experience 
                    outside of college such as taking business & international courses, 
                    world traveling, and skydiving adventures. But by the time he graduated, 
                    he landed a summer job in Vicenza, Italy working for the U.S. Army 
                    Garrison. From that job which eventually led to different employment 
                    that involved web & software development.                 
                </p>    
            </section>
            
            <section id="technology">
                <h2>Technology</h2>
                <table>
                    <tr>
                        <th>Microsoft Stack</th>
                        <th>Web Development</th>
                        <th>Architecture Patterns</th>
                        <th>Others</th>
                    </tr>
                    <tr>
                        <td>C#</td>
                        <td>HTML5</td>
                        <td>MVC</td>
                        <td>Scrum</td>
                    </tr>
                    <tr>
                        <td>ASP.NET</td>
                        <td>CSS3</td>
                        <td>MVVM</td>
                        <td>Business Analysis</td>
                    </tr>
                    <tr>
                        <td>MS SQL Server</td>
                        <td>JavaScript</td>
                        <td>TDD</td>
                        <td>Waterfall</td>
                    </tr>
                    <tr>
                        <td>Visual Basic</td>
                        <td>JQuery</td>
                        <td>OOP</td>
                        <td>Agile Development</td>
                    </tr>
                    <tr>
                        <td>SharePoint Dev 2010</td>
                        <td>PHP</td>
                        <td>N-tier</td>
                        <td>Kanban</td>
                    </tr>
                    <tr>
                        <td>Visual Studio</td>
                        <td>Angular JS</td>
                        <td>SOA</td>
                        <td>Refactoring</td>
                    </tr>                    
                </table>
            </section>
            
            <section id="experience">
                <h2>Work Experience</h2>
                <ul class="jobTitle">
                    <li>
                        <h3><a href="javascript:;" onclick="showITSpecialist()" onmouseover="underline(this)" onmouseout="disappear(this)">IT Specialist (.NET & SharePoint Development)</a><span class="indentDate"><em>May 2009-present</em></span></h3>
                        <ul id="itspec" class="jobDesc">
                            <li><strong>U.S. Census Bureau</strong>; Jeffersonville, Indiana</li>
                            <li class="indentDesc">Managing 12 applications for internal customers to meet their 
                            mission for the U.S. Census Bureau using ASP.NET, Visual Basic, SQL Stored Procedures, and SharePoint</li>
                            <li class="indentDesc">Migrating applications to meet current operating systems versions and SharePoint 2010</li>
                            <li class="indentDesc">Refactoring code in legacy application systems</li>
                            <li class="indentDesc">Reducing the amount of code lines and increasing time efficiency 
                            to complete the projects as scheduled</li>
                            <li class="indentDesc">Meet with stakeholders for business requirements gathering</li>
                            <li class="indentDesc">Collaborate with Database Administrator during deployment phase</li>
                        </ul>
                    </li>
                    <li>
                        <h3><a href="javascript:;" onclick="showITSpecialistTwo()" onmouseover="underline(this)" onmouseout="disappear(this)">IT Specialist (Web Development Intern)</a><span class="indentDate"><em>May 2008-September 2008</em></span></h3>
                        <ul id="itspeci" class="jobDesc">
                            <li><strong>U.S. Census Bureau</strong>; Suitland, Maryland</li>
                            <li class="indentDesc">Analyzed requirements for Intranet renovation for over 20 
                            units in the department</li>
                            <li class="indentDesc">Ensured that the websites are in accordance with the Census 
                            Intranet standard guidelines</li>
                            <li class="indentDesc">Converted all the sites using a new standardized look-and-feel 
                            template, and evaluated the web accessibility, which is in 
                            accordance with the Section 501 of the Rehabilitation Act using 
                            Dreamweaver CS3, XHTML, and CSS</li>
                            <li class="indentDesc">Prepared training materials and presented to webmasters to 
                            maintain their websites</li>
                        </ul>
                    </li>
                    <li>
                        <h3><a href="javascript:;" onclick="showTechnicalProdAsst()" onmouseover="underline(this)" onmouseout="disappear(this)">Technical Production Assistant</a><span class="indentDate"><em>August 2007-May 2008</em></span></h3>
                        <ul id="techprod" class="jobDesc">
                            <li><strong>Deaf Link</strong>; San Antonio, Texas</li>
                            <li class="indentDesc">Developed and maintained the website using Dreamweaver</li>
                            <li class="indentDesc">Performed immediate mass media production and disseminated the public 
                            emergency notification to the deaf community via email</li>
                        </ul>
                    </li>
                    <li>
                        <h3><a href="javascript:;" onclick="showComputerAsst()" onmouseover="underline(this)" onmouseout="disappear(this)">Computer Assistant</a><span class="indentDate"><em>June 2006-September 2006</em></span></h3>
                        <ul id="compasst" class="jobDesc">
                            <li><strong>U.S. Army Garrison</strong>; Vicenza, Italy</li>
                            <li class="indentDesc">Renovated and maintained U.S. Army Garrison-Vicenza website 
                            to accommodate active duty and civilian personnel in Italy</li>
                            <li class="indentDesc">Collaborated with Public Affairs Office for public release 
                            review in accordance with force protection guidelines</li>
                        </ul>
                    </li>
                </ul>
            </section>
            
            <section id="education">
                <h2>Education</h2>
                <ul class="schoolInfo">
                    <li>
                        <h3>Master of Science, Software Engineering</h3>
                        <p class="indentSchool"><a href="http://www.regis.edu" target="_blank">Regis University</a></p>
                        <p class="indentSchool">Expected Graduation Date: Fall 2017</p>
                    </li>
                    <li>
                        <h3 class="university">
                            Bachelor of Business Administration,
                            Management-International Business concentration
                        </h3>
                        <p class="indentSchool"><a href="http://www.utsa.edu" target="_blank">The University of Texas-San Antonio</a></p>
                        <p class="indentSchool">Graduation: May 2005</p>
                    </li>
                </ul>
            </section>
            
            <section id="interests">
                <h2>Hobbies & Interests</h2>
                <ul class="interestStyle">
                    <li>Skiing</li>
                    <li>Software Development</li>
                    <li>Hunting & Fishing</li>
                    <li>Reading</li>
                    <li>Outdoor activities</li>
                </ul>
            </section>
        </main>
        
        <div id="footerBar">
            <footer>                
                Marc J Rubin, Developer<br/>
                &copy;2016-<span id="currentyear"></span><br/>
                ASL Technologies
            </footer>
        </div>
        
    </body>
</html>
