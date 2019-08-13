<style type="text/css">
@charset "utf-8";
/* CSS Document */
body{background-color:white;padding: 0px;margin: 0px;text-transform:capitalize;}

.container{background-color:whitesmoke;min-height: 100%;     }
.scc1 > div{height:150px; width:150px; background-color:#CCFF33; float:left;}
.hcontainer{ width:100%;  background-color:#0000ff;    float: right; }
.h_left{    padding-left: 20px;  background-color:#0000ff; float:left;padding: 5px;}
.h_left > *{margin: 0px;display: block;color: white;}
.h_right{     float: right; }
.h_right > *{display:inline;    }
/*nevigation*/
.nevigation{ width:100%; background-color:#666699;display: flex;}

.nav { width:100%; overflow:auto;margin: 0px;padding: 0px;}
.nav li { display:inline;}
 .nav li a { display:block; float:left; padding:0px 15px; min-width: 100px;   line-height:52px; font-size:20px; font-align:center; text-transform:uppercase; font-weight:bold; color:#fff; text-decoration:none; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; text-align:center; margin-left:0px; background:url(imageinner/nav-bg1.png) no-repeat left top;}
.nav li a:hover { background:red url(imageinner/nav-bg2.png) no-repeat left top;}
/*.nav li a.current { background:blue url(imageinner/nav-bg2.png) no-repeat left top;}*/
/* ----------------------------------------Slider*---------------------------------------------*/
slider{ height:500px; width: 100%; background-color:#FFFFFF; float:left;}
.citysearch{    width: 100%;
    background-color: #5b413d00;
	display:flex;
	overflow: auto;
	}

/* ----------------------------------------Shop.php*---------------------------------------------*/
/* ----------------------------------------Shop.php*---------------------------------------------*/
.shop_container{ height:500px; width:900px; background-color:#FFFFFF; float:left;}
.scc1 > div{ background-color:#CCFF33; width: 100%,
display: flex;}



</style>
<div class="hcontainer">
     
     <div class="h_left"> 

     	<h1>CITYSHOPEE</h1>
     	 <h3><i>Buy from here,Sell from here </i></h3>
    <h4><i>Make our city strong </i></h4>
    
 
</div> 
     
      
     
     
     <div class="h_right" float:"right"> 
 
     		
<form action="<?php echo site_url(); ?>user/search" method="get">
<input style="width:80%;height:25px;padding:0px;border:0" type="text" name="search_bar" id="h_search" placeholder="Shop Name"/>
     <input type="image" src="<?php echo base_url(); ?>images/search.png" alt="search"   style="width:18%;height:25px;position:relative;    top: 8px;right: 5px;"  name="search"/></form>
 <br>
 <div style="background:#626df7 ;margin: 0px;display:block;    width: 98%;"> 
    Shopkeeper  
    <ul class="nav">
              <li><a href="<?php  echo site_url(); ?>/shopkeeper/signup">Register</a></li>
          <li><a href="<?php  echo site_url(); ?>/shopkeeper/" class="current">Log In </a></li>
      </ul>
  </div>
 
 </div>
  </div>
      <!-- start nevigations -->
