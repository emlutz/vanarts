$(function()
{
  /////////////////HERO IMAGES
  var hero = $("#hero").data("image")
  console.log(hero)
  $("#hero").css("backgroundImage", "url('assets/"+hero+"')")

  /////////////////////Donate Modal Pop Up
  $(".donatePop").on("click", function(){
    $("#donateBox").addClass("active")
  })
  $(".closeIcon").on("click", function(){
    $("#donateBox").removeClass("active");
  })
})