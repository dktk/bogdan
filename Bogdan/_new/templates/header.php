<!DOCTYPE html>
<html lang="ro" class="csstransforms csstransforms3d csstransitions"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{$description}">
<meta name="keywords" content="{$keywords}">


<title>{$title}</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="apple-touch-icon" href="favicon.png" />
<link rel="shortcut icon" href="/favicon.png" />

<!-- Custom CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/ionicons.min.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/responsive.css" rel="stylesheet" />
<link href="css/fixes.css" rel="stylesheet" />

<!-- Online Fonts -->
<link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Google Tag Manager --> 
<noscript> 
<iframe src="//www.googletagmanager.com/ns.html?id=GTM-T28G24" 
height="0" width="0" style="display:none;visibility:hidden"></iframe> 
</noscript> 
<script> 
(function (w, d, s, l, i) { 
                    w[l] = w[l] || []; w[l].push({ 
                                        'gtm.start': 
                                        new Date().getTime(), event: 'gtm.js' 
                    }); var f = d.getElementsByTagName(s)[0], 
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); 
})(window, document, 'script', 'dataLayer', 'GTM-T28G24');</script> 
<!-- End Google Tag Manager --> 
 	
<!-- Wrap -->
<div id="wrap">

  <!-- header -->
  <div class="container relative">
    <header>
      <div class="logo"> <a href="/"><img class="img-responsive" src="images/sigla.png" alt=""></a> </div>
      <!-- Top bar -->
      <div class="top-bar">
        <div class="top-info">
          <ul class="personal-info">
            <li>
              <p><i class="fa fa-phone"></i> + 0740 38 18 82 </p>
            </li>
            <li>
              <p><i class="fa fa-envelope-o"></i>contact@advanceddesign.ro</p>
            </li>
            <li>
              <p><i class="fa fa-clock-o"></i> Luni - Vineri 09:00 - 18:00 </p>
            </li>
          </ul>
          <ul class="social">
        <li><a target="_blank" href="https://www.facebook.com/AvdancedDesign"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a target="_blank" href="https://plus.google.com/u/0/107486738031529093383/about"><i class="fa fa-google"></i></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/advanced-design"><i class="fa fa-linkedin"></i></a></li>   </ul>
        </div>

        <!-- Navigation -->
        <nav class="navbar">
          <ul class="nav ownmenu">

            {foreach from=$Menu key=k item=i}
    					<li {if strrpos($i, $SelMenu) === 0}class="active"{/if}><a href="{$i}">{$k}</a></li>
    				{/foreach}
          </ul>

          <!-- GET A QUOTES -->
          <div class="quotes"> <a href="contact.php" class="customcolor"><i class="fa fa-pencil-square-o"></i> Contacteaza-ne </a> </div>
        </nav>
      </div>
    </header>
  </div>
