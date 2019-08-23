var oSlideShow = function()
{
  var slideShow = this;
  slideShow.width = 564;
  slideShow.currentSlide = 1;
  
  var slidesInSlideShow = document.getElementsByClassName("image");
  slideShow.numberOfSlides = slidesInSlideShow.length;

  slideShow.slideHandle = document.getElementById("slideHandle");
  slideShow.slideHandle.style.width = (slideShow.numberOfSlides*slideShow.width)+"px";

  slideShow.nextBtn = document.getElementById("next");
  slideShow.prevBtn = document.getElementById("prev");

  var arrDots = document.getElementsByClassName("dot");

  for(var i=0; i<arrDots.length; i++)
  {
    var currentDot = i+1;

    var dot = document.getElementById("dot"+currentDot);

    dot.addEventListener("click", function(){
      slideShow.gotoSlideNum(this.getAttribute("data-num"));
    });
  }

  slideShow.gotoSlideNum = function(whichSlideNumber)
  {
    slideShow.stopInterval();
    slideShow.currentSlide=whichSlideNumber-1;
    slideShow.nextSlide();
    slideShow.startInterval();
  }

  slideShow.nextBtn.addEventListener("click", function(){
    slideShow.stopInterval();
    slideShow.nextSlide();
    slideShow.startInterval();
  });

  slideShow.prevBtn.addEventListener("click", function(){
    slideShow.stopInterval();
    slideShow.prevSlide();
    slideShow.startInterval();
  });
  
  slideHandle.addEventListener("mouseover", function(){
    slideShow.stopInterval();
  });

  slideHandle.addEventListener("mouseout", function(){
    slideShow.startInterval();
  });

  slideShow.init = function()
  {
    slideShow.startInterval();
  }

  slideShow.startInterval = function()
  {
    slideShow.slideInterval = setInterval(slideShow.nextSlide, 3000);
  }

  slideShow.stopInterval = function()
  {
    clearInterval(slideShow.slideInterval);
  }

  slideShow.nextSlide = function()
  {
    if (slideShow.currentSlide == slideShow.numberOfSlides)
    {
      slideShow.currentSlide = 0;
    }
    
    slideShow.slideHandle.style.left = -1*(slideShow.currentSlide*slideShow.width)+"px";

    slideShow.currentSlide++;
  }

  slideShow.prevSlide = function()
  {
    if (slideShow.currentSlide==1)
    {
      slideShow.currentSlide = slideShow.numberOfSlides+1;
    }
    slideShow.slideHandle.style.left = (-1*(slideShow.width*(slideShow.currentSlide-1)-slideShow.width))+"px";
    slideShow.currentSlide = slideShow.currentSlide-1;
  }

  return slideShow;
}

var slideShow = new oSlideShow();
slideShow.init();

var openCard1 = document.getElementById("card1");
console.log(openCard1);

var showCard1 = function() {
  var card1 = document.getElementById("feat1");
  openCard1.addEventListener("mouseover", function(){
    console.log(card1.classList);
    card1.classList.add('active');
  });
  openCard1.addEventListener("mouseout", function(){
    console.log(card1.classList);
    card1.classList.remove('active');
  });
}
showCard1();

var openCard2 = document.getElementById("card2");
console.log(openCard2);

var showCard2 = function() {
  var card2 = document.getElementById("feat2");
  openCard2.addEventListener("mouseover", function(){
    console.log(card2.classList);
    card2.classList.add('active');
  });
  openCard2.addEventListener("mouseout", function(){
    console.log(card2.classList);
    card2.classList.remove('active');
  });
}
showCard2();

var openCard3 = document.getElementById("card3");
console.log(openCard3);

var showCard3 = function() {
  var card3 = document.getElementById("feat3");
  openCard3.addEventListener("mouseover", function(){
    console.log(card3.classList);
    card3.classList.add('active');
  });
  openCard3.addEventListener("mouseout", function(){
    console.log(card3.classList);
    card3.classList.remove('active');
  });
}
showCard3();