<html>
<title>
</title>
<head>
<head>
<!--
<script>
function requestFullScreen(image1) {
    var image = document.getElementById(image1);

    image.style.width=(0.70*screen.width)+'px';
    image.style.height=(0.96*screen.height)+'px';

     // Get the element that we want to take into fullscreen mode
        var element = parent.document.getElementById('imageFullScreen');
       if(element.requestFullScreen) {
          element.requestFullScreen();
       } else if (element.mozRequestFullScreen) {
          // This is how to go into fullscren mode in Firefox
          element.mozRequestFullScreen();
        } else if (element.webkitRequestFullScreen) {
          // This is how to go into fullscreen mode in Chrome and Safari
          element.webkitRequestFullScreen();
       }else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
        document.getElementById('imageFullScreen').style.width="100%";
        document.getElementById('imageFullScreen').style.height="100%";
        image.style.height=(0.96*$(window).height())+"px";
        document.getElementById('showFullScreen').style.display='none';
        document.getElementById('cancelFullScreen').style.display='inline';
        document.getElementById("ieCheck").value="true";
       }
}



//to close full screen manually
function cancelFullscreen() {
    if(document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if(document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if(document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    } else if (typeof window.ActiveXObject !== "undefined"){
    IEtoggleSmallScreen();
    }

}


//listners to change at full screen and small screen

document.addEventListener("fullscreenchange", function () {
    if(document.fullScreen){
         document.getElementById('showFullScreen').style.display='none';
         document.getElementById('cancelFullScreen').style.display='inline';
     }else{
         document.getElementById('showFullScreen').style.display='inline';
         document.getElementById('cancelFullScreen').style.display='none';
     }
});



document.addEventListener("mozfullscreenchange", function () {
    if(document.mozFullScreen){
         document.getElementById('showFullScreen').style.display='none';
         document.getElementById('cancelFullScreen').style.display='inline';
     }else{
         document.getElementById('showFullScreen').style.display='inline';
         document.getElementById('cancelFullScreen').style.display='none';
     }
});

document.addEventListener("webkitfullscreenchange", function () {
 if(document.webkitIsFullScreen){
     document.getElementById('showFullScreen').style.display='none';
     document.getElementById('cancelFullScreen').style.display='inline';
 }else{
     document.getElementById('showFullScreen').style.display='inline';
     document.getElementById('cancelFullScreen').style.display='none';
 }

});

//to change screen size in i.e
function IEtoggleSmallScreen(){
    document.getElementById('showFullScreen').style.display='inline';
    document.getElementById('cancelFullScreen').style.display='none';
    document.getElementById('imageFullScreen').style.width=638+"px";
    document.getElementById('imageFullScreen').style.height=479+"px";
}

// toc check esc functuonlaity for ie
$(document).keyup(function(e) {
    if (e.keyCode == 27) {
    var check = document.getElementById("ieCheck");
    if(check.value=="true"){
        IEtoggleSmallScreen();
        check.value="false";
    }
    }
  });
  </script>
-->

  <body>

    <div id="imageFullScreen" class="imageFullScreen" style="width: 700px;height:400px;background-color:blue; center;text-align: center;" >
    <img  id="image" src="<%=imageUrl%>=1" style="max-height: 96%;max-width: 100%;width: 100%;height: 100%">

    <div id="btnCentre" style="text-align: center;">
    <input type="hidden" id="ieCheck" value="false">
    <input type="button" value="Full Screen"  onclick="requestFullScreen('image');" id="showFullScreen" style="max-height: 4%">
    <input type="button" value="Cancel Screen"  onclick="cancelFullscreen();" id="cancelFullScreen" style="display: none;" style="max-height: 4%">
    </div>
    </div>
    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#F3F3F3">
							    <tbody>
							      <tr>
							        <td width="9%" class="TextMain_subpage"><strong>Sl. No.</strong></td>
							        <td width="29%" class="TextMain_subpage"><strong>Name of the Districts</strong></td>
							        <td width="15%" class="TextMain_subpage"><strong>STD Code</strong></td>
							        <td width="20%" class="TextMain_subpage"><strong>Office No.</strong></td>
							        <td width="15%" class="TextMain_subpage"><strong>Residence</strong></td>
							        <td width="12%" class="TextMain_subpage"><strong>Fax No.</strong></td>
							        </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">1</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Barpeta</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03665</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">225129</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">252105</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">223102</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Baksa</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03624</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">282769</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">&nbsp;</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">3</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Bongaigaon</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03664</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">230889</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">230891</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">231338</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">4</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Cachar</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03842</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">245056</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">245054</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">233905</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">5</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Chirang</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03624</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">241992</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">242302</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">241103</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">6</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Darrang</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03713</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222135</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222138</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222153</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">7</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Dhubri</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03662</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">220419,                   230050<br></td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">230030</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">233000</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">8</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Dibrugarh</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">0373</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">316063</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2316062</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2316034</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">9</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Dhemaji</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03753</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">224208</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">224203</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">224393</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">10</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Goalpara</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03663</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">240030</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">240028</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">240314</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">11</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Golaghat</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03774</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">280222</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">280221</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">280455</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">12</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Hailakandi</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03844</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222251</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222204</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222254</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">13</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Jorhat</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">0376</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2320020</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2320025</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2320073</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">14</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Kamrup (M)</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">0361</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2540149</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2540104</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2544453</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">15</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Kamrup </td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">0361</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2606525</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2604343</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2606630</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">16</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Karimganj</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03843</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">262345</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">262103</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">264150</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">17</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Kokrajhar</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03661</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">270741</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">270740</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">270867</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">18</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Karbi – Anglong</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03671</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">272257</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">272255</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">272693</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">19</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Lakhimpur</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03752</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222196</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222104</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">221929</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">20</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Morigaon</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03678</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">240225</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">240235</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">240308</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">21</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Nagaon</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03672</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">233815</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">233202</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">233222</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">22</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Nalbari</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03624</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">220496</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">220218</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">220469</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">23</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. N.C. Hills</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03673</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">236222</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">236267</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">236221</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">24</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Sonitpur</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03712</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">220011</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">220005</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">221601</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">25</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Sivasagar</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03772</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222137</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222138</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">222655</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">26</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Tinsukia</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">0374</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2331572</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2330576</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">2333310</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">27</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">D.C. Udalguri</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">03711</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">224433</td>
                                    <td bgcolor="#FFFFFF" class="TextMain_subpage">224281</td>
									<td bgcolor="#FFFFFF" class="TextMain_subpage">&nbsp;</td>
                                  </tr>
							      </tbody>
							    </table>
  </body>
  </html>
