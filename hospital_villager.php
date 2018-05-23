
      <div class="col-12 t_center t_white heading">
        <h1>RICTech</h1>
        <h4>Village Information and Communication Technology</h4>

      </div>
      <div class="col-1"></div>
      <div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div>
      <div class="col-3"></div><div class="col-2" ></div>
      <div class="col-3"></div>
      <div class="col-1 button t_center" onclick="loadPage('index.php')">
        <h4><b>Home</b></h4></div>
        <div class="col-1"></div>

        <div class="col-6 what t_center" onclick="setPresent('hospital_villager.php');loadPage('villager_login.php');">
          <h2>ONLINE HELP</h2>
          <img id="emergency" src="image/online.png">

        </div>

        <div class="col-6 how t_center" onclick="setPresent('hospital_villager.php');loadPage('hospital_nearby_hospital.php')">
            <h2>NEARBY HOSPITALS</h2>
            <img id="ambulance" src="image/nearby_hospital.png">
        </div>


        <div class="col-6 what t_center" onclick="setPresent('hospital_villager.php');loadPage('hospital_ambulance_request.php')">
              <h2>AMBULANCE REQUEST</h2>
            <img id="ailments" src="image/ambulance.png">

        </div>

        <div class="col-6 how t_center" onclick="setPresent('hospital_villager.php');loadPage('hospital_common_ailments.php')">
            <h2>COMMON AILMENTS</h2>
            <img id="practices" src="image/common_ailments.png">
          </div>
        </div>
    
