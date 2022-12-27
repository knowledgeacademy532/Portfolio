<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     
     <link rel="stylesheet" href="css/style.css">
    <title>portfolio website</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Me</a>
        </li>
        
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact </a>
        </li>
       
      </ul>
    </div>
  </nav>
  <!-- style="background-color:#923cb5; text-align:center;" -->
  <section class="banner"  style=" text-align:center;">
    <div class="banner--content">
      <h3 class="name">John Marchas</h3>
      <h1 class="designation">Fullstack developer</h1>
      <p class="tagline">I’m also a front-end developer and general doodler with a keen eye for creating engaging UI, bringing products to life</p>
    </div>    
  </section>
  <section>
<img src="images/Full-stack-web-developer.png" width="100%" height="600px" class="slides">
<img src="images/folio1.jpg" width="100%" height="600px"  class="slides">
<img src="images/dd1.jpg"  height="600px"  class="slides" width="100%">
</section> 
<!--Section heading-->


<section class="my-4" id="contact">
<div class="py-4">
<h2 class="text-center">Contact Me</h2>

</div>
<div class="w-50 m-auto">
<form action="contact.php" method="post">
  <div class="form-group">
    <label>Name:</label>

<input type="text" name="name" class="form-control"> </div>
<div class="form-group">
    <label>Email:</label>

<input type="text" name="email" class="form-control"> </div>
<div class="form-group">
    <label>Number:</label>

<input type="textarea" name="number" class="form-control"> </div>
<div class="form-group">
    <label>Description:</label>

<input type="text" name="description" class="form-control"> </div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

</section>

<div id="about">
<h2 class="text-center">About me</h2>
    <div class="text-center">
      <img src="images/user.jpg" alt="Mike" style="width:200px;">
      <div  >
     
        <h2 style="color:orange;">John Marchas</h2>
        <p class="title">Fullstack developer</p>
        <p>Fullstack Web developer proficient in fundamental front-end languages and server side languages.In depth knowledge of Mysql,MongoDB and Oracle.</p>
         <p>Analytical and precise professional with 5 years of hands on experience talking charge of front and backend web development.</p>
        <p style="color:blue;">john.marchas@theknowledgeacademy.com</p>
        <p></p>
      </div>
    </div>
  </div>
<script src="js/script.js"></script>

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>