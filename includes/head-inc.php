<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="mobileOptimized" content="width">
<meta name="handheldFriendly" content="true">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<meta name="robots" content="index, follow" />
<meta name="description" content="MCH Telecom Inc. is Southeast Michigan's leading data and telecommunications contractor specializing in low voltage structured cabling." />
<meta name="author" content="Metro Graphics & Design, L.L.C./Robert Vincent" />
<title>
    <?php // Use a default page title if one wasn't provided...
        if (isset($page_title)) { 
            echo $page_title; 
        } else { 
            echo 'MCH Telecom Inc'; 
        } 

        //Check for IE
        /*$ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
        if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
            echo "If you receive this message you are using an outdated version of Internet Explorer. Please use the latest version of Microsoft Edge, Firefox, Safari, Google Chrome, Opera";
        }*/

    ?>
</title>
<link rel="stylesheet" href="styles/styles.css" type="text/css" media only="screen and min-device-width : 320px) and (max-device-width : 3000px)" />
<!--<link rel="stylesheet" href="../styles/smartphone.css" type="text/css" media only="screen and min-device-width : 320px) and (max-device-width : 779px)" />
<link rel="stylesheet" href="../styles/tablet.css" type="text/css" media only="screen and min-device-width : 780px) and (max-device-width : 1023px)" />
<link rel="stylesheet" href="../styles/desktop.css" type="text/css" media only="screen and min-device-width : 1023px) and (max-device-width : 3000px)" />-->
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- For Chrome for Android: -->
<link rel="icon" sizes="192x192" href="touch-icon-192x192.png">
<!-- For iPhone 6 Plus with @3× display: -->
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="apple-touch-icon-180x180-precomposed.png">
<!-- For iPad with @2× display running iOS ≥ 7: -->
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152-precomposed.png">
<!-- For iPad with @2× display running iOS ≤ 6: -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
<!-- For iPhone with @2× display running iOS ≥ 7: -->
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120-precomposed.png">
<!-- For iPhone with @2× display running iOS ≤ 6: -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
<!-- For the iPad mini and the first- and second-generation iPad (@1× display) on iOS ≥ 7: -->
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76-precomposed.png">
<!-- For the iPad mini and the first- and second-generation iPad (@1× display) on iOS ≤ 6: -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png"><!-- 57×57px -->
</head>

<body>
	<div class="bgCover bgCoverStore">
        
    </div>
	<!--*************************************************************************
    Header Section
    ***************************************************************************-->
    <header id="header">
        <div class="tel-bar" id="tel-bar">
            <p>
                CALL US: (734) 340-2059
            </p>
        </div>
        <a href="https://www.mchtelecominc.com/">
            <img class="logo" src="images/header-mch-telecom-inc-logo.png" alt="MCH Telecom Inc logo" />
        </a>
        <img class="nav-toggle" src="images/nav-toggle.png" alt="navigation toggle">
        <nav>
            <h1 class="closeBtn">
                X
            </h1>
            <?php
                //Check URL for specific word to change class
                /*if(strpos($_SERVER['REQUEST_URI'], 'index') !== false){
                    echo "This is a test!";
                }*/
            ?>
            <ul>
                <li>
                    <a class="homeBtn" href="https://www.mchtelecominc.com/">Home</a>
                </li>
                <li>
                    <a class="aboutBtn" href="about">About</a>
                </li>
                <li class="serviceBtn">
                    <a class="servicesBtn" href="services">Services</a>
                </li>
                <li><a class="contactBtn" href="contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <br class="clear-fix" />