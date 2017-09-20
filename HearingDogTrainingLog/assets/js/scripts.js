/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// display current year in copyright 
function currentYearCopyright() {
    var today = new Date();
    var year = today.getFullYear();
    
    document.getElementById('currentyear').innerHTML = year;
}

