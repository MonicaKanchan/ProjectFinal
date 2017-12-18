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
  // document.getElementById('editEnable').onclick = function() {
      
  //  };
