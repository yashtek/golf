<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>animated website</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body style="overflow-x: hidden;">

  <nav class="nav">
    <div class="nav-logo">
      <img src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/logo-white.svg">

    </div>
    <div class="nav-menu" id="navMenu">
      <ul>

        <li><a href="#" class="link active">TOPTRACER RANGE</a></li>
        <li><a target="blank" href="https://www.youtube.com/watch?v=Bdi_VDEH92E" class="link">GOLF LESSONS</a></li>
        <li><a target="blank"href="https://www.youtube.com/watch?v=N6ESFroo3eo" class="link">ADVENTURE GOLF</a></li>
        <li><a target="blank"href="https://www.youtube.com/watch?v=S68TiEwjgw4" class="link">EVENTS</a></li>
      </ul>
    </div>
    <div class="nav-button">
      <?php
      session_start();
      if (isset($_SESSION['username'])) {
        echo '<p>Hello, ' . $_SESSION['username'] . '</p>';
        echo '<a href="logout.php"><button type="submit" class="btn">Logout</button></a>';
      } else {
        echo '<a href="login.php"><button type="submit" class="btn">Sign in</button></a>';
      }
      ?>
    </div>
    <div class="nav-menu-btn">
      <i class="bx bx-menu" onclick="myMenuFunction()"></i>
    </div>
  </nav>

  <!-- <div id="nav">
        <img src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/logo-white.svg" >
        <h4>TOPTRACER RANGE</h4>
        <h4>GOLF LESSONS</h4>
        <h4></h4>
        <h4>CAFE</h4>
        <h4>EVENTS</h4>
    </div>   -->
  <div id="cursor"></div>
  <div id="cursor-blur"></div>

  <video id="myVideo" loop muted>
    <source src="https://www.youtube.com/watch?v=N6ESFroo3eo" type="video/mp4">
  </video>
  
  <div id="main">
    <div id="page1">
      <h1>
        EAT. DRINK. PLAY.</h1>
      <h2>WELCOME TO SIDCUP FAMILY GOLF!</h2>
      <p>Sidcup Family Golf is a Toptracer driving range and crazy golf venue in Sidcup, South East London. Passionate
        about technology, player development and making golf fun and accessible to everyone.</p>
    </div>
    <div id="page2">
      <div id="scroller">
        <div id="scroller-in-1">
          <h4>TOPTRACER RANGE </h4>
          <h4> GOLF LESSONS </h4>
          <h4> ADVENTURE GOLF </h4>
          <h4> CAFÉ </h4>
          <h4> EVENTS </h4>


        </div>
        <div id="scroller-in-2">
          <h4>OPTRACER RANGE </h4>
          <h4> GOLF LESSONS </h4>
          <h4> ADVENTURE GOLF </h4>
          <h4> CAFÉ </h4>
          <h4> EVENTS </h4>


        </div>
      </div>
      <div id="about-us">
        <img class="hero"
          src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/toptracer-about-2-682x1024.jpg?strip=all&lossy=1&sharp=1&ssl=1"
          alt="">
        <div id="about-us-in">
          <h3>ABOUT US</h3>
          <p>Toptracer shows the flight path of golf balls with valuable shot data, as well as offering in-app games and
            practice modes. The technology redefines the driving range experience – from a functional training session
            to an exciting social experience for all ages and abilities. Toptracer also allows you to play the world’s
            most iconic courses at Pebble Beach, Torrey Pines, Royal St. George’s and St Andrews</p>
        </div>
        <img
          src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/toptracer-about-1-1024x682.jpg?strip=all&lossy=1&sharp=1&ssl=1"
          alt="">
      </div>
      <div id="cards-container">
        <div class="cards" id="card1">

          <div class="overlay">
            <h4>TOPRACCER RANGE</h4>
            <p>Stores shot data over time allowing you to learn more about your golf game and specific characteristics
              of each club in your bag.</p>
          </div>
        </div>
        <div class="cards" id="card2">
          <div class="overlay">
            <h4>ADVENTURE GOLF</h4>
            <p>Stores shot data over time allowing you to learn more about your golf game and specific characteristics
              of each club in your bag.</p>
          </div>
        </div>
        <div class="cards" id="card3">
          <div class="overlay">
            <h4>GOLF LESSONS</h4>
            <p>Stores shot data over time allowing you to learn more about your golf game and specific characteristics
              of each club in your bag.</p>
          </div>
        </div>
      </div>
      <div id="green-div">
        <img src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/dots-square.svg" alt="">
        <h4>SIGN UP FOR SIDCUP NEWS ADN SPECIAL OFFERS STRAIGHT TO YOUR INBOX</h4>
        <img src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/dots-square.svg" alt="">
      </div>

    </div>
    <div id="page3">

      <p> GETTING CLOSE.

        EXCELLENT COUPLE OF HOURS, RELAX AND ENJOY IN THE FUN. STAFF WERE ACCOMMODATING, FRIENDLY AND VERY HELPFUL. CAFÉ
        ON SITE FOR REFRESHMENTS ETC. WILL KEEP CHILDREN ENTERNTAINED DURING THE HOLIDAYS. WORTH A VISIT IF YOU HAVEN’T
        BEEN.

        PLEASANTLY SURPRISED TO DISCOVER THE MINI GOLF IS OPEN UNTIL 10PM DURING WEEKDAYS 😊 ALWAYS ENJOY VISIT HERE,
        CAFE DOES SOME NICE GOODIES TOO</p>
      <img id="colon1" src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/quote-left.svg" alt="">
      <img id="colon2" src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/quote-right.svg" alt="">
    </div>
    <div id="page4">
      <h1>WHAT ARE YOU WAITING FOR?</h1>
      <div class="elem">

        <h2>TOPTRACCER RANGE</h2>
        <img
          src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/page-toptracer-300x200.jpg?strip=all&lossy=1&sharp=1&ssl=1"
          alt="">
      </div>
      <div class="elem">
        <h2>GOLF LESSON</h2>
        <img
          src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/page-lessons-1024x683.jpg?strip=all&lossy=1&sharp=1&ssl=1"
          alt="">
      </div>
      <div class="elem">
        <h2>ADVENTURE GOLF</h2>
        <img
          src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/page-ag-1024x682.jpg?strip=all&lossy=1&sharp=1&ssl=1"
          alt="">
      </div>
    </div>

  </div>
  <div id="footer">
    <div id="f1">
      <img src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/logo-white.svg" alt="">
    </div>
    <div id="f2">
      <h3>TOPTRACER RANGE</h3>
      <h3>ADVENTURE GOLF</h3>
      <h3>CAFÉ</h3>
    </div>
    <div id="f3">
      <h1>EVENTS</h1>
      <h1> GOLF LESSONS</h1>
      <h1> CONTACT US</h1>
    </div>
    <div id="f4">
      <h3>A20, SIDCUP BYPASS<br>
        CHISLEHURST<br>
        KENT<br>
        BR7 6RP<br>

        TEL: 0208 309 0181 <br><span>GET DIRECTIONS</span></h3>
    </div>


  </div>
  <div id="copy">
    <h4>Copyright © 2023 Adventure Leisure Ltd. All rights reserved.

      Privacy Policy
      Terms And Conditions
      Gender Pay Gap</h4>
  </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
    integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
    integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="script.js"></script>
</body>

</html>