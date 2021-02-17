<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kratigence</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" style="opacity:0.75;">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="images/logo.jpg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="internship.php">Internships</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.php">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sponsors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-bold text-light text-white">KRATIGENCE</h1><br><br><br>
        <p class="lead font-weight-bold text-white">EXPLORE WITH US THE NEW WORLD OF AI.</p>
      </div>
    </div>
  </div>
</header>

<!-- About section -->
<?php include('about.php');?>


<section class="py-5">
    <div class="container">
        <h2 class="text-left">OUR VISION</h2>
        <p class="text-right" style="font-size:20px;">Kratigence is the technical society of Indian Institute of Information Technology Bhopal. <br>
    Kratigence provides students a platform to pursue their interest in AI, IOT, Robotics, etc.<br> by working on small and large scale projects. However, the society provides
much more than <br>just technical growth to its members, from team-building to cooperation, from perseverance <br>to sincerity, the society teaches you a myriad of interpersonal skills
essential in daily life.<br><br></p>
    </div>
    <div class="container">
        <h2 class="text-right">OUR MISSION</h2>
        <p class="text-left" style="font-size:20px;">We help the students to integrate and help each other, learn from each other and <br>do well each other. 
        We conduct various innovative competitions, workshop, quizzes <br>and invite speakers from various domains to inspire and assist students on their <br>journey to 
        start their career in the field of Artificial Intelligence and Internet of Things.<br><br></p>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <h2 class="text-left" style="margin-bottom:20px;">Process</h2>
    </div>
    <div class="container">
        <div class="card-group">
            <div class="card">
                <img src="images/p1.jpg" class="card-img-top" alt="Join Us">
                <div class="card-body">
                    <h5 class="card-title">Join Us</h5>
                    <p class="card-text">Join us and feel the power of healthy community we have and get exposure of your insights.</p>
                </div>
            </div>
            <div class="card">
                <img src="images/p2.jpg" class="card-img-top" alt="Join Our Webinars">
                <div class="card-body">
                    <h5 class="card-title">Join Our Webinars</h5>
                    <p class="card-text">Note everything you learnt from the speakers and follow the best things you feel suits you best.</p>
                </div>
            </div>
            <div class="card">
                <img src="images/p3.jpg" class="card-img-top" alt="Create New Projects">
                <div class="card-body">
                    <h5 class="card-title">Create New Projects</h5>
                    <p class="card-text">Create new projects to out cast yourself from common public and get yourself a good startup ideas.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Team portfolio -->
<?php include('team.php');?>


<section class="py-5">
  <div class="container">
    <h2 class="text-center">Support Section</h2>
    <h2 class="font-weight-light text-center">-YOU CAN HELP US IN MANY WAYS-</h2>
    <div class="card-group" style="margin-top:30px;">
  <div class="card" style="align-items:center; border:none;">
    <img class="card-img-top" style="width:65%;" src="images/promote.png" alt="Promote">
    <div class="card-body">
      <h5 class="card-title text-center">Promote Us</h5>
      <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius tortor id nisi feugiat, eget eleifend quam congue.</p>
    </div>
  </div>
  <div class="card" style="align-items:center; border:none;">
    <img class="card-img-top" style="width:65%;" src="images/support.png" alt="Support">
    <div class="card-body">
      <h5 class="card-title text-center">Support Us</h5>
      <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius tortor id nisi feugiat, eget eleifend quam congue.</p>
    </div>
  </div>
  <div class="card" style="align-items:center; border:none;">
    <img class="card-img-top" style="width:65%;" src="images/volunteer.png" alt="Volunteer">
    <div class="card-body">
      <h5 class="card-title text-center">Become Volunteer</h5>
      <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius tortor id nisi feugiat, eget eleifend quam congue.</p>
    </div>
  </div>
</div>
  </div>
</section>

<!-- Footer content -->
<?php include('footer.php');?>


</body>
</html>