<?php

if (isset($_POST['frame_no'])){

    $frameNum = $_POST['frame_no'];

} else {

    $frameNum = "3";
}

$date = date("l M j Y");


switch ($frameNum) {
     case '3':
        
        echo "<br><br>
            <div class='catch breaking'>[Select Tag]</div>
            <br>
            <div class='headline'>
                <span class='ply1'>[Select Player]</span>&nbsp
                (<span class='inj4'>[Select Injury]</span>)&nbsp
                <span class='dur1'>[Select Severity]</span>
            </div>
            <br>
            <div id='byLineCont'>
                <img id='byPhotoImg' src=''>
                <span class='byl1 inline'>[Select Writer]</span>&nbsp|&nbsp<span class='byl3 inline'>[Select Writer Job]</span>
            </div>
            <div class='addthis_inline_follow_toolbox'></div>
            <div class='posting'>
                <span class='post1'>Submitted: $date</span>
                <br>
                <span class='post2'>Last Updated: 37 mins ago</span>
            </div>
            <br>
            <div id='articleText'>
                <span class='ply6 cityHead'>[Select Player]</span>&nbsp-&nbspMultiple sources inside the
                <span class='ply3'>[Select Player]</span> organization report that
                <span class='ply5'>[Select Player]</span>&nbspstar
                <span class='ply2'>[Select Player]</span>
                <span class='dur2'>[Select Duration]</span>&nbspdue to
                <span class='inj1'>[Select Injury]</span>.   
                <br>
                <img id='injuryImg' src=''>
                <br>
                There has been no official comment yet but <span class='ply3'>[Select Player]</span> management has called a press conference for later
                    today to discuss the imapct the loss of <span class='ply2'>[Select Player]</span> will have on 
                    <span class='ply5'>[Select Player]</span>.<br><br>
                <span class='qte1'>[Select Quote]</span>
            </div>
            <div style='clear: both'></div>
            <div id='tweet'>
                <table>
                    <tr>
                        <td><img src='media/twt/twtUsr.png'></td>
                        <td><span class='twtTitle'>Vegas Sports Insider</span><img src='media/twt/ver.jpg' class='twtIcon'>
                        <br><span class='twtSub'>@VegasSportsInsider</span></td>
                    </tr>
                </table>
                <br>
                Condolences to the fantasy owners who were banking on the <span class='ply3'>[Select Player]</span>
                &nbsp<span class='ply2'>[Select Player]</span>
                .  He <span class='dur2'>[Select Duration]</spandue to
                <span class='inj1'>[Select Injury]</span>.  Time to hit that waiver wire!<br>
                <div id='twtBird'><img src='media/twt/brd.png' class='twtIcon'></div>   
                <span class='twtSub'>10:42AM - Nov 7, 2017</span><br>
                <img src='media/twt/tweetsub.png' class='twtStats'>            
            </div>
            
        ";
        break;

        case '4':
        
            echo "<br>
                <div class='catch breaking'>[Select Tag]</div>
                <div class='headline'>
                    <span class='ply1'>[Select Player]</span>&nbsp
                    (<span class='inj4'>[Select Injury]</span>)&nbsp
                    <span class='dur1'>[Select Severity]</span>
                </div>
                <br>
                <div id='byLineCont'>
                    <img id='byPhotoImg' src=''>
                    <span class='byl1 inline'>[Select Writer]</span>&nbsp|&nbsp<span class='byl3 inline'>[Select Writer Job]</span>
                </div>
                <div class='addthis_inline_follow_toolbox'></div>
                <div class='posting'>
                    <span class='post1'>Submitted October 5, 2017  5:00PM</span>
                    <br>
                    <span class='post2'>Updated October 5, 2017  5:00PM</span>
                </div>
                <br>
                <div id='articleText'>
                    <span class='ply6 cityHead'>[Select Player]</span>&nbsp-&nbspMultiple sources inside the
                    <span class='ply3'>[Select Player]</span> organization report that
                    <span class='ply5'>[Select Player]</span>&nbspstar
                    <span class='ply2'>[Select Player]</span>
                    <span class='dur2'>[Select Duration]</span>&nbspdue to
                    <span class='inj1'>[Select Injury]</span>.
                    <br>  
                    <img id='injuryImg' src=''>
                    <br>
                    There has been no official comment yet but <span class='ply3'>[Select Player]</span> management has called a press conference for later
                        today to discuss the imapct the loss of <span class='ply2'>[Select Player]</span> will have on  
                        <span class='ply5'>[Select Player]</span>.<br><br>
                    <span class='qte1'>[Select Quote]</span>
                </div>
                <div style='clear: both'></div>
                <br>
                <div id='tweet'>
                    <table>
                        <tr>
                            <td><img src='media/twt/twtUsr.png' class='twtLogo'></td>
                            <td><span class='twtTitle'>Vegas Sports Insider</span><img src='media/twt/ver.jpg' class='twtIcon'>
                            <br><span class='twtSub'>@VegasSportsInsider</span></td>
                        </tr>
                    </table>
                    Condolences to the fantasy owners who were banking on the <span class='ply3'>[Select Player]</span>
                    &nbsp<span class='ply2'>[Select Player]</span>
                    .  He <span class='dur2'>[Select Duration]</spandue to
                    <span class='inj1'>[Select Injury]</span>.  Time to hit that waiver wire!<br>
                    <div id='twtBird'><img src='media/twt/brd.png' class='twtIcon'></div>   
                    <span class='twtSub'>10:42AM - Nov 7, 2017</span><br>
                    <img src='media/twt/tweetsub.png' class='twtStats'>            
                </div>
                
            ";
            break;
    
    default:
        # code...
        break;
}


// echo "<br><br>
//         <div class='catch breaking'>BREAKING NEWS</div>
//         <br>
//         <div class='headline'>
//             <span class='ply1'>[Select Player]</span>&nbsp&nbsp
//             (<span class='inj4'>[Select Injury]</span>)&nbsp&nbsp
//             <span class='dur1'>[Select Severity]</span>
//         </div>
//         <div class='posting'>
//             <span class='post1'>Submitted October 5, 2017  5:00PM</span>
//             <br>
//             <span class='post2'>Updated October 5, 2017  5:00PM</span>
//         </div>
//         <br><br>
        
//         <p>This just in:<div class='ply2 inline'>[Select Player]</div> has <div class='inj2 inline'>[Select Injury]</div>.</p>
//         <p class='inline'>This happened when he&nbsp <div class='cau1 inline'>[Select Cause]</div>.</p>
//         <p class='inline'>He is expected to&nbsp<div class='dur2 inline'>[Select Severity]</div></p>
//         <div id='byLineCont'>
//             <img id='byPhotoImg' src=''>
//             <br>
//             <div class='byl1 inline'>[Select Writer]</div>
//             <hr>
//             <div class='byp1 inline'>[Select Writer Job]</div>.
//         <div>
//     ";


?>