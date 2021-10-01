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
  }, 1000);
  setTimeout(function () {
    a.innerHTML = "<img src='images/svg/link4.svg' class='thumb' />";
  }, 2000);
  setTimeout(function () {
    a.innerHTML = "<img src='images/svg/link3.svg' class='thumb' />";
  }, 3000);
  setTimeout(function () {
    a.innerHTML = "<img src='images/svg/link2.svg' class='thumb' />";
  }, 4000);
   setTimeout(function () {
    a.innerHTML = "<img src='images/svg/link1.svg' class='thumb' />";
  }, 5000);
}
shortenLink();
setInterval(shortenLink, 6000);


var i = 0;
var a;
a = document.getElementById("shorten");
var txt = 'www.whatisthis.com/=?this-is-one-of-those-rather-long-links?!'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("shorten").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  } setTimeout(function () {
    a.innerHTML = "www.whatisthis.com/fixed-link";
  }, 4000);
}
typeWriter()
setInterval(typeWriter, 5000)

// To create fade in/fade out elements
$(document).ready(function () {
  loopbox();
  function loopbox() {
    $("#link-one")
      .fadeIn(750)
      .delay(3000)
      .fadeOut(750, function () {
        $("#link-two")
          .fadeIn(750)
          .delay(3000)
          .fadeOut(750, function () {
            loopbox();              
          });
      });
  }
});


