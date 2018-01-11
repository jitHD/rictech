//sell.php

<script>
$(document).ready(function(){
  $("form#phone_number").submit(function(){

    var id_val = $.("input#phone").val();
    load_data(id_val);

    function load_data(id_val){
      $.ajax({
        url:"sell_authentication.php",
        method:"POST",
        data:{phone:id_val},
        success:function(result)
          {
            $('#loaded_data').html(result);
          }
      });
   }

  });
});

</script>

 <div class="col-12" id="loaded_data">
     <form id="phone_number">
       <table>
         <tr><td>Phone:</td><td> <input type="text" id="phone" name="phone" placeholder="Phone Number"></td></tr>
         <tr><td colspan="2"><input type="submit" name="submit" value="Submit">&nbsp;<input type="reset" value="Reset"></td></tr>
       </table>
     </form>
</div>
