






var pages = ["index.php"];
/* ----------------------- Load Page ------------------------------ */


/* ------------------------ Navigation Present ---------------------- */
function setPresent(present) {
pages.push(present);
};

/* ------------------------ Navigation Back ------------------------- */
function goBack(){
  var xhttp = new XMLHttpRequest();
  present_page = pages.pop();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET",present_page,true);
  xhttp.send();
};

/* ------------------------- Hospital Functions ------------------------- */
function loadhospital(val)
{
  var val=val;
  var load_value=document.getElementById(val).value;

load_data(val,load_value);

function load_data(val,load_value)
 {

  $.ajax({
   url:"./js/loadhospital.php",
   method:"POST",
   data:{val:val,input_val:load_value},
   success:function(data)
   {
    $('#display_info').html(data);
   }
  });
 }

};

/* ------------------------ Hospital Load Sickness ------------------ */
function loadsickness(val)
{
var id=val
var input_value=document.getElementById(id).value;

load_data(id,input_value);

function load_data(id,input_value)
 {

  $.ajax({
   url:"./js/loadsickness.php",
   method:"POST",
   data:{id:id,input_val:input_value},
   success:function(data)
   {
    $('#sickness_info').html(data);
   }
  });
 }

};

/* ------------------------ SCHEMES --------------------------------- */
function loadscheme(val){

  var id_val = val;

  var load_value=document.getElementById(id_val).value;
  load_data(load_value,id_val);

  function load_data(load_value,id_val){
    $.ajax({
      url:"./js/loadschemes.php",
      method:"POST",
      data:{input_val:load_value,input_tab:id_val},
      success:function(result)
        {
          $('#schemes_info').html(result);
        }
    });
 }

};

/*######################## Officials ############################*/

function loadofficial(val){

  var id_val = val;

  var load_value=document.getElementById(id_val).value;
  load_data(load_value,id_val);

  function load_data(load_value,id_val){
    $.ajax({
      url:"./js/loadofficial.php",
      method:"POST",
      data:{input_val:load_value,input_tab:id_val},
      success:function(result)
        {
          $('#official_info').html(result);
        }
    });
 }

};





/*######################### FULL SCREEN #############################*/
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
};
function exitFullscreen() {
  if(document.exitFullscreen) {
    document.exitFullscreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
};
/*###################### FULL SCREEN END #########################*/
