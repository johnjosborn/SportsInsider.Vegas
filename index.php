<?php

//initiate the session (must be the first statement in the document)
session_start();

//build player selection
//linked files
require_once 'fp/dbConnect.php';

// Check connection
if (!$conn) {  die("Connection failed: " . mysqli_connect_error()); }

$date = date("l M j Y");

$c1 = "";
$c2 = "";
$c3 = "";
$c4 = "";
$c5 = "";
$c6 = "";
$codedString = "";

//pull all get variables
if (isset($_GET['articleID'])){

    $codedString = $_GET['articleID'];

    $arr = str_split($codedString, 2);

    $c2 = $arr[0];
    $c3 = $arr[1];
    $c4 = $arr[2];
    $c5 = $arr[3];
    $c6 = $arr[4];
    $c1 = $arr[5];

    $mobilePage = "http://www.sportsinsider.vegas/mobile.php?articleID=" . $_GET['articleID'];
}

echo <<<_FixedHTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/isn.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script src="/js/jquery.js"></script>
    
    <title>Vegas Sports Insider</title>
    
    <script>

    </script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-7111364848806706",
        enable_page_level_ads: true
      });
    </script>

</head>
<body> 
    <div id='iFrameCover'>
        fetching article...
    </div>
    <div id='container'>
        <div id='headerContainer'>
            <div id='articleHeader'>
                <div class='headerLeft'>
                    <img src='media/menuIcon.png' class='headerIcon'>SECTIONS
                    <img src='media/findIcon.png' class='headerIcon'>SEARCH
                </div>
                <div class='headerCenter'>
                    <img src='media/title1.png' class='titleImage'>
                </div>
                <div class='headerRight'>
                    <div class='logIn'>
                        LOG IN
                    </div>
                    <div class='subscribe'>
                        SUBSCRIBE
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
            <div id='subMenu1'>
                <table id='subMenuTable'>
                    <tr>
                        <td class='subMenueCell2'>
                            EDITION: US | West Coast
                        </td>
                        <td class='subMenueCell1'>
                            <div class='menuSportButton'>NFL</div>
                            <div class='menuSportButton'>NBA</div>
                            <div class='menuSportButton'>MLB</div>
                            <div class='menuSportButton'>NHL</div>
                            <div class='menuSportButton'>PGA</div>
                            <div class='menuSportButton'>More...</div>
                        </td>
                        <td class='subMenueCell2'>
                            $date
                            <img src='media/isn/sunny.png' class='weatherIcon'>
                            68&#8457
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id='articleContent'>
            <div class='spacer'></div>
            <div id='myBanner'>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- FFOBanner1 -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:728px;height:90px"
                    data-ad-client="ca-pub-1750870984442390"
                    data-ad-slot="5398892536"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div id='contentUpdate'>
                loading...
            </div>
            <div id='rightPanel'>
                <div id='videoPlayer'>
                    <span class='sectionTitle'>TOP VIDEOS</span>
                    <br><br>
                    <img src='media/isn/videoPlayer.png' class='videoIcon'>
                </div>
                <br>    
                <hr>
                <div>
                    <span class='sectionTitle'>TOP STORIES</span>
                    <br><br>
                    <div class='linkHead'>City Council Vote</div>
                    <div class='linkBody'>City Council votes 5-4 to approve initial funding for the long awaited expansion of [more...]</div>
                    <br>
                    <div class='linkHead'>Criminal Charges For Osborn</div>
                    <div class='linkBody'>In yet another bizzare twist in the ongoing saga of J. Osborn, District Attorney Ian T. Quick [more...]</div>
                    <br>
                    <div class='linkHead'>Top Prep Performers of the Week</div>
                    <div class='linkBody'>Once again Lincoln High's star athelete Christopher McKenna had the crowd on their feet with [more...]</div>
                </div>
                <br>
                <hr>
                <div>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- FFOBanner2 -->
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:300px;height:600px"
                        data-ad-client="ca-pub-1750870984442390"
                        data-ad-slot="8268598458"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <hr>
            </div>
            <div style='clear: both;'></div>
        </div>
    </div>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e611571151174"></script>

    <script>

        if (screen.width <= 899) {
            var artLink = '$mobilePage';
            window.location.assign(artLink);
        } else {
            
        }

        updateArticle();

        function updateArticle(){

            $('#iFrameCover').show();

            updateFrameWork();
        }

        function updateFrameWork(){
            
            frameNo =  "3";
            
            $.ajax({
                type: 'POST',
                url: 'fp/update_framework.php',   
                dataType: 'html',
                data: {
                    frame_no : frameNo
                },
                success: function (html) {
                    $("#contentUpdate").html(html);
                    updateInjury();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $("#contentUpdate").hide().fadeIn("slow").html("error loading content.");
                }
            });
            
    
        }
                
        function updatePlayer(){
    
            var selPlayer = '$c1';
    
            $.ajax({
                type: 'POST',
                url: 'fp/update_player.php',   
                dataType: 'html',
                data: {
                    player_id : selPlayer
                },
                success: function (html) {
    
                    var result = $.parseJSON(html);
                    
                    var playerLink = result[0];
                    var playerName = result[1];
                    var playerTeam = result[2];
                    var playerSex = result[3];
                    var playerLoc = result[4];
                    var playerPos = result[5];

                    var locUpper = playerLoc.toUpperCase();
    
                    $(".ply1").html(playerName);
                    $(".ply2").html(playerLink);
                    $(".ply3").html(playerTeam);
                    $(".ply5").html(playerLoc);
                    $(".ply6").html(locUpper);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".ply1").hide().fadeIn("slow").html("error loading name.");
                }
            });
        }
                
        function updateInjury(){
            
            var injury = '$c2';

            $.ajax({
                type: 'POST',
                url: 'fp/update_injury.php',   
                dataType: 'html',
                data: {
                    injury_id : injury
                },
                success: function (html) {

                    var result = $.parseJSON(html);
                    
                    var inj1 = result[0];
                    var inj2 = result[1];
                    var inj3 = result[2];
                    var inj4 = result[3];
                    var inj5 = result[4];

                    $(".inj1").html(inj1);
                    $(".inj2").html(inj2);
                    $(".inj3").html(inj3);
                    $(".inj4").html(inj4);

                    if (inj5 != "None"){
                        $("#injuryImg").attr("src", "media/" + inj5);
                    }

                    updatePlayer();
                    updateDuration();
                    updateByLine();
                    updateTagline();
                    updateQuote();
            
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".inj1").hide().fadeIn("slow").html("error loading injury.");
                }
            });
        }
                
        function updateDuration(){
            
            var duration = '$c3';

            $.ajax({
                type: 'POST',
                url: 'fp/update_duration.php',   
                dataType: 'html',
                data: {
                    duration_id : duration
                },
                success: function (html) {

                    var result = $.parseJSON(html);
                    
                    var dur1 = result[0];
                    var dur2 = result[1];
                    var dur3 = result[2];
                    var dur4 = result[3];

                    $(".dur1").html(dur1);
                    $(".dur2").html(dur2);
                    $(".dur3").html(dur3);
                    $(".dur4").html(dur4);

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".dur1").hide().fadeIn("slow").html("error loading severity.");
                }
            });
        }
                
        function updateByLine(){
            
            var byLine = '$c4';

            $.ajax({
                type: 'POST',
                url: 'fp/update_byLine.php',   
                dataType: 'html',
                data: {
                    byLine_id : byLine
                },
                success: function (html) {

                    var result = $.parseJSON(html);
                    
                    var byl1 = result[0];
                    var byl2 = result[1];
                    var byl3 = result[2];

                    $(".byl1").html(byl1);
                    $(".byl3").html(byl3);
                    $("#byPhotoImg").attr("src", "media/" + byl2);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".byl1").hide().fadeIn("slow").html("error loading cause.");
                }
            });
        }
                
        function updateTagline(){
            
            var tagLine = '$c5';
    
            $.ajax({
                type: 'POST',
                url: 'fp/update_tagLine.php',   
                dataType: 'html',
                data: {
                    tag_Line : tagLine
                },
                success: function (html) {
    
                    var result = $.parseJSON(html);
                    
                    var tagLineFetch = result[0];
    
                    $(".catch").html(tagLineFetch);
                    
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".catch").hide().fadeIn("slow").html("error loading tag line.");
                }
            });
        }

        function updateQuote(){
            
            var quoteID = '$c6';
            
            $.ajax({
                type: 'POST',
                url: 'fp/update_quote.php',   
                dataType: 'html',
                data: {
                    quote_id : quoteID
                },
                success: function (html) {
    
                    var result = $.parseJSON(html);
                    
                    var quoteFetch = result[0];
    
                    $(".qte1").html(quoteFetch);

                    $('#iFrameCover').fadeOut(500);
                    
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".qte1").hide().fadeIn("slow").html("error loading quote.");
                }
            });
        }

    </script>
</body>
</html>

_FixedHTML;

?>