
<?php
session_start();
if(isset($_SESSION['LoginUser'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | HOME</title>
	    <link rel="stylesheet" href="../styles/style1.css">
   </head>
<body>  

  <!--img class="logo" src="images/logo.jpg" alt="shopping cart logo" width="200px" height="200px"-->
  
 <img  class ="logo"  src = "../images/logo.png"> 
  <center>
   
    <h2  class="welcometext"> WELCOME   TO   ICLOTHES MANUFACTURES </h2>
  </center>
  
<!--icon bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="icon-bar">
  <input type="text" class="search" placeholder="Search.." >
  <a href="../php/logout.php"class="login" >LOGOUT</a> 
  <a class="active" href="view_payment.php" class="cart"><font-size:204px>PAYMENTS</a> 
 
</div>


<hr class="hrl">
<!--nav bar-->
 
    <ul class="menu">
		 <li class = "menu"> <a href="home.php">HOME</a> </li>
				<li class = "menu"> <a href="../html/womenHome.html">WOMEN</a> </li>
				<li class = "menu"> <a href="../html/MEN.html">MEN</a> </li>
				<li class = "menu"> <a href="../html/KID.html">KID</a> </li>
				<li class = "menu"> <a href="../html/fabric.html">FABRICS</a> </li>
				<li class = "menu"> <a href="../html/designerHome.html">DESIGNER</a> </li>
		  
	</ul>
	<br><br>

		<h2>Hello Admin</h2><br/>
	<button onclick="document.location='edit.php'">ADD FABRIC ITEMS</button>
	<button onclick="document.location='delete.php'">DELETE FABRIC ITEMS</button>
	<button onclick="document.location='women.php'">ADD WOMEN PRODUCTS </button>
	<button onclick="document.location='wdelete.php'">DELETE WOMEN PRODUCTS</button>
	<button onclick="document.location='men .php'">ADD MEN PRODUCTS</button>
	<button onclick="document.location='mdelete.php'">DELETE MEN PRODUCTS</button>
	<button onclick="document.location='designer.php'">ADD DESIGNERS TO iCLOTHES</button>
	<button onclick="document.location='ddelete.php'">REMOVE DESIGNERS FROM iCLOTHES</button>
	<button onclick="document.location='ManageContact.php'">MANAGE CONTACTS OF iCLOTHES</button>
	<button onclick="document.location='Warehouse.php'">MANAGE iCLOTHES WAREHOUSE PRODUCTS</button>
	
	
	
	<!--slide show-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="slideshow-container">
    <div class="mySlides fade">
    <img src="../images/1.jpg" style= " width:144.5%">
    </div>
    <div class="mySlides fade">
    <img src="../images/2.jpg" style="width:144.5%  " >
    </div>
    <div class="mySlides fade">
    <img src="../images/3.jpg" style=" width:144.5%" >
    </div>
    </div><br>

   <div style="text-align:center">
   <span class="dot"></span> 
   <span class="dot"></span> 
   <span class="dot"></span> 
   </div>

<!--slide show script-->
	  <script>
	  let slideIndex = 0;
	  showSlides();
	  function showSlides() {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 3000); // Change image every 3 seconds
	  }
      </script>
	  
	<hr>
	
	<footer>
  <ul class="menu2">
		
		 <li class = "menu2"> <a href="../html/LoginAsa.html">RETURN & EXCHANGE</a> </li>
		 <li class = "menu2"> <a href="Feedback.php">FEEDBACK</a> </li>
		 <li class = "menu2"> <a href="#">CUSTOMER SERVICE</a> </li>
		 
		 
</ul><br>
	<hr class="hrl">
	 
<!--nav bar-->
 
    
	</ul>
	<footer>
	<ul class="menu03">
		<li class = "menu03"> <a href="contact_us.php">Contact US</a> </li>
		<li class = "menu03"> <a href="../html/aboutUs.html">About us</a> </li>
		<p class = "Address"> NO:14,Galle Road,Colombo-13. </p>
		
<!-- icon-->
    <center>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

 
 

<!--  icons -->
	 
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-google"></a>
	<a href="#" class="fa fa-instagram"></a>
	<a href="#" class="fa fa-pinterest"></a>
	 
 	 </center>
    <p class="copyright">© Copyright iCLOTHES | All Rights Reserved</p> 
	
	
    </footer>
	
	
	
	 


     

	
	
	 


     
