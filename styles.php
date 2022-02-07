<style>
  body {
    /* background-image: url("img/background.jpg"), url("img/background2.jpg"); */
    background-color: darkolivegreen; 
    height: 500px; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover; 
    margin-right: 15%;
    margin-left: 15%;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
  }

/***** Home Page Style */
  .homefeed {
      background-color: #474e5d;
      margin-top: 10px;
      text-align: center;
      float: center;
  }
  .bhalogo{
      margin-left: auto;
      margin-right: auto;
      width: 400px;
      padding: 5%;
  }
  .homedesc {
      font-size: 1.5em;
      padding-right:5%;
      padding-left:5%;
      padding-bottom: 5%;
      color: white;
  }
/****  Header styling  */
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    margin-bottom: 10px;
  }
  li {
    float: left;
  }
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  li a:hover {
    background-color: #111;
  }
  .header {
    padding-top: 10px;
  }
  /**** About page style  */
  html {
    box-sizing: border-box;
  }
  *, *:before, *:after {
    box-sizing: inherit;
  }
  .column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;

  }
  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }
  .about-header {
    text-align: center;
    font-size: 2em;
  }
  .container {
    padding: 5 16px;
    background-color: #474e5d;
    color: white;
  }
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  .title {
    color: grey;
  }
  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }
  .button:hover {
    background-color: #555;
  }
  /**** login page style */
  body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: maroon;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
img.avatar {
  width: 40%;
  border-radius: 50%;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
/*** Blog Page Style */
.blogpost-img {
  background-color: #aaa;
  width: 50%;
  padding: 20px;
}
.blogpost-background {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}
.blogpost-contents {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}
.newblogpost-background {
  background-color: #aaa;
  padding: 20px;
  margin-top: 20px;
}
#newblogpost-contents {
  width:75%;
  height: 50px;
}
#newblogpost-img {
  width:75%;
}
/****Events Styling */
.eventpost-background {
  background-color: #474e5d;
  padding: 1%;
}
.eventpost-container {
  background-color: #cccccc;
  margin: 3%;
  padding: 20px;
}
.eventpost-title {
  font-size: 2em;
  text-align: right;
}
.eventpost-desc {
  font-size: 1.2em;
}
#login_success{
  margin-top:50px;
  text-align: center;
  font: 3em;
}
#adminBox {
  background-color: #aaa;
  text-align: center;
  margin: 5px;
}
#eventConfirm {
  text-align:center;
  margin-top: 20px;
  background-color: #717171;
  color:white;
  padding:10%;
}
/**** Media reformat */
@media screen and (max-width: 800px) {
  body {
    /* background-image: url("img/background.jpg"), url("img/background2.jpg"); */
    background-color: darkolivegreen; 
    height: 500px; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover; 
    margin-right: 15%;
    margin-left: 15%;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
  }
/***** Home Page Style */
  .homefeed {
      background-color: #474e5d;
      margin-top: 10px;
      text-align: center;
      float: center;
  }
  .bhalogo{
      margin-left: auto;
      margin-right: auto;
      width: 250px;
      padding: 5%;
  }
  .homedesc {
      font-size: 1.3em;
      padding-right:5%;
      padding-left:5%;
      padding-bottom: 5%;
      color: white;
  }
/****  Header styling  */
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  li {
    float: left;
  }
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  li a:hover {
    background-color: #111;
  }
  .header {
    padding-top: 10px;
    text-align: center;
    margin-bottom: 5px;
  }
  /**** About page style  */
  html {
    box-sizing: border-box;
  }
  *, *:before, *:after {
    box-sizing: inherit;
  }
  .column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;

  }
  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }
  .about-header {
    text-align: center;
    font-size: 2em;
  }
  .container {
    padding: 5 16px;
    background-color: #474e5d;
    color: white;
  }
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  .title {
    color: grey;
  }
  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }
  .button:hover {
    background-color: #555;
  }
  /* https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Text/Wrapping_Text */
  .email {
    /* inline-size: 50px; */
    overflow-wrap: break-word;
  }
  /**** login page style */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.loginbutton {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: maroon;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
img.avatar {
  width: 40%;
  border-radius: 50%;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
/*** Blog Page Style */
.blogpost-img {
  background-color: #aaa;
  width: 50%;
  padding: 20px;
}
.blogpost-background {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}
.blogpost-contents {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}
.newblogpost-background {
  background-color: #aaa;
  padding: 20px;
  margin-top: 20px;
}
#newblogpost-contents {
  width:75%;
  height: 50px;
}
#newblogpost-img {
  width:75%;
}
/****Events Styling */
.eventpost-background {
  background-color: #474e5d;
  padding: 1%;
}
.eventpost-container {
  background-color: #cccccc;
  margin: 3%;
  padding: 20px;
}
.eventpost-title {
  font-size: 1.5em;
  text-align: right;
}
.eventpost-desc {
  font-size: 1em;
}
#login_success{
  margin-top:50px;
  text-align: center;
  font: 3em;
}
}
/* Images Tab Formatting */
* {box-sizing:border-box}
/* Slideshow container */
.slideshow-container {
  /* max-width: 1000px; */
  background-color: #333;
  position: relative;
  margin: auto;
  padding:10%;
}
/* Hide the images by default */
.mySlides {
  display: none;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>