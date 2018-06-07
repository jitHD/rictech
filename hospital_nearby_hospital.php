
    <div class="col-12 index" >
      <h1>RICTech: Nearby Hospitals</h1>
    </div>
    <div class="col-1 empty"></div>
    <div class="col-1 button button1" onclick="goBack();">
      <h4><b>Back</b></h4>
    </div>
    <div class="col-3 empty"></div>
    <div class="col-2 empty" ></div>
    <div class="col-3 empty"></div>
    <div class="col-1 button button1" onclick="loadPage('index.php')">
      <h4><b>Home</b></h4>
    </div>
    <div class="col-1 empty"></div>

    <div class="col-12 near_hospitals">

    <table>
      <thead>
       <th id="h_name">Hospital Name<br><input id="name" type="text" name="name" onkeyup="loadhospital('name');"></td>
       <td id="h_phone">Phone<br><input id='phone' type='number' name='phone' onkeyup="loadhospital('phone');"></td>
       <td id="h_address">Full Address<br><input id="address" type="text" name="address" onkeyup="loadhospital('address');"></td>
       <td id="h_pin">PIN Code<br><input id="pin" type="number" name="pin" onkeyup="loadhospital('pin');"></td>
       </tr>
     </thead>


	<tbody id="display_info" >

	</tbody>
</table>
    </div>
