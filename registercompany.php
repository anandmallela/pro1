<?php
include 'node.php';
session_start();
$userName = $_SESSION['LoginName'];
$customerid = $_SESSION['username'];
$_SESSION['UID1'] = $customerid;


$company = $_SESSION['company'];

if (isset($_SESSION['LoginName']) && !empty($_SESSION['LoginName'])) {
  header('Location:home.php');
}
$cookie = $_COOKIE['tatalbranch'];
$cookie = stripslashes($cookie);
$savedCardArray = json_decode($cookie, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Rational Vault</title>
  <META NAME="subject" CONTENT="Product Company" />
  <META NAME="Description" CONTENT="NervioCloud - Cross-Site, Cross-Cloud Data Security, Data Governance and Data protection made radically Simple and Secure." />
  <META NAME="Classification" CONTENT="Neridio NervioCloud " />
  <META NAME="Keywords" CONTENT="Neridio, NervioCloud, US9128626, Universal File Virtualization, multi-cloud, multi-cloud protection, rationalvault,Universal File System,                           " />
  <meta name="revisit-after" content="1 month" />
  <meta name="copyright" content="Neridio Systems" />
  <meta name="abstract" content="Product Development Bangalore" />
  <meta name="reply-to" content="contactus@neridio.com" />
  <META NAME="Geography" CONTENT="Bangalore, Karnataka India" />
  <META NAME="Language" CONTENT="English" />
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="PUBLIC" />
  <META NAME="Designer" CONTENT="Neridio Systems" />
  <META NAME="Publisher" CONTENT="Neridio Systems" />
  <META NAME="Author" CONTENT="Neridio Systems" />
  <META NAME="distribution" CONTENT="Global" />
  <META NAME="Robots" CONTENT="INDEX,NOFOLLOW" />
  <META NAME="zipcode" CONTENT="560100" />
  <META NAME="city" CONTENT="Bangalore" />
  <META NAME="country" CONTENT="India" />
  <meta property="og:title" content="Neridio Systems" />
  <meta property="og:site_name" content="Neridio Systems" />
  <meta property="og:url" content="https://neridio.com" />
  <meta property="og:description" CONTENT="NervioCloud - Cross-Site, Cross-Cloud Data Security, Data Governance and Data protection made radically Simple and Secure." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://neridio.com/logo6.jpg" />
  <meta property="fb:app_id" content="" />
  <meta property="twitter:title" content="Neridio Systems" />
  <meta property="twitter:url" content=https://neridio.com>
  <!--Import Google Icon Font-->
  <link rel="shortcut icon" href="Dotline/Images/nervio.png" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="mCss/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="mCss/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Css/login1.css" />
  <style>
    em {
      color: red;
      font-size: 20px;
      " }
  </style>

  <script language="javascript" type="text/javascript" src="js/index.js"></script>
  <script language="javascript" type="text/javascript" src="js/messages.js"></script>
  <script language="javascript" type="text/javascript" src="js/messages1.js"></script>
  <script src="Images/index.html"></script>

</head>


<body>
  <div class="navbar-fixed">
    <nav class="blue-grey darken-4" role="navigation">
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo white-text text-darken-3"><b style="font-size:1em;padding-left:5px;">RationalVault</b>
        </a>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger white-text text-darken-3"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <a href="index.php" class="btn waves-effect waves-light blue darken-3">HOME</a>
          <a href="adminlogin.php" class="btn waves-effect waves-light blue darken-3">LOGIN</a>
          <a href="#" onclick="alert('This feature is available for registered Partners only')" class="btn waves-effect waves-light blue darken-3">PARTNER'S PORTAL</a>
          <a class="waves-effect waves-light btn modal-trigger blue darken-3" href="#modal1">CONTACT US</a>
        </ul>
      </div>
    </nav>
  </div>
  <ul id="nav-mobile" class="sidenav">
    <li>
      <a class="  center" href="/">
        <h4><b>Rational Vault</b></h4>
      </a>
    </li>
    <li><a class="sidenav-close " href="index.html">Home</a></li>
    <li></li>
    <li><img src="mImages/logo5.png" /></li>
  </ul>

  <!-- signup -->
  <section class="login">
    <main>
      <center>
        <div class="section"></div>
        <h3 class="white-text">Sign Up !</h3>
        <h6 class="white-text">
          Sign up to RationalVault.
        </h6><br>

        <div class="container">
          <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE; border-radius: 25px;">
            <form class=z style="margin:0;" method="post" id="form" name="form" action="newcompany.php" onsubmit='return companyvalidator()'>
              <div id="error_Win" style="display: none">
                <span id="errText" style="color:red;">Error message</span><br />
              </div>
              <div class="row">
                <div class="row">
                  <div class="input-field col s12">
                    <input type="radio" id="multi" name="site" value="1" checked style="display:none"></input>

                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input type="text" name="companyname" size="50" id="company_name" placeholder="Enter Provider Name *" />

                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <input type="text" name="customerName" id="customerName" placeholder="Enter Customer Name * " />
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <input type="text" name="companyemail" size="50" id="company_email" placeholder="Enter Customer Email *" />

                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="pswd" type="password" id="pswd" placeholder="Enter Password *" />
                    <div id="perror" style="color:red"> </div>

                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="confpswd" type="password" id="confpswd" placeholder="Confirm Password *" />

                  </div>
                </div>

                <!-- <div class="row">
                                               <div class="input-field col s12">
                                                 <input style="display: none;" type="text" name="ldapname" size="50" id="ldap_name" placeholder="Enter AD/LDAP Server Name" />
                                                 <input style="display: none;" type="text" name="ldapport" size="50" id="ldap_port" placeholder="Enter AD/LDAP Server Port Number" />

                                               </div>
                                             </div>
                                          <div class="row">
                                               <div class="input-field col s12">
                                              <input type="radio" id="basic" name="service" value="0" checked style="display:none;">

                                               </div>
                                             </div> -->
              </div>





              <br> <br>
              <select title="Click to Select" class="icon-menu" id="branchc1" name="branchName" style="size:50px;cursor:pointer;" required="">
                <option value="0">Select Branch</option>
                <?php
                $custName1 = array();
                $BranchXML = "/rationalVault/data/all_xml_dir/NewBranches.xml";

                $nbranch = readDataFromXml("/branchInfo/NumOfBranches", $BranchXML);

                $noc = "";
                for ($name1 = 1; $name1 <= $nbranch; $name1++) {
                  if ($name1 == 1) {
                    $bname1 = readDataFromXml("/branchInfo/branch1_Info/branchname", $BranchXML);
                    $custName1 = ReturnArrayOfUser($bname1, $company);
                  }
                  $query2 = "/branchInfo/branch" . $name1 . "_Info/branchname";
                  $Branchid = readDataFromXml($query2, $BranchXML);
                  $Branchname = readDataFromXml("/branchInfo/branch" . $name1 . "_Info/branchname", $BranchXML);
                ?>
                  <option value="<?php echo $name1; ?>"> <? echo $Branchname; ?></option><?
                                                                                        }
                                                                                          ?>
                </td>^M
                </tr>

              </select>
              <br>
              <br>
              <select title="Click to Select" class="icon-menu" id="eventProduct" name="eventProduct" style="size:50px;cursor:pointer;" required="">
                <option value="0">Select Product</option>
                <?php

                $productxml = "/rationalVault/data/all_xml_dir/NewProductID.xml";

                $noofproduct = readDataFromXml("/ProductInfo/NumOfProducts", $productxml);

                for ($k = 1; $k <= $noofproduct; $k++) {
                  $productid = readDataFromXml("/ProductInfo/Product_" . $k . "/ProductID", $productxml);
                  $productName = readDataFromXml("/ProductInfo/Product_" . $k . "/ProductName", $productxml);
                ?>

                  <option value=<?php echo $productid; ?>> <?php echo $productName; ?></option>
                <?php } ?>
              </select>

              <br>
              <br>

              <br>

              <br />
              <center>
                <div class="row">
                  <!--  <button
                                          type="button"
                                          name="btnLogin"
                                          class="col s12 btn btn-large waves-effect red accent-3"
                                          onclick="sanchez();"
                                        >
                                          SUBMIT
                                        </button> -->
                  <input style="border-radius: 50px;" class="signup_button col s12 btn btn-large waves-effect red accent-3" type="submit" name="Submit" value="Submit" />
                </div>

              </center>
            </form>
          </div>
        </div>
      </center>

      <div class="section"></div>
      <div class="section"></div>
    </main>
  </section>
  <!-- End of signup -->

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <center>
        <i class="material-icons" style="vertical-align: bottom;">phone</i>&nbsp;&nbsp; +91-81973 24604<br /><br />
        <i class="material-icons" style="vertical-align: bottom;">mail</i>&nbsp;&nbsp; peter@neridio.com<br />
      </center>
    </div>
  </div>

  <!--  Footer -->
  <footer class="page-footer blue-grey darken-4">
    <div class="row">
      <div class="col l6 s13">
        <h5>
          <i class="material-icons" style="vertical-align: bottom;">home</i>
          Office Address
        </h5>
        <p align="justify" style="padding-right:5px;margin-top:5px;">
          Neridio Systems Pvt Ltd., <br />Innovation Centre, International
          Institute of Information Technology, Bangalore (IIIT-B) 26/C, Hosur
          Rd, Electronics City Phase 1, Electronics City,<br />
          Bengaluru, Karnataka 560100<br /><br />
          <i class="material-icons" style="vertical-align: bottom;">phone</i>&nbsp;&nbsp; +91-81973 24604<br />
          <i class="material-icons" style="vertical-align: bottom;">mail</i>&nbsp;&nbsp;<a href="mailto:contactus&#64;neridio.com" style="color:white;">
            contactus@neridio.com</a>
        </p>
      </div>
      <!--div class="col l3 s12">
              <h5 class="white-text">Social Links</h5>
              <ul>
                <li>
                <img style="border-radius: 5px;" src="Images/linkedin1.png" width="15" >
                <a class="white-text" href="#">&nbsp Linkedin</a></li>
              <li>
                <img style="border-radius: 5px;" src="Images/facebook1.png" width="15" >
                <a class="white-text" href="#">&nbsp Facebook</a></li>
              <li>
                <img style="border-radius: 5px;" src="Images/twitter.png" width="15" >
                <a class="white-text" href="#">&nbsp Twitter</a></li>
              <li>
                <img style="border-radius: 5px;" src="Images/insta.png" width="15" >
                <a class="white-text" href="#">&nbsp Instagram</a></li>
              </ul>
            </div-->
      <div class="col l3 s13" style="margin-left: 350px;">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="white-text" href="index.html">Home</a></li>
          <li><a class="white-text" href="aboutUs.html">About us</a></li>
          <li><a class="white-text" href="#!"></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-copyright grey darken-4">
      <div class="container">
        <div class="social_icons">
          <ul>
            <!-- <li class="linkedin "> <a href="https://www.linkedin.com/company/neridio/" data-scroll-reveal="wait 0.25s, then enter top and move 40px over 1s"><i class="fa fa-linkedin"></i> </a> </li> -->
          </ul>
        </div>
        <p align="center">
          2019 &copy; Copyright Neridio Systems Pvt Ltd. All rights Reserved.
        </p>
      </div>
    </div>
  </footer>

  <!--  End of Footer -->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="mJs/materialize.js"></script>
  <script src="mJs/init.js"></script>
  <script>
    //Modal initialization
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems, options);
    });
    // Or with jQuery
    $(document).ready(function() {
      $('.modal').modal();
    });
  </script>
  <script>
    var formID = document.getElementById('form');



    var p = document.getElementById('eventProduct');
    var b = document.getElementById('branchc1');

    p.addEventListener('change', function() {
      var ptext = p.options[p.selectedIndex].text;

    });
    b.addEventListener('change', function() {
      var btext = b.options[b.selectedIndex].text;
    });
  </script>

</body>

</html>