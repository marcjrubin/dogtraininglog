/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* AngularJS */ 
var logApp = angular.module('logApp', ['ngRoute']);

logApp.config(['$routeProvider', function($routeProvider) {
        $routeProvider.
            when('/entrylist', {
                templateUrl:'partials/EntryList.php',
                controller:'logController'
            }).
            when('/entrylist/:listID', {
                templateUrl:'partials/EntryListDetails.html',
                controller:'logDetailsController'
            }).
            otherwise({
                redirectTo:'/entrylist'
            });
}]);

logApp.controller('logDetailsController', ['$scope', '$routeParams', function($scope, $routeParams){
    var listID = $routeParams.listID;
    $scope.listID = listID;
}]);

logApp.controller('logController', ['$scope', '$http', function($scope, $http) {
        
//        $scope.changeLabel = function(labelText) {
//            $scope.displayLabelText = labelText;
//        };
                
    // add new row with new data input dynamically
    $scope.logs = [];
    
//    $scope.logs = [
//        {id:1, today:'1/1/2016', log:'type of training', status:'Yes'},
//        {id:2, today:'1/8/2016', log:'zipper', status:'Yes'},
//        {id:3, today:'1/10/2016', log:'doorbell', status:'No'}
//    ];    
      
    $scope.filterHistory = [];    
    $scope.resetFilter = function() {
        $scope.filterHistory.push($scope.filterText);
        $scope.filterText = "";
    };    
    
    $scope.resetFilter();
    $scope.filterHistory = [];
          
    $scope.logData = {};    
    
    var oriLog = angular.copy($scope.logFields);

    // AJAX & send data to server
    $scope.processLog = function() {            
        $http({
            method: 'GET',
            url: '/services/logs.php',
            params: {"id": logID} 
            //data: $.param($scope.logData),
            //headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).
        then(function (response) {
           $scope.log = response.data; 
        }, 
        function (response) {
            $scope.error = response.data;
        });
    };   

    $scope.addLog = function() {
        
        var log = {
           today: $scope.logData.today,
           log: $scope.logData.log,
           status: $scope.logData.status
        };

        $scope.logs.push(log);
        
        $scope.logData = angular.copy(oriLog);
        $scope.logentry.$setPristine();
        
    };        
}]);


/* JQuery */

/*$(document).ready(function () {
    $('#addNewLog').click(function () {
        var today = $('#today').val();
        var log = $('#log').val();
        var status = $('#status').val();
        $.post('LogEntryFile.php', {
            today : today,
            log : log,
            status : status
        })
            .done(function (data) {
                var parser = new DOMParser();
                var parsedXML = parser.parseFromString(data, "text/xml");
                var today = parsedXML.getElementsByTagName("today")[0].childNodes[0].nodeValue;
                var log = parsedXML.getElementsByTagName("log")[0].childNodes[0].nodeValue;
                var status = parsedXML.getElementsByTagName("status")[0].childNodes[0].nodeValue;
                $('#tableheadings').after('<tr>\n\
                    <td>' + today + '</td>\n\
                    <td>' + log + '</td>\n\
                    <td>' + status + '</td></tr>');
            });
    });
});*/

/* Javascript */ 

/*function addNewEntry() {
    
    var today = document.getElementById("today").value;
    var log = document.getElementById("log").value; 
    var status = document.getElementById("status").value; 
    
    if ((today === null || today === '') ||
            (log === null || log === '') ||
            (status === null || status === '')) {
        alert("Fields cannot be blank. Please fill in the blanks.");
        return false;
    }
    
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var text = request.responseText;
            var json = JSON.parse(text);
            var table = document.getElementById("tblLogEntry");
            
            var newRow = table.insertRow(1);
            
            var newCell = newRow.insertCell(0);
            newCell.innerHTML = json.today;
            
            newCell = newRow.insertCell(1);
            newCell.innerHTML = json.log;
            
            newCell = newRow.insertCell(2);
            newCell.innerHTML = json.status;            
        }
    }
    
    request.open("POST", "LogEntryFile.php", true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");    
    request.send("today=" + today + "&log=" + log + "&status=" + status);
    
    document.getElementById("today").value = ""; 
    document.getElementById("log").value = "";
    document.getElementById("status").value = "";
}*/
