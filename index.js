/* Scroll to top */

mybutton = document.getElementById("myBtn");

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }


function topFunction() {
  document.body.scrollTop = 0; //  Safari
  document.documentElement.scrollTop = 0; //  Chrome, Firefox, IE and Opera
}

/*Show further description on mobile view*/
function showDescA() {
    var x = document.getElementById("hidden-a");
if (x.style.display === "flex") {
  x.style.display = "none";
} else {
  x.style.display = "flex";
}
var y = document.getElementById("hidden-button-a");
if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
}