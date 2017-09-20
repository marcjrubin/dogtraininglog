/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// highlight the nav background color
function navBackground(item) {
    item.style.backgroundColor = '#BFBFBF';
    item.style.color = '#404040';
}

// unhighlight the nav background color
function navBackgroundOut(item) {
    item.style.backgroundColor = 'transparent';
    item.style.color = '#d1d1d1';
}

// add text decoration - underline 
function underline(item) {
    item.style.textDecoration = 'underline';
}

// make underline disappear when mouse hovers out
function disappear(item) {
    item.style.textDecoration = 'none';
}

// collapsible content area
function showITSpecialist() {
    if (document.getElementById('itspec').style.display === 'block') {
        document.getElementById('itspec').style.display = 'none';
    } else {
        document.getElementById('itspec').style.display = 'block';
    }
}

function showITSpecialistTwo() {
    if (document.getElementById('itspeci').style.display === 'block') {
        document.getElementById('itspeci').style.display = 'none';
    } else {
        document.getElementById('itspeci').style.display = 'block';
    }
}

function showTechnicalProdAsst() {
    if (document.getElementById('techprod').style.display === 'block') {
        document.getElementById('techprod').style.display = 'none';
    } else {
        document.getElementById('techprod').style.display = 'block';
    }
}

function showComputerAsst() {
    if (document.getElementById('compasst').style.display === 'block') {
        document.getElementById('compasst').style.display = 'none';
    } else {
        document.getElementById('compasst').style.display = 'block';
    }
}



