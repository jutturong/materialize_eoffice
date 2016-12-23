<script type="text/javascript">
    
    
$(function(){
    
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
    
});

  
  
</script>


<!--  form record-->


<!--
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>
    </form>
  </div>
-->




  <div class="row">
    <form class="col s12">
      <div class="row">
          
          
        <div class="input-field col s6">
            
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text"  placeholder="เลขทะเบียนส่ง">
          <label for="icon_prefix">เลขทะเบียนส่ง</label>
          
          
        </div>
          
        <div class="input-field col s6">
            
        <!--  <i class="material-icons prefix">phone</i> -->
            
          <input id="icon_telephone" type="tel"  placeholder="ที่">
          
          <label for="icon_telephone">ที่</label>
          
        </div>
          
            
          <div class="input-field col s6">
            
          <i class="material-icons prefix">assignment</i>
         <!-- <input id="icon_telephone" type="tel" class="validate"> -->
          
          
                   <input type="date"  id="date1" class="datepicker">
        
          
                   <!--
          <label for="date1">ลงวันที่</label>
                   -->
          
        </div>
          
          
      </div>
    </form>
  </div>
        