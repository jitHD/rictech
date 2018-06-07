
      <div class="col-12 index">
        <h1>RICTech: Common Ailments</h1>
        <h4></h4>
        <!--What is RICTech -->

      </div>
      <div class="col-1 empty"></div>
      <div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
      <div class="col-3 empty"></div>
      <div class="col-2 empty" ></div>
      <div class="col-3 empty"></div>
      <div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
      <div class="col-1 empty"></div>

      <div class="col-12 common_ailments">

        <table>
          <thead>
            <th id='sickness_h'>Sickness: <input type="text" name="sickness" id="sickness_name" onkeyup="loadsickness('sickness_name');"></th>
            <th id='symptoms_h'>Symptoms: <input type="text" name="symptom" id="symptoms" onkeyup="loadsickness('symptoms');"></th>
            <th id='best_practice_h'>Best Practices</th>
          </thead>
          <tbody class="table-hover" id="sickness_info">

          </tbody>
        </table>
      </div>
