  function editEnable() {
    document.getElementById('message').removeAttribute('readonly');
    document.getElementById('completedStatus').removeAttribute('readonly');
    var x = document.getElementById("saveButton");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }

  function enableProfileEdit() {
    document.getElementById('email').removeAttribute('readonly');
    document.getElementById('fname').removeAttribute('readonly');
    document.getElementById('lname').removeAttribute('readonly');
    document.getElementById('password').removeAttribute('readonly');
    var x = document.getElementById("saveButton");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }

  // document.getElementById('editEnable').onclick = function() {
      
  //  };
