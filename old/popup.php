
<!DOCTYPE html>
<html class=''>
<head>
<script src='console_runner.js'></script>
<script src='events_runner.js'></script>
<script src='css_live_reload_init.js'></script>
<meta charset='UTF-8'>
<meta name="robots" content="noindex">
<link rel="canonical" href="https://codepen.io/anon/pen/KvEjdN" />

<script>
function redirect_page(to)
{
  var to_page=to;
  window.open(to_page,"fulscreen=yes");
}

function launchIntoFullscreen(element) {
	//alert("oi");
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
}
function exitFullscreen() {
  if(document.exitFullscreen) {
    document.exitFullscreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
}
</script>
<style class="cp-pen-styles">
@import url(https://fonts.googleapis.com/css?family=Noto+Sans);

{
	margin: 0;
	padding: 0;
}
#container {
  background-color: #009473;
  overflow: hidden;

}

#inner {
  overflow: hidden;
  width: 2000px;
}


.child {
  float: left;
  border:2px;
  border-color: red;
  height: 33vh;
  width: 32.55vw;
  background-color:#009473;

  border:1px solid #CCC;

      box-shadow: 0 0 5px -1px rgba(0,0,0,0.2);
      cursor:pointer;


      padding: 5px;
      text-align: center;

}

.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
.row{
  text-align:center;

}
#close {
   line-height: 12px;
   width: 25px;
   font-size: 8pt;
   font-family: tahoma;
   margin-top: 1px;
   margin-right: 2px;
   position:absolute;
   top:0;
   right:0;
}
#wrap {
	position: absolute;
	top: 0; left: 0; right: 0; bottom: 0;
	background-color: #333;
	overflow: hidden;
}

#popup {
  position: fixed;
   width: 100%;
   height: 100%;
   left: 0;
   top: 0;
   background: rgba(51,51,51,0.7);

}

.piece {
	background: rgba(95,144,222,0.5);
	float: left;
}

#popup h1 {
	position: absolute;
	text-align: center;
	width: 100%;
	height: 40px;
	top: 50%; margin-top: -20px;
	font-family: 'Noto Sans', sans-serif;
	color: #ccc;
}

.reverse {
	position: absolute;
	top: 30px;
	left: 50%;
	margin-left: -30px;
	font-family: 'Noto Sans', sans-serif;
	color: #ccc;
	cursor: pointer;

}

</style>
</head>
<body>
<div id="wrap">

  <div style="height:100vh;" onclick="launchIntoFullscreen(document.documentElement);" >
  <div class="topright" onclick="exitFullscreen();"><img id="close" src="image/close.png" /></div>

  <div id="container">
    <div id="inner">

      <div class="child" onclick="redirect_page('construction.php');"><img src="./image/parliament.png" alt="" style="width: 100%; height: 100%;object-fit: contain;"></div>
      <div class="child"><img src="./image/weather.png" alt="" style="width: 100%; height: 100%;object-fit: contain;"></div>
  <div class="child" ><img src="./image/hospital.png" alt="" style="width: 100%; height: 100%;object-fit: contain;"></div>
    </div>
    <div id="inner">
      <div class="child"><img src="./image/officials.png" alt="" style="width: 100%; height: 100%;object-fit: contain;"></div>

      <div class="child"><img src="./image/disaster.png" alt="" style="width: 100%; height: 100%;object-fit: contain;"></div>
      <div class="child"><img src="./image/market.png" alt="" style="width: 100%; height: 100%;object-fit: contain;"></div>

    </div>
    <div id="inner">
      <div class="child"><img src="./image/agriculture.png" alt="" style="width: 100%; height: 100%;object-fit: contain;"></div>
        <div class="child"><img src="./image/news.png" alt="" style="width: 100%; height: 100%;object-fit: contain;"></div>
          <div class="child"><img src="./image/skill.png" alt="" style="width: 100%; height: 100%;object-fit: contain;"></div>

    </div>
  </div>


  </div>

  <div id="popup">
    <h1>VICTech</h1>
  </div>
</div>


<script src='stopExecutionOnTimeout.js'></script>
<script src='jquery.min.js'></script>
<script src='TweenMax.min.js'></script>
<script>
var height=screen.height;
var width = screen.width;
$("popup").css('width', Math.round(width)+'px');
$("popup").css('height', Math.round(height)+'px');
  // $("popup").css('z-index', -10);

var pieces = 200,
    speed = 1,
    pieceW =0.1*width ,
    pieceH =0.1*height;


for (var i = pieces - 1; i >= 0; i--) {if (window.CP.shouldStopExecution(1)){break;}
  $('#popup').prepend('<div class="piece" style="width:'+pieceW+'px; height:'+pieceH+'px"></div>');
}
window.CP.exitedLoop(1);
;

function breakGlass(from){
  if (from === "reverse"){
    $('.piece').each(function(){
      TweenLite.to($(this), speed, {x:0, y:0, rotationX:0, rotationY:0, opacity: 1, z: 0});
      TweenLite.to($('#popup h1'),0.2,{opacity:1, delay: speed});
    });
    return;
  }

  if(!from){
    TweenLite.to($('#popup h1'),0.2,{opacity:0});
  } else {
    TweenLite.from($('#popup h1'),0.5,{opacity:0, delay: speed});
  }

  $('.piece').each(function(){
    var distX = getRandomArbitrary(-250, 250),
        distY = getRandomArbitrary(-250, 250),
        rotY  = getRandomArbitrary(-720, 720),
        rotX  = getRandomArbitrary(-720, 720),
        z = getRandomArbitrary(-500, 500);

    if(!from){
      TweenLite.to($(this), speed, {x:distX, y:distY, rotationX:rotX, rotationY:rotY, opacity: 0, z: z});
    } else {
      TweenLite.from($(this), speed, {x:distX, y:distY, rotationX:rotX, rotationY:rotY, opacity: 0, z: z});
    }
  });
}

function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}


$('.piece, h1').click(function(){
  breakGlass();
});



//# sourceURL=pen.js
</script>
</body></html>
