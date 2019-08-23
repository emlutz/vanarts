$(function(){
  $('#login_name').on('input', function() {
    var input=$(this);
    var is_pass=input.val();
    if(is_pass){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });

  $('#login_email').on('input', function() {
    var input=$(this);
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var is_email=re.test(input.val());
    if(is_email){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });
  $('.required').keyup(function(event) {
    var input=$(this);
    var content=$(this).val();
    console.log(content);
    if(content){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}	
  });
})






























/////FROM ASSIGNMENT////////

// var submitInput = document.getElementById('submitBtn');

// submitInput.addEventListener('click', function(event){
//   event.preventDefault();
// });


// function checkForm()
// {
//   var allGood = true;

//   var arrRequiredFields = document.getElementsByClassName("required");

//   for (var i=0;i<arrRequiredFields.length;i++)
//   {
//     var currentReqField = arrRequiredFields[i];
//     // console.log(currentReqField);
//     checkCurrentField(currentReqField);

//     if(currentReqField.value === "")
//     {
//       // console.log(allGood);
//       currentReqField.style.backgroundColor = "orange";
//       alert("Please complete all fields.");
//       allGood = false;
//     } else {
//       // console.log(allGood);
//       currentReqField.style.backgroundColor = "floralwhite";
//     }
//   }
// }
// function checkCurrentField(currentReqField)
// {
//   allGood = true;
//   if(currentReqField.value == "")
//   {
//     currentReqField.style.backgroundColor = "orange";
//     allGood = false;
//   }
// }