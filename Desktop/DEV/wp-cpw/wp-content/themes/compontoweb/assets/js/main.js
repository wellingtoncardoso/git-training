jQuery(document).ready(function($){
  
  //action from bars and times navbar
  $('.fa-bars').click(function(){
    $(this).toggleClass('fa-times')    
    $('nav').slideToggle()
  })
  $('nav').click(function(){
    $('.fa-bars').removeClass('fa-times')
    $(this).slideUp()
  })

});