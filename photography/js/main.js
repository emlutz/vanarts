var submitInput = document.getElementById('formSubmitBtn');
  if(submitInput){
    submitInput.addEventListener('click', function(event){
      event.preventDefault();
      }
    )
  };

function checkForm() {
  var allGood = true;

  var arrRequiredFields = document.getElementsByClassName("required");

  for (var i=0;i<arrRequiredFields.length;i++)
  {
    var currentReqField = arrRequiredFields[i];
    // console.log(currentReqField);
    checkCurrentField(currentReqField);

    if(currentReqField.value === "")
    {
      // console.log(allGood);
      currentReqField.style.backgroundColor = "orange";
      alert("Please complete the required fields.");
      allGood = false;
    } else {
      // console.log(allGood);
      currentReqField.style.backgroundColor = "floralwhite";
    }
  }

  function checkCurrentField(currentReqField)
  {
    allGood = true;
    if(currentReqField.value == "")
    {
      currentReqField.style.backgroundColor = "orange";
      allGood = false;
    }
  }
}
