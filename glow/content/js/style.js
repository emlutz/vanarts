$(document).ready(function() {
  // console.log("HOLA");
  const image = $('#image_path').text();
  console.log(image);
  if (!image) {
    $('header').css("background-image",`url(assets/ocean.jpg)`);
  } else {
    $('header').css("background-image",`url(assets/${image})`);
  }
});