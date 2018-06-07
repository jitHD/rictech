
      <div class="col-12 index">
        <h1>RICTech</h1>
        <h4>Village Information and Communication Technology</h4>
      </div>
      <div class="col-1 empty"></div>
      <div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
      <div class="col-3 empty"></div>
      <div class="col-2 empty" ></div>
      <div class="col-3 empty"></div>
      <div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
        <div class="col-1 empty"></div>
      <div class="col-12 hospital_index">
        <div class="col-6 left">
          <div class="h_index" onclick="setPresent('hospital_villager.php');loadPage('villager_login.php');">
            <h2>ONLINE HELP</h2>
            <img src="image/online.png">
          </div>

          <div class="h_index" onclick="setPresent('hospital_villager.php');loadPage('hospital_nearby_hospital.php')">
            <h2>NEARBY HOSPITALS</h2>
            <img src="image/nearby_hospital.png">
          </div>
        </div>

      <div class="col-6 right">
        <div class="h_index" onclick="setPresent('hospital_villager.php');loadPage('hospital_ambulance_request.php')">
              <h2>AMBULANCE REQUEST</h2>
            <img src="image/ambulance.png">

        </div>

        <div class="h_index" onclick="setPresent('hospital_villager.php');loadPage('hospital_common_ailments.php')">
            <h2>COMMON AILMENTS</h2>
            <img src="image/common_ailments.png">
          </div>
        </div>
