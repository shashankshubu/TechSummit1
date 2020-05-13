

<!doctype html>
<html lang="en">
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>FAME TECHNOLOGIES</title>
<!--  FAVICON  -->
<link rel="shortcut icon" href="img/logo/favicon.ico" />
<!--  //FAVICON  -->
<!--  FONTS  -->
<!-- <link href='http://fonts.googleapis.com/css?family=Lato:400,300,900,700' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" type="text/css" href="style/font-awesome.min.css" />
<!--  //FONTS  -->
<!--  JQUERY CSS  -->
<link rel="stylesheet" type="text/css" href="style/jquery/flexslider.css" />
<!--  //JQUERY CSS  -->
<!--  ANIMATE CSS  -->
<link rel="stylesheet" type="text/css" href="style/animate/animate.css" />
<!--  //ANIMATE CSS  -->

<!--  CSS  -->
<link rel="stylesheet" type="text/css" href="style/bootstrap/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="style/style.css" />
<!--  //CSS  -->
<!--  THEMES COLOR STYLE  -->
<link rel="stylesheet" type="text/css" href="style/template_bg/light.background.css" />

<link rel="stylesheet" type="text/css" href="style/template_color/blue.color.css" />
<!--  //THEMES COLOR STYLE  -->
<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #009dc0; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #017f9b; 
}
@font-face {
  font-family: 'Arial';
  font-weight: normal;
  font-style: normal;
}
</style>
<script language=Javascript>
                            function isNumberKey(evt) {
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if (charCode > 31 && (charCode < 48 || charCode > 57))
                                    return false;

                                return true;
                            }
                        </script>

</head>
    
<body>
    <!--  PRELOADER  -->
    <img id="preloader" alt="" src="img/preloader/preloader.gif">
    <!--  //PRELOADER  -->
    
    <!--  LEFT MENU  -->
    <div class="left-menu">
        <!--  LOGO  -->
        <a class="logo" href="index.html">
           <img src="img/logo/logo_main.png">
        </a>
        <!--  //LOGO  -->
        <!--  NAVIGATION  -->
        <nav class="main-navi">
            <ul>
                <li>
                    <a id="indexLink" href="index.html">
                        Home
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>
                <li>
                    <a id="aboutLink" href="about.html">
                        About
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>
                <li>
                    <a id="agendaLink" href="agenda.html">
                        Agenda
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>
                <li>
                    <a id="speakerLink" href="speaker.html">
                        Speakers
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>
                <li>
                    <a class="active" id="registrationLink" href="registration.php">
                        Registration
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>
                <li>
                    <a id="contactLink" href="contact.html">
                        contact Us
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>
            </ul>
        <em id="showHideMenu" class="show-hide-menu glyph fa-bars" href="#"></em>
         
        <p class="copy" style="padding-top: 20px;">&copy; 2020 Fame Tech. All rights reserved.</p>
        </nav>
        <!--  //NAVIGATION  -->
        
        <!--  //TWITTER  -->
        <!--  SOCIAL ICONS  -->
        <!-- <div class="soc-icons">
            <a class="glyph fa-twitter" href="#"></a>
            <a class="glyph fa-facebook" href="#"></a>
            <a class="glyph fa-google-plus" href="#"></a>
            <a class="glyph fa-linkedin" href="#"></a>
        </div> -->
        <!--  //SOCIAL ICONS  -->
      
    </div>
    <!--  //LEFT MENU  -->

    <!--  RIGHT CONTENT  -->
    <div class="right-content">
        <!--  CONTACT  -->
        <div class="contact main-block">
            <div class="left-content col-lg-12">
                <div class="scroller">
                    <article class="left-content-text">
                        <h2>REGISTER HERE</h2>
                        
                       <div class="row contact-details">
                            
                            <div class="form col-lg-12 col-md-12 col-sm-12">
                                <form class="row" action="" method="post" >
 
                                <div class="clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="firstname" placeholder="First Name" type="text" required />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                       <input name="lastname" placeholder="Last Name" type="text" required />
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                       <input name="job_title" placeholder="Job Title" type="text" required />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                      <input name="Institute_name" placeholder="Institute Name" type="text" required />
                                    </div>
                                </div>
                              
                                 <div class="clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                      <input name="state" placeholder="State" type="text" required />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                     <input name="address" placeholder="Address" type="text" required />
                                    </div>
                                </div>
                                 <div class="clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                     <input name="email_address" id="email" placeholder="e-mail" type="text" required />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                     <input name="user_mobile" id="email" placeholder="Mobile Number" type="text"  minlength="10" maxlength="10" required onkeypress="return isNumberKey(event)"/>
                                    </div>
                                </div>
                                
                                <div class="clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                       <h5>  LOREM IPSUM</h5>
                                       <h5>
                                   <input type="radio" name="dietary" value="Option 1" checked> Option 1 </h5>
                                   <h5>
                                   <input type="radio"  name="dietary" value="Option 2"> Option 2 </h5>
                                   <h5>
                                   <input type="radio"  name="dietary" value="Option 3"> Option 3</h5>
                                   <h5><input type="radio" name="dietary" value="Option 4"> Option 4</h5>
                                    </div>
                                </div>
                                 <div class="">
                                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 15px;">
                                       <input type="checkbox" class="" name="privacy" value="Yes" required> 
                                            I understand and agree to the Privacy Policy.</a>
                                    </div>
                                </div>
                                 <div class="clearfix">
                                 <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 15px;">
                                    <input  value="Submit" type="submit" name="submit" />
                                </div>
                              </form>
                            </div>
                        </div>
                    </article>
                </div>   
                <div class="scroller__track">
                    <div class="scroller__bar"></div>
                </div>    
            </div>


        </div>
        
    </div>
    <!--  //RIGHT CONTENT  -->

<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery/jquery.gridrotator.js"></script>
<script type="text/javascript" src="js/jquery/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery/baron.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.script.js"></script>
</body>
</html>
