/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

describe('logTestController', function() {
    beforeEach(module('logApp'));
    
    var $controller;
    
    beforeEach(inject(function(_$controller_){
        $controller = _$controller_;
    }));    
    
    // tests go here
    describe('Log Controller', function() {
       it('sets todayDate to 1/1/2016', function() {
           var $scope = {};
           var controller = $controller('logTestController', {$scope: $scope});
           expect($scope.logTest.todayDate).toEqual('1/1/2016');
       }); 
       
       it('sets logEntry to microwave beep', function() {
           var $scope = {};
           var controller = $controller('logTestController', {$scope: $scope});
           expect($scope.logTest.logEntry).toEqual('microwave beep');
       });
       
       it('sets status to Yes', function() {
           var $scope = {};
           var controller = $controller('logTestController', {$scope: $scope});
           expect($scope.logTest.statusYesNo).toEqual('Yes');
       });
    });
    
});
