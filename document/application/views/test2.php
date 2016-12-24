<!DOCTYPE html>
  <html>
    <head>
      
        <?=$this->load->view("import")?>
      
      
           <meta charset="UTF-8">
           
           
           
      <script type="text/javascript">
         
        function popup1()
        {
             // Materialize.toast('I am a toast!', 4000);// 4000 is the duration of the toast
                // Materialize.toast('แสดงรายการทะเบียนหนังสือรับ', 3000, 'rounded')
                     Materialize.toast('แสดงรายการทะเบียนหนังสือรับ', 3000,'rounded');
              //$(".button-collapse").sideNav();
             
                 //$('#sub11').load("sub11.html");
               
                 $('#sub11').load("index.php/welcome/formsub11");
       }   
       
      
           
      </script>
      
      
    </head>



    <body>



      
      <!--  search 
       <nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
      -->
   
      
      <!-- mobile menu -->
      <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating red" onclick="popup1()"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
        
      
   

      
      
      
      
  <!-- Dropdown Structure -->    
  <ul id="dropdown1" class="dropdown-content">
      
      <li><a href="#!"     onclick=" popup1() "    ><i class="material-icons left">contacts</i>ทะเบียนหนังสือรับ</a></li>
   <li><a href="#!"><i class="material-icons left">perm_identity</i> ออกรายงาน</a></li>
    <li><a href="#!"><i class="material-icons left">search</i>ค้นหาหนังสือรับ</a></li>
    
  <li class="divider"></li>
  <li><a href="#!"><i class="material-icons left">contacts</i>ทะเบียนหนังสือส่ง</a></li>
   <li><a href="#!"> <i class="material-icons left">perm_identity</i> ออกรายงาน</a></li>
    <li><a href="#!"><i class="material-icons left">search</i>ค้นหาหนังสือส่ง</a></li>
   <li class="divider"></li>
   <li class="divider"></li>
   

</ul>
  
   <ul id="dropdown2" class="dropdown-content">
      
        <li><a href="#!"    ><i class="material-icons left">contacts</i>ทะเบียนหนังสือรับ</a></li>
   <li><a href="#!"><i class="material-icons left">perm_identity</i> ออกรายงาน</a></li>
    <li><a href="#!"><i class="material-icons left">search</i>ค้นหาหนังสือรับ</a></li>
    
  <li class="divider"></li>
  <li><a href="#!"><i class="material-icons left">contacts</i>ทะเบียนหนังสือส่ง</a></li>
   <li><a href="#!"> <i class="material-icons left">perm_identity</i> ออกรายงาน</a></li>
    <li><a href="#!"><i class="material-icons left">search</i>ค้นหาหนังสือส่ง</a></li>
   <li class="divider"></li>
   <li class="divider"></li>
  
   </ul>
  
  
     <ul id="dropdown3" class="dropdown-content">
      
        <li><a href="#!"><i class="material-icons left">contacts</i>ทะเบียนหนังสือรับ</a></li>
   <li><a href="#!"><i class="material-icons left">perm_identity</i> ออกรายงาน</a></li>
    <li><a href="#!"><i class="material-icons left">search</i>ค้นหาหนังสือรับ</a></li>
    
  <li class="divider"></li>
  <li><a href="#!"><i class="material-icons left">contacts</i>ทะเบียนหนังสือส่ง</a></li>
   <li><a href="#!"> <i class="material-icons left">perm_identity</i> ออกรายงาน</a></li>
    <li><a href="#!"><i class="material-icons left">search</i>ค้นหาหนังสือส่ง</a></li>
   <li class="divider"></li>
   <li class="divider"></li>
  
   </ul>
   
   
      <!--  mobile menu -->  
   <!--   
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
        -->  
        
        

 <nav>
    <div class="nav-wrapper">
      <!--  
      <a href="#!" class="brand-logo">Logo</a>
      -->
      
      <!--
      <ul class="right hide-on-med-and-down">
      -->
      <ul class="nav-wrapper">
      
        
         <li>
             <a class="dropdown-button" href="#!"     data-activates="dropdown1"><i class="material-icons left">view_week</i> มูลนิธิตะวันฉายฯ<i class="material-icons right">arrow_drop_down</i></a>
         </li>
          
         <li>
             <a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons left">view_week</i> ศูนย์การดูแลผู้ป่วยปากแหว่งเพดานโหว่ฯ<i class="material-icons right">arrow_drop_down</i></a>
         </li>
         
          <li>
             <a class="dropdown-button" href="#!" data-activates="dropdown3"><i class="material-icons left">view_week</i> ศูนย์วิจัยผู้ป่วยปากแหว่งเพดานโหว่ฯ<i class="material-icons right">arrow_drop_down</i></a>
         </li>
         
         
         <li><a href="#"><i class="material-icons left">settings_power</i>ออกจากระบบ</a></li>
         
         
         <!--
        <li>
            <a href="sass.html"><i class="material-icons left">search</i>Link with Left Icon</a>
        </li>
        
        <li>
            <a href="badges.html"><i class="material-icons right">view_module</i>Link with Right Icon</a>
        </li>
         -->
        
      
      
      </ul>
    </div>
  </nav>
        



  <span id="sub11"></span>





        


  



    </body>
  </html>