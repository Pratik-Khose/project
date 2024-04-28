<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Visual Text</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="pages/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="pages/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="pages/css/responsive.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="logo.png">


</head>

<body>


<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#">
            <span>
          <h3>Welcome <span><?=$_SESSION['name'];?></span></h3>
          </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages\aboutprem.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages\serviceprem.html"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact-form\index.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php" class="btn">LOGOUT</a>
                </li>
              </ul>
            </div>
            <!--<div class="quote_btn-container ">
              <a href="">
                <img src="images/iloveyou.png" alt="">
                <span>
                  
                </span>
              </a>
              <form class="form-inline">
                
              </form>
            </div>-->
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                      VISUAL TEXT
                    </h1>
                    <p>
                      Welcome to VISUAL TEXT, a cutting-edge online platform revolutionizing the way you handle text extraction, translation, and document formatting.
                      We welcome you to the Premium Page of the website.Enjoy all our services at it full extent.
                    </p>
                   <div class="btn-box">
                      <a href="#" id="celebrate-button" class="btn-1">
                       Celebrate!
                      </a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="pages/images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="pages/images/about-img2.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Our mission is to simplify and enhance the process of working with text, making it more accessible and efficient for individuals and businesses alike.
              With our state-of-the-art OCR (Optical Character Recognition) technology, we make it effortless to extract text from images while preserving the original formatting and layout.
</p>
            <a href="pages\about.html">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
        <p>
          Following are the services we provide : -
        </p>
      </div>

      <div class="service_container">
        <div class="box">
         <!-- <a href="txttospeech\index.html" class="link-hover">  Add hyperlink to about.html -->
              <div class="img-box">
                <a href="txttospeech\index.html" class="link-hover">
                  <img src="pages/images/s-1.png" alt="Image-to-Text Conversion"></a>
              </div>
              <div class="detail-box">
                  <h5>
                      Image-to-Text Conversion
                  </h5>
                  <p>
                      Here we understand that valuable information can be locked within images and scanned documents. With our state-of-the-art OCR (Optical Character Recognition) technology, we make it effortless to extract text from images while preserving the original formatting and layout.
                  </p>
              </div>
          
      </div>
      <div class="box">
         <!-- Add hyperlink to about.html -->
            <div class="img-box">
              <a href="Text-Translation\index.html" class="link-hover">
                <img src="pages/images/s-2.png" alt="Image-to-Text Conversion"></a>
            </div>
            <div class="detail-box">
                <h5>
                  Multilingual Text Transformation
                </h5>
                <p>
                  Language should never be a barrier to effective communication. That's why our platform offers seamless multilingual support. You can convert text into a variety of languages, allowing your content to transcend borders and connect with a global audience.
                </p>
            </div>
        
    </div>
    <div class="box">
      
          <div class="img-box">
            <a href="Text-Editor\index.html" class="link-hover"> <!-- Add hyperlink to about.html -->
              <img src="pages/images/s-3.png" alt="Image-to-Text Conversion"></a>
          </div>
          <div class="detail-box">
            <h5>
              Powerful Text Editing
            </h5>
            <p>
              We've integrated a robust text editor into our platform, enabling you to manipulate and style your content with the finesse of a professional word processor. Whether you need to emphasize key points with bold or italic text, underscore important details, or format your text for readability.
            </p>
          </div>
      
  </div>
  <div class="box">

        <div class="img-box">
          <a href="speech-text/index.html" class="link-hover"> <!-- Add hyperlink to about.html -->
            <img src="pages/images/s-4.png" alt="Image-to-Text Conversion"></a>
        </div>
        <div class="detail-box">
            <h5>
                Speech to Text Conversion            </h5>
            <p>
              Here you would be able to convert you speech to written text. Welcome to the voice speech recognition feature of the our website and enjoy your free unlimited speech typing.
            </p>    
        </div>
    
</div>
<div class="box">

      <div class="img-box">
        <a href="fun-img\image.html" class="link-hover"> <!-- Add hyperlink to about.html -->
          <img src="pages/images/s-5.png" alt="Image-to-Text Conversion"></a>
      </div>
      <div class="detail-box">
          <h5>
              Fun Text Image
          </h5>
          <p>
              Dive deep in the conversion of image to text but with a fun twist. 
          </p>
      </div>
  
</div>
<div class="box">

<div class="img-box">
        <a href="textaudio\index.html" class="link-hover"> <!-- Add hyperlink to about.html -->
          <img src="pages/images/s-6.png" alt="Image-to-Text Conversion"></a>
      </div>
      <div class="detail-box">
          <h5>
            Text to Audio Download
          </h5>
          <p>
            
            Get a hands on free experience of downoinf the audio file of the text you wanna make the computer to say.
          </p>
      </div>
  
</div>
<div class="box">

      <div class="img-box">
        <a href="voice-mani\Voice-mani.html" class="link-hover"> <!-- Add hyperlink to about.html -->
          <img src="pages/images/s-7.png" alt="Image-to-Text Conversion"></a>
      </div>
      <div class="detail-box">
          <h5>
              Text-to-Voice
          </h5>
          <p>
            Explore the enchanted voice changing ani manipulation of the inputted text.
          </p>
      </div>
  
</div>



<div class="box">

      <div class="img-box">
        <a href="premium\index.html" class="link-hover"> <!-- Add hyperlink to about.html -->
          <img src="pages/images/s-8.png" alt="Image-to-Text Conversion"></a>
      </div>
      <div class="detail-box">
        <h5>
          Powerful Text Editing
        </h5>
        <p>
          We've integrated a robust text editor into our platform, enabling you to manipulate and style your content with the finesse of a professional word processor. Whether you need to emphasize key points with bold or italic text, underscore important details, or format your text for readability, [Your Website Name] empowers you to do it all
        </p>
      </div>
      
        
      
     <!-- <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>-->
    </div>
  </section>
  <!-- end service section -->

  <!-- work section -->

  <section class="work_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          How We Work!
        </h2>
        <p>
          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="detail_container">
            <div class="box b-1">
              <div class="top-box">
                <div class="icon-box">
                  <img src="pages/images/work-i1.png" alt="">
                </div>
                <h5>
                  We Generate A Good Idea First
                </h5>
              </div>
              <div class="bottom-box">
                <p>
                  simplifies the process of converting text from images into digital, editable content. Users start by uploading their image, which is then subjected to advanced Optical Character Recognition (OCR) technology for text extraction. The platform offers a user-friendly text editor with formatting options, allows for easy language translation, and facilitates saving and sharing
                </p>
              </div>
            </div>
            <div class="box b-1">
              <div class="top-box">
                <div class="icon-box">
                  <img src="pages/images/work-i2.png" alt="">
                </div>
                <h5>
                  Then We Start Applying Ideas
                </h5>
              </div>
              <div class="bottom-box">
                <p>
                  Data privacy and security are paramount. This versatile tool caters to a wide array of text manipulation needs, making it an ideal solution for students, professionals, and creative enthusiasts alike. Discover the future of text conversion by visiting us today!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="pages/images/worrk.png" alt="">
          </div>
        </div>
      </div>

  
    </div>
  </section>
  <!-- end work section -->

  <!-- team section -->

  <section class="team_section layout_padding2-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Meet The Team
        </h2>
        <p>
          The whole and soul coder, designers and developers of this webiste.
        </p>
      </div>
    </div>
    <div class="team_container">
      <div class="box b-1">
        <div class="img-box">
          <img src="pages/images/t-1.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Kalyani Godbole
          </h5>
          <p>
            UI/UX designer
          </p>
          <div class="social_box">
            <a href="">
              <img src="pages/images/fb.png" alt="">
            </a>
            <a href="">
              <img src="pages/images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="pages/images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="pages/images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="box b-2">
        <div class="img-box">
          <img src="pages/images/t-2.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Pawan Ingle
          </h5>
          <p>
            Front-end Developer
          </p>
          <div class="social_box">
            <a href="">
              <img src="pages/images/fb.png" alt="">
            </a>
            <a href="">
              <img src="pages/images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="pages/images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="pages/images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="box b-3">
        <div class="img-box">
          <img src="pages/images/t-3.png" alt="">
        </div>
        <div class="detail-box">
          <h5>
            Pratik Khose
          </h5>
          <p>
            Back-end Developer
          </p>
          <div class="social_box">
            <a href="">
              <img src="pages/images/fb.png" alt="">
            </a>
            <a href="">
              <img src="pages/images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="pages/images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="pages/images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
        <p>
          Following are the Testimonial 
        </p>
      </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="pages/images/hariom.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Hariom Ingle
                </h6>
                <p>
                  I was thoroughly impressed by the services. The process of converting text from images and manipulating it was made incredibly easy on their platform. The intuitive interface allowed me to quickly extract and edit text as needed, and the multilingual support was a real game-changer for my global projects.
                </p>
                <img src="pages/images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="pages/images/chinu.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Mahesh Jadhav
                </h6>
                <p>
                  As a coder, I have a deep appreciation for efficient and practical tools that simplify tasks and enhance productivity. This is a platform that has earned its place as a critical component of my coding toolkit.
                  The image-to-text conversion feature is nothing short of remarkable. It saves me valuable time when I need to extract text from images for coding documentation, code comments, or translating content. This feature has, in many ways, turned my coding process into a streamlined and efficient experience.
                </p>
                <img src="pages/images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="pages/images/kalash.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Kalash Shar
                </h6>
                <p>
                  As a student, juggling assignments, projects, and presentations can be overwhelming. But then, I discovered this website, and it quickly became my academic lifesaver.For my language studies, the multilingual support provided here is a game-changer. It's amazing how I can easily translate and edit text into different languages, making my language assignments and research projects a breeze.
                </p>
                <img src="pages/images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </section>

  <!-- end client section -->

  <div class="footer_bg">

    <!-- contact section -->
    <section class="contact_section layout_padding" id="contactLink">
      <div class="container">
        <div class="heading_container">
          <h2>
            Get In touch
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Name ">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                </div>

              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Subject">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Message">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- end contact section -->



    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <h3>
                Visual Text
              </h3>
              <p>
                Let's explore the various ascpects of text edition, conversion, translation and manipulation.
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h4>
                BASIC LINKS
              </h4>
              <ul class="  ">
                <li class=" active">
                  <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="">
                  <a class="" href="pages\about.html"> About</a>
                </li>
                <li class="">
                  <a class="" href="pages\service.html"> Services </a>
                </li>
                <li class="">
                  <a class="" href="contact-form\index.html">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <h4>
                CONTACT DETAILS
              </h4>
              <a href="">
                <div class="img-box">
                  <img src="pages/images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                  000000000
                </p>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="pages/images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                  visualtext@gmail.com
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="">Shruti Wagare Mam</a>
        </p>
      </div>
    </section>
    <!-- footer section -->

  </div>
 





  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
<script>
  
let alreadyCelebrating = false;

function throwConfetti(numConfettiSquares = 500, confettiSquareMaxSize = 15, sprayWidth = 7, sprayHeight = 15) {
  if (alreadyCelebrating) {
    return;
  }

  alreadyCelebrating = true;
  
  function random_range(lo, hi) {
    return Math.floor(Math.random() * (hi - lo + 1)) + lo;
  }

  function random_uniform(lo, hi) {
    return Math.random() * (hi - lo) + lo;
  }

  function toRadians(degrees) {
    return degrees * Math.PI / 180;
  }

  const canvas = document.createElement('canvas');
  canvas.style.position = 'fixed';
  canvas.style.left = 0;
  canvas.style.bottom = 0;
  canvas.style.pointerEvents = 'none';
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  const ctx = canvas.getContext('2d');

  document.body.appendChild(canvas);

  // OTHER IMPORTANT CONSTANTS
  const ANIMATION_SPEED = 2;
  const GRAVITY = 0.4 * ANIMATION_SPEED;
  const FRICTION = 0.99;

  // make confetti rectangles
  const confetti = Array(numConfettiSquares).fill(1).map((item, i) => {

    const startOnRightSide = !!random_range(0, 1);

    const sideLength = random_range(5, Math.max(10, confettiSquareMaxSize));

    const newRect = {
      color: {
        r: random_range(100, 255),
        g: random_range(100, 255),
        b: random_range(100, 255)
      },
      width: sideLength,
      height: sideLength,
      x: startOnRightSide ? canvas.width : 0,
      y: canvas.height,
      xspeed: startOnRightSide ? random_uniform(-1, -sprayWidth) : random_uniform(1, sprayWidth),
      yspeed: random_range(0,3) < 3 ? random_uniform(-sprayHeight * 0.75, -sprayHeight) : random_uniform(-sprayHeight * 0.2, -sprayHeight * 0.75),
      friction: random_uniform(FRICTION * 0.95, FRICTION),
      gravity: random_uniform(GRAVITY * 0.5, GRAVITY * 1.2),
      wind: random_uniform(-1.5, 1.5),
      theta: random_uniform(0, 359),
      thetaspeed: random_uniform(0.5, 5)
    };

    newRect.xspeed *= ANIMATION_SPEED;
    newRect.yspeed *= ANIMATION_SPEED;
    newRect.thetaspeed *= ANIMATION_SPEED;

    return newRect;
  });

  let shouldContinueTicking = true;
  function tick() {

    function draw() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      for (const c of confetti) {
        ctx.fillStyle = `rgb(${c.color.r}, ${c.color.g}, ${c.color.b})`;

        ctx.fillRect(c.x, c.y,
                     c.width * Math.cos(toRadians(c.theta)),
                     c.height * Math.sin(toRadians(c.theta))
                    );
      }
    }

    function update() {
      const maxFallSpeed = 5 * ANIMATION_SPEED;
      shouldContinueTicking = false;
      for (const c of confetti) {
        c.x += c.xspeed;
        c.x += c.wind;

        if (c.yspeed > 0) {
          c.y += Math.min(c.yspeed + c.yspeed * Math.sin(c.theta * (Math.PI / 180)), maxFallSpeed);
        } else {
          c.y += c.yspeed;
        }
        c.theta = (c.theta + c.thetaspeed) % 360;

        c.xspeed *= c.friction;
        c.yspeed = Math.min(c.yspeed + c.gravity, maxFallSpeed);

        if (c.y < canvas.height + c.height) {
          shouldContinueTicking = true;
        }
      }
    }

    update();
    draw();

    if (shouldContinueTicking) {
      setTimeout(tick, 1000 / 60);
    } else {
      canvas.remove();
      alreadyCelebrating = false;
    }
  }

  window.requestAnimationFrame(tick);
}

document.getElementById('celebrate-button').addEventListener('click', (e) => {
  if (window.innerWidth > 600) {
    throwConfetti();
  } else {
    throwConfetti(200, 15, 3, 15);
  }
});

</script>

</body>

</html>