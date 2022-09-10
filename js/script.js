// Scroll to top script
document.addEventListener("scroll", handleScroll);
// get a reference to our predefined button
var scrollToTopBtn = document.querySelector(".up");

function handleScroll() {
  var scrolled = window.pageYOffset;
  if (scrolled > 400) {
    //show button
    scrollToTopBtn.style.display = "block";
  } else {
    //hide button
    scrollToTopBtn.style.display = "none";
  }
}

scrollToTopBtn.addEventListener("click", scrollToTop);

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
// End of script

// Sticky Top Nav
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    if (window.scrollY > 100) {
      document.getElementById("header").classList.add("sticky-top");
    } else {
      document.getElementById("header").classList.remove("sticky-top");
    }
  });
});

// Animating Link Graphics
function shortenLink() {
  var a;
  a = document.getElementById("link");
  a.innerHTML = "<img src='images/svg/link6.svg' class='thumb' />";
  setTimeout(function () {
    a.innerHTML = "<img src='images/svg/link5.svg' class='thumb' />";
  }, 900);
  setTimeout(function () {
    a.innerHTML = "<img src='images/svg/link4.svg' class='thumb' />";
  }, 1800);
  setTimeout(function () {
    a.innerHTML = "<img src='images/svg/link3.svg' class='thumb' />";
  }, 2700);
  setTimeout(function () {
    a.innerHTML = "<img src='images/svg/link2.svg' class='thumb' />";
  }, 3600);
   setTimeout(function () {
    a.innerHTML = "<img src='images/svg/link1.svg' class='thumb' />";
  }, 4500);
}
shortenLink();
setInterval(shortenLink, 4500);


var i = 0;
var txt = 'https://.whatisthis.com/=?this-is-one-of-those-rather-long-and-hard-to-take-in-links?!'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */
var a = document.getElementById("shorten");
var timer = 0

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("shorten").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  } setTimeout(function () {
    a.innerHTML = "whatisthis.com/find-out";
  }, 5000);
}

typeWriter();
// setInterval(typeWriter, 5000);

// var intervalId = window.setInterval(function(){
//   typeWriter();
// }, 5000)

// Contact Us Panel
function openNav() {
  document.getElementById("contact-panel").style.width = "700px";
}

function closeNav() {
  document.getElementById("contact-panel").style.width = "0";
}

// Limit input to the + sign and numbers only
function isNumberKey(evt) {
  var charCode = evt.which ? evt.which : event.keyCode;
  if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
  return true;
}