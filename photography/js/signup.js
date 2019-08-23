var modal = document.getElementById("signupFull");
  var openModalLink = document.getElementById("openSignup");
  var closeModalLink = document.getElementById("closeSignup");

  openModalLink.addEventListener("click", function(){
    modal.style.display = "flex";
    return false;
  });

  closeModalLink.addEventListener("click", function(){
    modal.style.display = "none";
    return false;
  });