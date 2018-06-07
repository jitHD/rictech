
        <div class="col-1 empty"></div>
        <div class="col-1 button button1" onclick="goBack();"><h4><b>Back</b></h4></div>
        <div class="col-3 empty"></div>
        <div class="col-2 empty" ></div>
        <div class="col-3 empty"></div>
        <div class="col-1 button button1" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div><div class="col-1"></div>
        <div class="col-12 schemes">
          <br />

                      <table id="schemes">
                        <thead>

                            <th id="scheme1"><center>Scheme</center> <br><input type="text" name="scheme" id="scheme" placeholder='Scheme Name' onkeyup="loadscheme('scheme');"></th>
                            <th id="shceme2"><center>Ministry</center> <br><input type="text" name="ministry" id="ministry" placeholder="Ministry" onkeyup="loadscheme('ministry');"></th>
                            <th id="scheme3"><center>Sector</center> <br><input type="text" name="sector" id="sector" placeholder="Sector" onkeyup="loadscheme('sector');"></th>
                            <th id="scheme4"><center>Provision</center> <br><input type="text" name="provision" id="provision" placeholder="Provison" onkeyup="loadscheme('provision');"></th>

                        </thead>
                        <tbody id="schemes_info">


                        </tbody>
                      </table>

        </div>
