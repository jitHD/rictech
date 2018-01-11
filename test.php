<html>
<title>
</title>
<head>
<head>

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

  <body>

    <div id="imageFullScreen" class="imageFullScreen" style="width: 700px;height:400px;background-color:blue; center;text-align: center;" >
    <img  id="image" src="<%=imageUrl%>=1" style="max-height: 96%;max-width: 100%;width: 100%;height: 100%">

    <div id="btnCentre" style="text-align: center;">
    <input type="hidden" id="ieCheck" value="false">
    <input type="button" value="Full Screen"  onclick="requestFullScreen('image');" id="showFullScreen" style="max-height: 4%">
    <input type="button" value="Cancel Screen"  onclick="cancelFullscreen();" id="cancelFullScreen" style="display: none;" style="max-height: 4%">
    </div>
    </div>

  </body>
  </html>
