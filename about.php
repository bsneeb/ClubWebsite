<?php
  // w3 schools template used for about page template
  include("header.php");
?>

<html>

<script>
  function contact(){
    window.open("https://mail.google.com/mail/u/0/#inbox");
  }
</script>

<body>
<div class="about-section">
  <h1> About Saint Michael's Backcountry Hunters and Anglers </h1>
    <p> 
      We are the Backcountry Hunters and Anglers chapter at Saint Michael's! We are invloved in the conservation of public land,
      attempting to preserve the traditions of hunting, fishing, and all other outdoor activities. If you love the outdoors,
      you will love this club! Join today!
    </p>
</div>

<h2 class="about-header"> Chapter Leaders </h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/brady.jpg" alt="Brady" style="width:100%">
      <div class="container">
        <h2> Brady Neeb </h2>
        <p class="title"> President & Co-Founder </p>
        <p>
            My name is Brady, and I am from Medfield, MA. I love to fish and hunt!
        </p>
        <p class="email"> bneeb@mail.smcvt.edu </p>
        <p><button class="button" onclick="contact()"> Contact </button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/connor.jpg" alt="Connor" style="width:100%">
      <div class="container">
        <h2> Connor McCoy </h2>
        <p class="title"> Vice President </p>
        <p>
          Connor is a Junior from PA, and enjoys hunting and fishing. 
        </p>
        <p class="email"> cmccoy@mail.smcvt.edu </p>
        <p><button class="button" onclick="contact()"> Contact </button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="img/jp.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2> JP Labarge </h2>
        <p class="title"> Secretary </p>
        <p>
          JP is from Cape Cod, and loves to duck hunt. He is also president
          of ShredMC.
        </p>
        <p class="email"> jplabarge@mail.smcvt.edu </p>
        <p><button class="button" onclick="contact()"> Contact </button></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>