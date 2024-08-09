<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<center> <img src="http://localhost/SSR%20College%20Website/Codes/Photos/SSR%20Logo2.png" height="15%" width="60%"> </center> <br>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
           *
body
{
  margin:0 auto;
  overflow-x: hidden;
  background: rgb(33, 46, 71);

}
.menu-bar
{
  background: rgb(26, 24, 24);
  text-align: left;
  padding: 20px;
  border-bottom-left-radius: 80px;
  border-top-left-radius: 01px;
  border-top-right-radius: 01px;
  border-bottom-right-radius: 80px;
}
.menu-bar ul
{
  display: flex;
  list-style: none;
  color: rgb(246, 255, 253);
  font-size: 15px;
  letter-spacing: 01px;
}
.menu-bar ul li
{
  width: 120px;
  margin: 05px;
  padding: 10px;
  padding-bottom: 10px;
}
.menu-bar ul li a
{
  text-decoration: none;
  color:rgb(244, 250, 242);
}
.active, .menu-bar ul li a:hover
{
  color:rgb(93, 139, 0);
}
.imgslider
{
  width: 880px;
  height: 400px;
  background: url(http://localhost/SSR%20College%20Website/Codes/Photos/img1.jpg);
  background-repeat:no-repeat;
  background-size:100%;
  margin: 50px auto;
  animation: slide 30s infinite;
}
@keyframes slide
{
  25%
  {
    background: url(http://localhost/SSR%20College%20Website/Codes/Photos/img2.jpg);
    background-repeat:no-repeat;
    background-size:100%
  }
  50%
  {
    background: url(http://localhost/SSR%20College%20Website/Codes/Photos/img3.jpeg);
    background-repeat:no-repeat;
    background-size:100%
  }
  75%
  {
    background: url(http://localhost/SSR%20College%20Website/Codes/Photos/img4.jpg);
    background-repeat:no-repeat;
    background-size:100%
  }
  100%
  {
    background: url(http://localhost/SSR%20College%20Website/Codes/Photos/img1.jpg);
    background-repeat:no-repeat;
    background-size:100%
  }
}

.text
{
  background: #bcddd8;
  border-radius: 10px;
}
.text ul
{
  display: flex;
  list-style: none;
  color: rgb(22, 23, 23);
}
.text ul li
{
  width: 310px;
  margin: 16px;
  padding: 10px;
  padding-bottom: 10px;
  color:#100f0f;
}  

.moretext
{
  display: none;
}
.read-more-btn
{
  padding: 06px 10px;
  background-color: rgb(0, 0, 0);
  color: #f6fffd;
  border: 12px ;
  outline: none;
  font-size: 15px;
  cursor: pointer;
}
.text.show-more .moreText
{
  display: inline;
}
.marquee
{
  padding: 01px 02px;
  border-radius: 10px;
  background: #bcddd8;
  color: #1f1f1f;
}
.search
                   {
                    float: right;
                    padding: 12px 760px;  
                   }
            .menu-bar input
                   {
                    border: 12px rgb(14, 13, 13);
                    border-radius: 10px;
                    padding: 04px 15px;
                    width: 220px;
                   } 
                   
.end1
{
  background: rgb(26, 24, 24);
  text-align: center;
  color: white;
  padding:  20px;
  border-bottom-left-radius: 0px;
  border-top-left-radius: 500px;
  border-top-right-radius: 500px;
  border-bottom-right-radius: 0px;
}
  .partner
{
  text-align: center;
  text-decoration: underline red;
  background: #bcddd8;
  color:rgb(16, 15, 15);
  
}
.partner ul
{
  display: flex;
  list-style: none;
  color: rgb(10, 5, 52);
  font-size: 13px;
  letter-spacing: 01px;
}
.partner ul li
{
  text-align: left;
  margin: 00px ;
  font-size: 20px;
  padding: 25px;
  border-radius: 15px;
}
	</style>
</head>
<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
     <marquee> Welcome <strong><?php echo $_SESSION['username']; ?></strong> </marquee>
     <a href="http://localhost/SSR%20College%20Website/SSR%20Website.html" style="color: red;"> Logout </a> 
    <?php endif ?>
</div>

    <div class="menu-bar">      
    <ul>
        <li> <a href="http://localhost/SSR%20College%20Website/Codes/Home.html"> Home </a> </li>
        <li> <a href="http://localhost/SSR%20College%20Website/Codes/About.html"> About </a> </li>
        <li> <a href="http://localhost/SSR%20College%20Website/Codes/Addmission.php"> Addmission </a> </li>
        <li> <a href="http://localhost/SSR%20College%20Website/Codes/IQAC.html"> IQAC </a> </li>
        <li> <a href="http://localhost/SSR%20College%20Website/Codes/Contact.html"> Contact </a> </li>
        <div class="search">  
        <input type="text" name="search" id="search" placeholder="Search here">    
    </ul>
    </div>
    </div>
    <div class="imgslider"> 
    </div>
    
    <div class="marquee">
        <h2>  <marquee> <b> Addmission for 2022-2023 is open enroll now........... </b> </marquee> </h2>
    </div>

    <div class="text">
        <ul>
          <li> <img src="http://localhost/SSR%20College%20Website/Codes/Photos/principle1.jpg "> </li>
        <li> <pre> <h2><b>PRINCIPLE'S MESSAGE</b></h2><h4>            
We took the historic step with students that inspired the odyssey towards excellence in academic pursuit. Today, the colleges <br>
of The SSR college of Arts,Commerce and Science with students and faculty members. The SSR College is one such important landmark<br>
in our educational expedition.<br>
            
Alleviating poverty,<span class="moretext"> providing education are the pressing needs of India and a large part of the world in<br>
their march towards development with a strong focus on cultivating commitment, zeal and enthusiasm among the student community, <br>
we hope to contribute our mite to the development of the nation by providing our sincere services to the vital fields and education.<br>
                        
It is every students dream to study in a college that enables him/her to learn from the best. Our Colleges have successfully<br>
created a  holistic learning atmosphere for our students supported by counselling and placement, so that they launch on a career<br>
with good growth opportunities. Deeply ingrained in our students is the belief,” Wherever you go, no matter what the weather, always<br>
bring your own sunshine!”            
</span></h4></pre>
           <button class="read-more-btn"> Read More </button></li>
           <script src="http://localhost/SSR%20College%20Website/Codes/Readmore.js"></script>
                 </ul>
    </div>  <br> <br>

<div class="partner">
    <h2> <b> OUR PARTNER </b> </h2>
    <ul>

<li><img src="http://localhost/SSR%20College%20Website/Codes/Photos/Aqsa.png" height="60%" width="50%"></li>
<li><img src="http://localhost/SSR%20College%20Website/Codes/Photos/Classic-Colours-768x228.png"  height="75%" width="50%"></li>
<li><img src="http://localhost/SSR%20College%20Website/Codes/Photos/Eco-support-3-768x277.png"  height="75%" width="50%"></li>  
<li><img src="http://localhost/SSR%20College%20Website/Codes/Photos/Enjay-It-Solution-Bhilad-768x189.png"  height="55%" width="50%"></li>
<li><img src="http://localhost/SSR%20College%20Website/Codes/Photos/Laddha-Advisors-e1628329735875.png"  height="70%" width="130%"></li>

   </ul>   
</div><br><br><br><br>

    <div class="end1">
        <h3> SSR ACS College of ARTS COMMERCE and SCIENCE </h3>
    </div>
		
</body>
</html>