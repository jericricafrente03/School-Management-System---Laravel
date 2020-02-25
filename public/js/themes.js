$('#projects > li').hover(function(){
  $(this).siblings().addClass('blur');
}, function(){
  $(this).removeClass('clicked').siblings().removeClass('blur');
  
});

$('#projects > li').click(function(e){
  $(this).addClass('clicked');
});
