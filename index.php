<!doctype html>
 <html manifest="manifest.appcache"  lang="en">
<!--<html manifest="cache.manifest" type="text/cache-manifest" class="no-js" lang="en">-->
<html  lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Safety Contacts</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />

    <!-- // set web app capable Apple -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Safety Contacts">

    <!--/* Apple Touch Icons */-->
    <link rel="apple-touch-icon" sizes="57x57" href="imgs/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="imgs/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="imgs/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="imgs/apple-icon-144x144.png" />

    <!--/* local javascript */-->
    <script type="text/javascript" src="js/UserLib.js"></script> 
	<!-- Actual schools names in userlib changed to fiction/sciFiction. People changed to Founding Fathers in history -->
    <script type="text/javascript" src="js/scriptLib.js"></script>
    <script>
        // if click: Reload window and Set LocalStorage variable //
        function dblTap() {
            var updateCheck = "requested";
            localStorage.setItem("refresh", updateCheck);
            window.location.reload();
        }
        // if local storage set = reload {refresh local cache view of any updates pulled after initial cache view //
        if(localStorage.getItem("refresh")==="requested"){
            localStorage.setItem("refresh", null);
            window.location.reload();
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body id="top">

<!--header ************************************************-->
<div id="safetyHeader">
    <h1><a onclick="dblTap()" href="#">PCSD Safety Test </a></h1>
</div>


<!--topbar ************************************************-->
<div id="blockWrap">
    <div class="top-bar">
        <ul class="menu">
            <li><a style="padding-left:0;" onClick="location.reload();" class="" href="#top">H</a></li>
            <li><a onclick="OneSet(ESData);" id="elementary" href="#">ES</a></li>
            <li><a onclick="OneSet(MSData);"  id="middle" href="#">MS</a></li>
            <li><a onclick="OneSet(HSData);" id="high" href="#">HS</a></li>
            <li><a onclick="OneSet(BOEData);" id="depts" href="#">Dpts</a></li>
            <li><a onclick="OneSet(AramarkData);" id="aramark" href="#">Aramark</a></li>
        </ul>
    </div>
</div>


<!-- parentblock ************-->
<div id="parentBlock">
    <div class="switchMeOut">
        <div id="beforeSwitch" class="switchMeOut">
                <script>
                    ESData();
                    MSData();
                    HSData();
                    BOEData();
                    AramarkData();
                </script>
        </div>
    </div>
</div>



<!--  buttons ************************************************************-->
<br />

<div class="row">
    <div class="large-12 medium-12 columns">

        <button class="expanded button" type="button" data-toggle="evacuation-dropdown">Evacuation</button>
        <div class="dropdown-pane" id="evacuation-dropdown" data-dropdown data-auto-focus="true">
            <p>Get to go box?  Are you far enough from buidling?		Have you called 911?
                <br /><br />Have you notified <a href="#">Operations Department</a> at the BOE?
                <br /><br />All students and staff accounted for?   Are you able to stay outside comfortably?
                <br /><br /><a id="dial911" href="tel:911">Call 911</a>
            </p>
        </div>

        <button class="expanded button" type="button" data-toggle="relocation-dropdown">Relocation</button>
        <div class="dropdown-pane" id="relocation-dropdown" data-dropdown data-auto-focus="true">
            <p>Contact receiving school?  Transportation time frame?
                <br /><br />Traffic controls in place? Reunification plan in place and on hand?
                <br /><br /><a href="Relocation_by_feeder.pdf">Relocation By Feeder </a> (PDF)
            </p>
        </div>

        <a id="emsCall" href="tel:911" class="expanded button">Dial 911</a>

        <div style="width:100%;margin:0 auto;text-align:center;">
            <div style="max-width:448px;margin:0 auto; margin-bottom:200px;">
                <img style="margin:0 auto;;" src="imgs/PCSD.gif"  alt="Paulding County School District" width="100%" height="100%" />
            </div></div>

    </div>
</div>



<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/what-input.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/app.js"></script>
</html>
