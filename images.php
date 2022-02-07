<?php
    // styles.php also contain some w3schools resources
    include("header.php");
?>
<!-- Slideshow container https://www.w3schools.com/howto/howto_js_slideshow.asp -->
<!-- HTML, CSS and JS used on this page is from w3schools.com -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="img/bha1.jpeg" style="width:100%" alt="Crazy view while hunting">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="img/background.jpg" style="width:100%" alt="Beautiful mountain in MT">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="img/background2.jpg" style="width:100%" alt="Amazing sun through the clouds">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="img/bha2.jpg" style="width:100%" alt="BHA Swag for sale">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="img/bha3.jpg" style="width:100%" alt="Hunting with Dogs!!">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="img/bha4.jpg" style="width:100%" alt="Bow with bha sticker">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
</div>
<script>
    // more JS from w3schools
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    }
</script>