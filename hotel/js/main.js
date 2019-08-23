$("path, circle").hover(function(e) {
  $('#guide_describe').css('display','block');
  $('#guide_describe').html($(this).data('info'));
});
$("path, circle").mouseleave(function(e) {
  $('#guide_describe').css('display','none');
});
$(document).mousemove(function(e) {
  $('#guide_describe').css('top',e.pageY-$('#guide_describe').height()-30);
  $('#guide_describe').css('left',e.pageX-($('#guide_describe').width())/2);
}).mouseover();

$(".menuPop").on("click", function(){
  $("#menuBox").addClass("active")
})
$(".closeIcon").on("click", function(){
  $("#menuBox").removeClass("active");
})
$('a[href="#"]').each(function(){
  $(this).click(function(e){
    e.preventDefault();
  //  console.log('clicking');
  });
  
});
function openNav() {
  document.getElementById("mobNav").style.width = "100%";
  document.getElementById("mobNav").style.opacity = "0.7"
}

function closeNav() {
  document.getElementById("mobNav").style.width = "0";
}
