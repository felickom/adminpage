// Hamburger Menu Toggle
let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

// Our Course Tabs
(function ($) {
	
	"use strict";

	$(function() {
        $("#tabs").tabs();
    });
	

})(window.jQuery);

// When the user clicks on the button, toggle between hiding and showing the dropdown content
function myFunction() {
  console.log("test");
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
       
        openDropdown.classList.remove('show');
      }
    }
  }
}

