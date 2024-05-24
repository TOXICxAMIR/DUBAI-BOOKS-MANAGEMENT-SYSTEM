<!--https://stackoverflow.com/questions/8054638/creating-a-php-header-footer-->
<!doctype html5>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Additional tags here -->
<title>BOOK SYSTEM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="../images/ff.png">


<meta name="description" content="A web service that enables three book suppliers to trade online. clients or customers can search and order books from any of the three suppliers from the service. Different books related to sciences, technology, religion and many more are available">

<meta name="keyword" content="Books, technology, religion, novels, sciences, arts, suppliers">

<!--Stylesheet for social media class-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="https://fonts.googleapis.com/css?family=Francois+One|Kaushan+Script|Pacifico|Montserrat:400,400i" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    



<style>
* {
    box-sizing: border-box;
}

img {
    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

body {
  margin: 0;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #FF8000;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the content */
.content {
    background-color: #ddd;
    padding: 10px;
    height: 450px; /* Should be removed. Only for demonstration */
}



<!--
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
-->
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
/* @media (max-width: 600px) {
    imgtype,videotype{
        width: 100%;
        height: auto;
    }
} */
.navbar {
  width: 100%;
  background-color: #F57460;
  overflow: auto;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 8px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: black;
}

/* Current/active navbar link */
.active {
  background-color: #4CAF50;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 200px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>



  </head>
  <body>




<!--<div class="topnav">
  <img src="../images/book.jpeg"  alt="Logo" height=70>
  <a href="Index.php" class="w3-bar-item w3-button">Home</a>
  <a href="Searchfeature.php" class="w3-bar-item w3-button">Search</a>
  <a href="Orderform.php" class="w3-bar-item w3-button">Order Book</a>

  <a href="" class="w3-bar-item w3-button">About</a>
  <a href="" class="w3-bar-item w3-button">Contact Us</a>
  <a href="adminlogin.php" class="w3-bar-item w3-button">Login</a>
</div>
--><div class="navbar">
  <a class="" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="Searchfeature.php"><i class="fa fa-fw fa-search"></i> Search</a> 
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  <a href="about.php"><i class="fa fa-cart-plus"></i> About</a>
  <a href="userlogin.php"><i class="fa fa-fw fa-user"></i> Login</a>
  <a href="signup.php"><i class="fa fa-fw fa-user"></i> Register</a>
</div>

