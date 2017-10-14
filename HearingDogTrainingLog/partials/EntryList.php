<?php
    session_start();
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
<div>
<script src="assets/js/navigation.js" type="text/javascript"></script>

<main> 
    <aside></aside>
    
    
    <section id="formEntry">
        
        <p style="float: right;"><a href="files/functions/Logout.php">Logout</a></p>
        
        <?php 
            echo "<h1>Welcome, " . $_SESSION["firstname"] . " " . $_SESSION["lastname"] . "!</h1>";
        ?>
        
        <hr>
        
        <h2>New Log Entry</h2>        
        <form id="logentry" name="logentry" ng-submit="processLog(logentry.$valid)" novalidate>

            <div id="logForm">                
                <!-- DATE --> 
                <div id="date-group" class="log-group" style="float: left;">
                    <label>Date: </label>
                    <input type="text" name="today" ng-model="logData.today" ng-focus="changeLabel('Filter:ng-focus')" ng-blur="changeLabel('Filter:ng-blur')" required>
                    <span class="help-block" ng-show=""></span>
                </div>

                <!-- TRAINING -->
                <div id="training-group" class="log-group" style="float: left;">
                    <label>&nbsp;&nbsp;&nbsp;Training: </label>
                    <input type="text" name="log" ng-model="logData.log" ng-focus="changeLabel('Filter:ng-focus')" ng-blur="changeLabel('Filter:ng-blur')" required>
                    <span class="help-block" ng-show=""></span>
                </div>

                <!-- SUCCESS? --> 
                <div id="success-group" class="log-group">
                    <label>&nbsp;&nbsp;&nbsp;Success?: 
                        <select name="status" ng-model="logData.status" required>
                            <option value="">-- Choose Yes or No --</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </label> 
                    <span class="help-block" ng-show=""></span>
                </div>            
            </div>

            <br>

            <!-- SUBMIT BUTTON -->
            <button type="button" class="btn btn-primary" ng-click="addLog()" ng-disabled="logentry.$invalid">
                Submit
            </button>      
            
            <!-- CANCEL BUTTON -->
            <button type="reset" class="btn btn-primary" ng-disabled="logentry.$invalid">
                Reset
            </button>
        </form>

<!--        <br> 

        <label>{{displayLabelText}}</label>-->
        
        <hr>

        <h2>Log Entry List</h2>

        <div class="container-fluid">
            <!--<h3>Search for specific entry</h3> 

            <form class="form-inline">
                <input type="text" class="form-control" ng-model="filterText">
                <button class="btn btn-default" ng-click="resetFilter()">Reset</button>
            </form>

            <br>

            <ul class="list-group" ng-repeat="historyItem in filterHistory">
                <li class="list-group-item">{{historyItem}}</li>
            </ul>

            <br>
            <hr>-->

            <!--<h3>Log Entries</h3>-->
            
            <div class="panel panel-default" ng-mouseover="changeLabel('Mouseover:review')" ng-repeat="log in logs | filter:filterText">
                <div class="panel-heading">
                    <a href="#/entrylist/{{rating.id}}" >Log #{{log.id}}</a>
                </div>
                
                <table class="table">
                        <tr style="text-align: center;">
                            <th>Date</th>
                            <th>Command</th>
                            <th>Success</th>
                        </tr>
                        <tr ng-show="error == null">
                            <td>{{log.today}}</td>
                            <td>{{log.log}}</td>
                            <td>{{log.status}}</td>
                        </tr>
                </table>

<!--                <div class="panel-body" ng-show="error == null">
                    <a href="#/entrylist/{{rating.id}}" >
                        {{log.today}}   {{log.log}}   {{log.status}}
                    </a>
                </div>                -->
                <div class="panel-body" ng-show="error != null">
                    {{error.errorMessage}}
                </div>
            </div>
        </div>

    </section>
</main>
</div>

