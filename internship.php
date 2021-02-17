<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship</title>
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
    <a class="navbar-brand" href="index.php"><img src="images/logo.jpg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Internships
                <span class="sr-only">(current)</span></a>
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


<section class="py-5">
  <div class="container">
    <h2 class="text-center">APPLY FOR INTERNSHIP</h2>
    <h2 class="font-weight-light text-center">Please fill this form.</h2>
  </div>
  <form class="text-center" style="margin-top:10vh;margin-left:10vh;margin-right:25vh;" method="post" enctype="multipart/form-data" action="">
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="inputFullName" class="col-sm-4 col-form-label">Full Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputFullName" name = "inputFullName" placeholder="Full Name">
    </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="inputGender" class="col-sm-4 col-form-label">Gender</label>
    <div class="col-sm-8">
    <select class="form-control" name = "inputGender">
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="inputDegree" class="col-sm-4 col-form-label">Degree</label>
    <div class="col-sm-8">
    <select class="form-control" name = "inputDegree">
      <option>BE/BTech</option>
      <option>MTech/MS</option>
      <option>MCA</option>
      <option>Other</option>
    </select>
  </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="inputYOP" class="col-sm-4 col-form-label">Year of Graduation</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputYOP" name = "inputYOP" placeholder="Year of Graduation">
    </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="inputCollegeName" class="col-sm-4 col-form-label">College/University</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputCollegeName" name="inputCollegeName" placeholder="College Name">
    </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="inputContactNumber" class="col-sm-4 col-form-label">Contact Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputContactNumber" name="inputContactNumber" placeholder="Contact Number">
    </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="selectDomain" class="col-sm-4 col-form-label">Preferred Internship Domain</label>
    <div class="col-sm-8">
    <select class="form-control" name="selectDomain">
      <option>Web Development</option>
      <option>Option 2</option>
      <option>Option 3</option>
      <option>Option 4</option>
      <option>Option 5</option>
    </select>
  </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="selectDuration" class="col-sm-4 col-form-label">Duration</label>
    <div class="col-sm-8">
    <select class="form-control" name="selectDuration">
      <option>1 Month</option>
      <option>2 Months</option>
      <option>3 Months</option>
    </select>
  </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="selectResume" class="col-sm-4 col-form-label">Resume/CV (.pdf)</label>
    <div class="col-sm-8">
    <input type="file" name="fileToUpload" accept="application/pdf" id="fileToUpload"></input>
  </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="inputWhy" class="col-sm-4 col-form-label">Why should you be hired for this role?</label>
    <div class="col-sm-8">
      <textarea class="form-control" id="inputWhy" name="inputWhy" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group row" style="margin-bottom:3vh;">
    <label for="inputExperience" class="col-sm-4 col-form-label">Do you have any prior experience in this kind of field?</label>
    <div class="col-sm-8">
      <textarea class="form-control" id="inputExperience" name="inputExperience" rows="3"></textarea>
    </div>
  </div>
  <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
</form>



<?php 
  $servername="localhost";
  $username="root";
  $password="";
  $database="applicants";
  $conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    if(isset($_POST['btnSubmit'])){
      $fullname = $_POST['inputFullName'];
      $email = $_POST['inputEmail'];
      $gender = $_POST['inputGender'];
      $degree = $_POST['inputDegree'];
      $yop = $_POST['inputYOP'];
      $college = $_POST['inputCollegeName'];
      $contact = $_POST['inputContactNumber'];
      $domain = $_POST['selectDomain'];
      $duration = $_POST['selectDuration'];
      $why = $_POST['inputWhy'];
      $experience = $_POST['inputExperience'];
      #$allow=array('pdf');
      #$temp=explode(".",$_FILES['fileToUpload']['name']);
      #$extension=end($temp);
      #$upload_file=$_FILES['fileToUpload']['name'];
      #move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"uploads/pdf/".$_FILES['fileToUpload']['name']);
      #$pname = rand(1000,10000)."-".$_FILES['fileToUpload']['name'];
      #$tname = $_FILES['fileToUpload']['tmp_name'];
      #$uploads_dir = '/uploads/pdf';
      #move_uploaded_file($tname,$uploads_dir.'/'.$pname);
      if($fullname == '' || $email == '' || $gender =='' || $yop == '' || $college == '' || $contact == '' || $why == '' || $experience = ''){
        echo '<div class="text-center alert alert-warning alert-dismissable fade show"role="alert" style="margin-top:3vh;">
            <strong>Please enter all the details!!!</strong></div>';
      }
      else{
        $sql = "INSERT INTO applications (`id`, `fullname`, `email`, `gender`, `degree`, `yearofgraduation`, `college`, `contact`, `domain`, `duration`, `why`, `experience`) VALUES (NULL, '$fullname', '$email', '$gender', '$degree', '$yop', '$college','$contact', '$domain', '$duration', '$why', '$experience')";
        $result = mysqli_query($conn,$sql);
        if($result){
          echo '<div class="text-center alert alert-success alert-dismissable fade show"role="alert" style="margin-top:3vh;">
            <strong>Success! Your details has been submitted successfully!</strong></div>';
        }
        else{
          echo "The record was not inserted succesfully: ". mysqli_error($conn);
        }
    }
    }
      
    
}
  ?>
</section>
<?php include('footer.php');?>
</body>
</html>