<div class="col-12 index">
  <h1>RICTech: Officials' Directory</h1>
</div>


      <div class="col-1 empty"></div>
      <div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
      <div class="col-3 empty"></div>
      <div class="col-2 empty" ></div>
      <div class="col-3 empty"></div>
      <div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
      <div class="col-1 empty"></div>


<br/>
<div class="col-12 official_directory">
        <table>
          <thead>
              <th>Name<br><input type="text" name="name" id="name" onkeyup="loadofficial('name');"></th>
              <th>Office<br><input type="text" name="ministry" id="ministry" onkeyup="loadofficial('office');"></th>
              <th>Designation<br><input type="text" name="designation" id="designation" onkeyup="loadofficial('designation');"></th>
              <th>Area<br><input type="text" name="sector" id="sector" onkeyup="loadofficial('area');"></th>
              <th>Details</th>
          </thead>
          <tbody class="table-hover" id="official_info">

          </tbody>
        </table>
</div>
