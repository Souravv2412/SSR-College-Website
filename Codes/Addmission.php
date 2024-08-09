<?php include('adddb.php') ?>

<html>
    <head>
       <center> <img src="Photos/SSR Logo2.png" height="15%" width="60%"> </center> <br>
        <link rel="stylesheet" href="Home.css">   
        <style>
*
body
{
  margin:0 auto;
  overflow-x: hidden;
  background: rgb(33, 46, 71);
}
            .search
                   {
                    float: right;
                    padding: 12px 760px;  
                   }
            .menu-bar input
                   {
                    border: 2px salmon;
                    border-radius: 10px;
                    padding: 04px 15px;
                    width: 220px;
                   }   
                   
            .end1
                  {
                   background: rgb(26, 24, 24);
                   text-align: center;
                   color: white;
                   padding: 01px 20px;
                   border-bottom-left-radius: 0px;
                   border-top-left-radius: 500px;
                   border-top-right-radius: 500px;
                   border-bottom-right-radius: 0px;
                  }
            .form
            {
              text-decoration: underline red;
                width: 75%;
                margin: 10px auto;
                color: black;
                background: #bcddd8;
                text-align: center;
                border: 1px solid #B0C4DE;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding: 20px;

            }
.inp 
{
    border: 2px solid gray;
    width: 77.2%;
    margin: 10px 170px 10px 170px;
    background:white;
}
.input-form
{
  margin: 10px 60px 10px 60px;
}
.input-form label 
{
  display: block;
  text-align: left;
  margin: 06px;
}
.input-form input {
  height: 30px;
  width: 70%;
  padding: 05px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.input-form1
{
  margin: 10px 60px 10px 60px;
}
.input-form1 label {
  text-align: left;
  margin: 10px;
}
.input-form1 input {
  height: 50px;
  width: 30%;
  padding: 05px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.submit 
{
  padding: 10px;
  border: 2px;
  border-radius: 5px;
  cursor:pointer;
  text-align: center;
}
.submit input
{
  border-radius: 5px;
  cursor:pointer;
  background: black;
  color:white;
  font-size:20px;
  margin:15px;
}

</style>

    </head>
    <body>
        <div class="reg">
            <ul>   
             <li><a href="Database/register.php"> SIGN </a></li>
             <li><a href="Database/login.php"> LOGIN </a></li>
             </ul>
           </div>
        <div class="menu-bar">   
    <ul>
        <li> <a href="Home.html"> Home </a> </li>
        <li> <a href="About.html"> About </a> </li>
        <li> <a href="http://localhost/SSR%20College%20Website/Codes/Addmission.php"> Addmission </a> </li>
        <li> <a href="IQAC.html"> IQAC </a> </li>
        <li> <a href="Contact.html"> Contact </a> </li>
        <div class="search">  
        <input type="text" name="search" id="search" placeholder="Search here">    
    </ul>
    </div>
    </div><br><br>

    <div class="form">
     <h2> Addmission Form </h2>   
    </div>

    <form method="post" action="Addmission.php">


    <div class="inp">
    <div class="input-form">
    <td><label> First Name </label></td>
    <input type="text" name="First_Name"><br>
    <label> Middel Name </label>
    <input type="text" name="Middel_Name"><br>
    <label> Last Name </label>
    <input type="text" name="Last_Name"><br>
    </div>

    <div class="input-form">
    <label> Mothername </label>
    <input type="text"  name="Mothername"><br>
    <label> Fathername </label>
    <input type="text" name="Fathername" ><br> 
    </div>

    <div class="input-form">
    <label> Email </label>    
    <input type="text" name="Email"><br>
    <label> Phone Number </label>
    <input type="number" name="Number"><br>
    <label> Opptional Phone Number </label>
    <input type="number" name="Number2"><br>
    </div><br>

    <div class="input-form1">
    <label> Gender </label>
    <select name="Gender">
        <option> Male </option>
        <option> Female </option>
        <option> Others </option>
    </select>    
    <label> Catagory </label>
    <select name="Caste">
        <option> SC </option>
        <option> ST </option>
        <option> OBC </option>
        <option> General </option>
        <option> Others </option>    
    </select><br><br><br>
    <label> DOB </label>
    <input type="date" name="Birthday">
    <label> Place Of Birth </label>
    <input type="text" name="Birth">
    </div><br>

    <div class="input-form1">
    <label> Nationality </label>
    <select name="Nation">
        <option> Indian </option>
        <option> NRI </option>
        <option> other </option>
    </select>    
    </div><br>

    <div class="input-form">
    <label> Permanent Address </label><br>
    <textarea name"Address" rows="5" cols="80"> </textarea>    
    </div>

    <div class="input-form">
    <label> Correspondence Address </label><br>
    <textarea name"Address" rows="5" cols="80" > </textarea>
    </div><br>

    <div class="input-form1">
    <label> Select Higher secondary Board </label>
    <select name="Board">
      <option> Gujrat Board </option>
      <option> Maharastra Board </option>
      <option> Haryana Board </option>
      <option> Punjab Board </option>
      <option> U.P Board </option>
      <option> Pune Board </option>
      <option> C.B.S.C Board </option>
      <option> Others </option>
    </select>

    <label> Passing Year </label>
    <select name="Year">
      <option> 2015 </option>
      <option> 2016 </option>
      <option> 2017 </option>
      <option> 2018 </option>
      <option> 2019 </option>
      <option> 2020 </option>
      <option> 2021 </option>
      <option> 2022 </option>
    </select>
    </div><br>

    <div class="input-form">
    <label> Upload 10th Marksheet </label>
    <input type="file" name="10th marksheet" accept="image/*">
</div><br>
    
    <div class="input-form">
    <label> Upload 12th Marksheet </label>
    <input type="file" name="10th marksheet" accept="image/*"><br>
    </div><br>

    <div class="input-form1">
    <label> Choose Faculty </label>
    <select name="Graduation">
      <option> Post Graduate Program </option>
      <option> Under Graduate Program </option>
      <option> Diploma  </option>
      <option> Certification </option>
    </select>

    <label> Choose Program </label>
    <select name="Program">
      <option> BSC  </option>
      <option> BSC(CS) COMPUTER SCIENCE </option>
      <option> B.COM </option>
      <option> BBA </option>
      <option> BBA(CA) COMPUTER APPLICATION </option>
      <option> B.A(LLB) LAW </option>
      <option> BE.D </option>
      <option> MBA </option>
      <option> MSC </option>
    </select>
    </div><br>

    <div class="submit">
    <input type="SUBMIT"> <input type="RESET">

</div>

  
</div><br><br><br>
<div class="end1">
        <h3> SSR ACS College of ARTS COMMERCE and SCIENCE </h3>
    </div>
    </body>
</html>