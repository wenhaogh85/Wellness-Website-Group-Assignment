/*function for dropdowns*/
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropdownFunc() {
    document.getElementById("infoDrop").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var dropdownFunc = document.getElementById("infoDrop");
      if (dropdownFunc.classList.contains('show')) {
        dropdownFunc.classList.remove('show');
      }
    }
  }

