
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> the times of india</title>
	 <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
	 <link href="media_query.css" rel="stylesheet" type="text/css"/>
	 <link href="style_1.css" rel="stylesheet" type="text/css"/>
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
         
</head>
<body>
<!============================== upper bar of the page with timesof india link ===============================>
<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
              <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                    class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018 </a>
					 <div class="d-inline-block fh5co_trading_posotion_relative">
					     <a class="left" href="https://timesofindia.indiatimes.com/"> Breaking news<a>
					 </div>
			    </div>		
			</div>
	    </div>
    </div>
<!=========================================logo and  social  media networks=====================================>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="logo.png" alt="img" class="fh5co_logo_width"/>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                <div class="d-inline-block text-center dd_position_relative ">
                    <select class="form-control fh5co_text_select_option">
                        <option>English </option>
                        <option>French </option>
                        <option>German </option>
                        <option>Spanish </option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>	
<!=================================  menu bar ===============================>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Headlines<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">World news <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#"> Sprts news<span class="sr-only">(current)</span></a>
                    </li>
					<li class="nav-item ">
                        <a class="nav-link" href="#">Page 3 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Add's <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>	
 <!======================================== importing newsAPI file ===================================>
<?php

$myObj = file_get_contents("https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=7ca96444fea3414ea7d9b34bd20c12ca");  // Reads entire file into a string

$userdata = json_decode( $myObj, true );   //Decodes a JSON string

//print_r ($userdata['articles']);
?>
<div class="container-fluid pb-4 pt-4 paddding" style="display:block; color:red;">
    <div class="container paddding">
    <div class="row pb-4">
          
		     <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">TODAY'S  HEADLINES</div>
                </div>
				<?php    $i = 0;    while($i<count($userdata['articles'])){?>
				
                        <div class="fh5co_hover_news_img">
                           <div  class="fh5co_news_img" href="<?php echo $userdata['articles'][$i]['url']; ?>" target="_blank">
                               <img width="220" height="250" border="0" align="center"  src="<?php echo $userdata['articles'][$i]['urlToImage']; ?>"/>
                           </div>
                         </div>
                   
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="<?php echo $userdata['articles'][$i]['url']; ?>" class="fh5co_magna py-2"> <?php echo $userdata['articles'][$i]['title'] ; ?> </a>
						<a href="#" class="fh5co_mini_time py-3"><sub> by- <?php echo $userdata['articles'][$i]['author']; ?> </sub>
                       <span style="color:grey;float: right;" ><?php echo $userdata['articles'][$i]['publishedAt']; ?> </span>
						</a>
                        <div class="fh5co_consectetur"> <?php echo $userdata['articles'][$i]['description']; ?>
                        </div>
					<?php	$i++; }?>
                </div>
             </div>
      </div>
	<!================================= footer	============================>
<?php
include "footer.php";
?>
</body>
</html>













