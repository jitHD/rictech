
      <div class="col-12 t_center t_white heading">
        <h1>Common Ailments</h1>
        <h4></h4>
        <!--What is RICTech -->

      </div>
      <div class="col-1"></div>
      <div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div>
      <div class="col-3"></div>
      <div class="col-2" ></div>
      <div class="col-3"></div>
      <div class="col-1 button t_center" onclick="loadPage('index.php')">
      <h4><b>Home</b></h4>
      </div>
     
      <div class="col-12 t_center t_white">
        <br />
        Search By Symptoms: <input type="text" name="symptom" id="symptom" onkeyup="loadsickness();">
        <table style="table-layout:fixed; width:100%;">
          <thead>
           
          </thead>
          <tbody class="table-hover" id="sickness_info">

          </tbody>
        </table>
      </div>
