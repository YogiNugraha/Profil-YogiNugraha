"use strict";

var navBar = document.querySelector(".navbar");
window.addEventListener("scroll", function () {
  var windowPosition = window.scrollY > 0;
  navBar.classList.toggle("scrolling-active", windowPosition);
});