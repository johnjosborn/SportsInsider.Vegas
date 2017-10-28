<?php

//initiate the session (must be the first statement in the document)
session_start();

//build player selection
//linked files
require_once 'fp/dbConnect.php';

// Check connection
if (!$conn) {  die("Connection failed: " . mysqli_connect_error()); }

$date = date("l M j Y");

$c0 = $c1 = $c2 = $c3 = $c4 = $c5 = $c6 = $c7 = 0;

//pull all get variables
if (isset($_GET['c0'])){
    $c0 = $_GET['c0'];
}
if (isset($_GET['c1'])){
    $c1 = $_GET['c1'];
}
if (isset($_GET['c2'])){
    $c2 = $_GET['c2'];
}
if (isset($_GET['c3'])){
    $c3 = $_GET['c3'];
}
if (isset($_GET['c4'])){
    $c4 = $_GET['c4'];
}
if (isset($_GET['c5'])){
    $c5 = $_GET['c5'];
}
if (isset($_GET['c6'])){
    $c6 = $_GET['c6'];
}
if (isset($_GET['c7'])){
    $c7 = $_GET['c7'];
}
if (isset($_GET['c8'])){
    $c8 = $_GET['c8'];
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
    <link rel="stylesheet" type="text/css" href="../css/isn.css">

    <script src="../js/jquery.js"></script>
    
    <title>International Sporting News</title>
    
    <script>
 
    </script>
</head>
<body> 
    <div id='container'>
        <div id='headerContainer'>
            <div id='articleHeader'>
                <table id='headerTable'>
                    <tr>
                        <td class='headerSide'>
                            <img src='../media/menuIcon.png' class='headerIcon'>SECTIONS
                            <img src='../media/findIcon.png' class='headerIcon'>SEARCH
                        </td>
                        <td class='headerTitle'>
                            <img src='../media/title1.png' class='titleImage'
                        </td>
                        <td class='headerSide'>
                            <div class='logIn'>
                                LOG IN
                            </div>
                            <div class='subscribe'>
                                SUBSCRIBE
                            </div>
                        </td>
                    </tr>
                </table>
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
                            <img src='../media/isn/sunny.png' class='weatherIcon'>
                            68&#8457
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id='articleContent'>
            <div class='spacer'></div>
            <div id='myBanner'>
                <img src='../media/isn/sampleBanner.png'>
            </div>
            <div id='contentUpdate'>
                Updating Article
            </div>
            <div id='rightPanel'>
                <div id='videoPlayer'>
                    <span class='sectionTitle'>TOP VIDEOS</span>
                    <br><br>
                    <img src='../media/isn/videoPlayer.png' class='videoIcon'>
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
                    <img src='../media/isn/skyscraper.png'>
                </div>
                <hr>
            </div>
            <div style='clear: both;'></div>
        </div>
    </div>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e611571151174"></script>

    <script>

        updateArticle()

        function updateArticle(){

            updateFrameWork();
            updatePlayer();
            updateInjury();
            updateDuration();
            updateByLine();
            updateTagline();
            updateQuote();
        }

        function updateFrameWork(){
            
            frameNo =  $c0;
            
            $.ajax({
                type: 'POST',
                url: '../php/fp/update_framework.php',   
                dataType: 'html',
                data: {
                    frame_no : frameNo
                },
                success: function (html) {
                    $("#contentUpdate").html(html);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $("#contentUpdate").hide().fadeIn("slow").html("error loading content.");
                }
            });
    
        }
                
        function updatePlayer(){
    
            var selPlayer = $c1;
    
            $.ajax({
                type: 'POST',
                url: '../php/fp/update_player.php',   
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
    
                    updateLink();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".ply1").hide().fadeIn("slow").html("error loading name.");
                }
            });
        }
                
        function updateInjury(){
            
            var injury = $c2;

            $.ajax({
                type: 'POST',
                url: '../php/fp/update_injury.php',   
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
                        $("#injuryImg").attr("src", "../media/" + inj5);
                    }
                    updateLink();
                    
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".inj1").hide().fadeIn("slow").html("error loading injury.");
                }
            });
        }
                
        function updateDuration(){
            
            var duration = $c3;

            $.ajax({
                type: 'POST',
                url: '../php/fp/update_duration.php',   
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

                    updateLink();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".dur1").hide().fadeIn("slow").html("error loading severity.");
                }
            });
        }
                
        function updateByLine(){
            
            var byLine = $c5;

            $.ajax({
                type: 'POST',
                url: '../php/fp/update_byLine.php',   
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
                    $("#byPhotoImg").attr("src", "../media/" + byl2);
                    
                    updateLink();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".byl1").hide().fadeIn("slow").html("error loading cause.");
                }
            });
        }
                
        function updateTagline(){
            
            var tagLine = $c7;
    
            $.ajax({
                type: 'POST',
                url: '../php/fp/update_tagLine.php',   
                dataType: 'html',
                data: {
                    tag_Line : tagLine
                },
                success: function (html) {
    
                    var result = $.parseJSON(html);
                    
                    var tagLineFetch = result[0];
    
                    $(".catch").html(tagLineFetch);
    
                    updateLink();
                    
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $(".catch").hide().fadeIn("slow").html("error loading tag line.");
                }
            });
        }

        function updateQuote(){
            
            var quoteID = $c8;
            
            $.ajax({
                type: 'POST',
                url: '../php/fp/update_quote.php',   
                dataType: 'html',
                data: {
                    quote_id : quoteID
                },
                success: function (html) {
    
                    var result = $.parseJSON(html);
                    
                    var quoteFetch = result[0];
    
                    $(".qte1").html(quoteFetch);
    
                    updateLink();
                    
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