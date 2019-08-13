<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CityShopee</title>
<link rel="stylesheet" type="text/css" href=<?php echo site_url(); ?>"/views/cust/style/style.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
#category {display:none;}
#catblock img:hover,input:hover {
  transform:scale(1.2,1.2);
  transition:all .5s ease; 

}
#catblock input {
  height:240px;
  margin-left: 20px; 


}
</style>
<script type="text/javascript">
 function fun1()
{document.getElementById("section1").style.display="none";
 document.getElementById("category").style.display="block";
}
</script>

</head>
<body>

<div class="container">
 <?php include("header.php"); ?>
 <?php include("nevigation.php");?>


<div class="w3-content w3-section " id="section1" style="max-width:100%;   margin-top: 0px!important;
    margin-bottom: 0px!important;    position: relative;">

  <img class="mySlides" src="images/img7.jpg" alt="image7" style="width:100%">
  <img class="mySlides" src="images/img8.jpg"style="width:100%">
  <img class="mySlides" src="images/img6.jpg" style="width:100%">
  <img class="mySlides" src="images/img5.jpg" style="width:100%">
  <img class="mySlides" src="images/img4.jpg" style="width:100%">
  <form action="user/categories" method="get">
    <table style="    position: absolute;top: 30%;left: 30%;  background-color: #c8c2c2;">
    <tr> <td>Please Select Your Area</td>
    <td><select name="area" id="area"  onchange="if(this.value != 0) { fun1(); }" >
      <option value="0">Select Location</option>
      <option value="iet">IET</option>
      <option value="itPark">IT Park</option>
      <option value="bhavarkua">BHAVARKUA</option>
      <option value="navlakha">NAVLAKHA</option>
      <option value="towerSquare">TOWER SQUARE</option> 
      </select></td>
       </tr>
    </table> 


  

</div>
<div id="category">
<!--   <div style="width:100;height:auto;color:white">
  <h2 >Categories:</h2></div> -->
  <div id="catblock">
   <input name="submit" type="image" src="images/cat1.jpg" alt="footwear" value="footwear">
   <input name="submit" type="image" src="images/cat2.jpg" alt="cloathing" value="clothing">
   <input name="submit" type="image" src="images/cat3.jpg" alt="medicines" value="medicines">
   <input name="submit" type="image" src="images/cat4.jpg" alt="grocery" value="grocery">
   <input name="submit" type="image" src="images/cat5.jpg" alt="homeDecor" value="homeDecor">
   <input name="submit" type="image" src="images/cat6.jpg" alt="electronicAppliances" value="electronicAppliances">
   <input name="submit" type="image" src="images/cat7.jpg" alt="dailyNeeds" value="dailyNeeds">
   <input name="submit" type="image" src="images/cat8.jpg" alt="refreshment" value="refreshment">
   <input name="submit" type="image" src="images/cat9.jpg" alt="stationery" value="stationery">
   <input name="submit" type="image" src="images/cat10.jpg" alt="food" value="food">

  </div>
</div>
  </form>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<!-- <div class="advertise" style="display:flex;overflow:hidden" >
      <img src="./img/cat.jpg">
     </div> -->



</div>
</body></html>