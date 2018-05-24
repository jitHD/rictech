






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
function loadhospital()
{

var pin=document.getElementById("pin_code").value;
load_data(pin);

function load_data(pin_code)
 {

  $.ajax({
   url:"./js/loadhospital.php",
   method:"POST",
   data:{pin_code:pin_code},
   success:function(data)
   {
    $('#display_info').html(data);
   }
  });
 }

};

/* ------------------------ Hospital Load Sickness ------------------ */
function loadsickness()
{

var symptoms=document.getElementById("symptom").value;
load_data(symptoms);

function load_data(symptoms)
 {

  $.ajax({
   url:"./js/loadsickness.php",
   method:"POST",
   data:{symptoms:symptoms},
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
