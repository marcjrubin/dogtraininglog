/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
  $(".menuHover").mouseenter(function(){
    $(this).css('background-color', '#BFBFBF');
  });
  
  $(".menuHover").mouseleave(function() {
     $(this).css('background-color', 'transparent'); 
  });
});
