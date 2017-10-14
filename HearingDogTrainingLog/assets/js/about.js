/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// reset the form or clear all fields 
function clearFields(item) {  
  item.form.reset();
  
  clearMessages();
}

// after the fields are populated by user's input, 
// the error msg disappears
function firstNameUpdated() {
  var first = document.getElementById('firstname').value;  
  
  if (first !== null || first !== '') {
      var firstMsg = document.getElementById('firstnamemsg');
      firstMsg.textContent = ' ';
    }
}

function lastNameUpdated() {
  var last = document.getElementById('lastname').value;
  
  if (last !== null || last !== '') {
    var lastMsg = document.getElementById('lastnamemsg');
    lastMsg.textContent = ' ';
  }
}

function emailUpdated() {
  var email = document.getElementById('emailAddress').value;
  
  if (email !== null || email !== '') {
    var emailMsg = document.getElementById('emailmsg');
    emailMsg.textContent = ' '; 
  }
}

function usernameUpdated() {
  var username = document.getElementById('username').value;
  
  if (username !== null || username !== '') {
    var usernameMsg = document.getElementById('usernamemsg');
    usernameMsg.textContent = ' ';  
  }
}

function pwdUpdated() {
  var pwd = document.getElementById('password').value;
  
  if (pwd !== null || pwd !== '') {
    var pwdMsg = document.getElementById('passwordmsg');
    pwdMsg.textContent = ' ';
  }
}

function confirmUpdated() {
  var confirm = document.getElementById('confirmpwd').value;
  
  if (confirm !== null || confirm !== '') {
    var confirmMsg = document.getElementById('confirmpwdmsg');
    confirmMsg.textContent = ' ';
  }
} 

// reset the error messages
function clearMessages () {
  var first = document.getElementById('firstnamemsg');
  first.textContent = ' ';
  
  var last = document.getElementById('lastnamemsg');
  last.textContent = ' ';
  
  var email = document.getElementById('emailmsg');
  email.textContent = ' '; 
  
  var username = document.getElementById('usernamemsg');
  username.textContent = ' ';
  
  var pwd = document.getElementById('passwordmsg');
  pwd.textContent = ' ';
  
  var confirm = document.getElementById('confirmpwdmsg');
  confirm.textContent = ' ';
}

// test against input values available or not
function createNewAccount() {
  var first = document.getElementById('firstname').value;
  var last = document.getElementById('lastname').value;
  var email = document.getElementById('emailAddress').value;
  var username = document.getElementById('username').value;
  var pwd = document.getElementById('password').value;
  var confirm = document.getElementById('confirmpwd').value;
  
  if (first !== '' && last !== '' && email !== '' && username !== '' && pwd !== '' && confirm !== '') {
    clearMessages();
    if (pwd === confirm)  {      
      //var save = ' * Saved * ';
      //document.getElementById('saveMsg').innerHTML = save;
      return true;
    } else {
      var error = '* Passwords do not match';
      document.getElementById('confirmpwdmsg').innerHTML = error;
      
      document.getElementById('password').value = '';
      document.getElementById('confirmpwd').value = '';      
      
      return false;
    } 
  } else {
    if (first === null || first === '') {
      var firstError = '* Enter your first name';
      document.getElementById('firstnamemsg').innerHTML = firstError;
    }  
    
    if (last === null || last === '') {
      var lastError = '* Enter your last name';
      document.getElementById('lastnamemsg').innerHTML = lastError;
    }
    
    if (email === null || email === '') {
      var emailError = '* Enter your email address';
      document.getElementById('emailmsg').innerHTML = emailError;
    }
    
    if (username === null || username === '') {
      var error = '* Enter your username';
      document.getElementById('usernamemsg').innerHTML = error; 
    }
    
    if (pwd === null || pwd === '') {
      var error = '* Enter your password';
      document.getElementById('passwordmsg').innerHTML = error;
    }
    
    if (confirm === null || confirm === '') {
      var error = '* Enter confirm password';
      document.getElementById('confirmpwdmsg').innerHTML = error;
    }
    
    return false;
  }
} 