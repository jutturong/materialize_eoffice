<script type="text/javascript">

  $(document).ready(function(){
    $('ul.tabs').tabs();
    
    
  });


/*
 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
       // $('#modal_table11').modal('open');
         $('#modal_table11').modal('open');
  });
  */
  
</script>



<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a   class="active"   href="#test1">ทะเบียนหนังสือรับ</a></li>
        <li class="tab col s3"><a  href="#test2">ทะเบียนหนังสือส่ง</a></li>
        
        <!--
        <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab col s3"><a href="#test4">Test 4</a></li>
        -->
        
      </ul>
    </div>
    <div id="test1" class="col s12">
      
        <table>
        <thead>
          <tr>
              <th data-field="id" >เลขทะเบียนส่ง</th>
              <th data-field="name"  >ที่</th>
              <th data-field="price">ลงวันที่</th>
               <th data-field="price">จาก</th>
               <th data-field="price">ถึง</th>
                 <th data-field="price">เรื่อง</th>
                   <th data-field="price">การปฏิบัติ</th>
                   <th data-field="price">หมายเหตุ</th>
                    <th data-field="price">ใบปะหน้า </th>     
          </tr>
        </thead>

        <tbody>
            
         <!--   
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
                  <td>$0.87</td>
                         <td>$0.87</td>
                          <td>$0.87</td>
                               <td>$0.87</td>
                  
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
                  <td>$0.87</td>
                         <td>$0.87</td>
                          <td>$0.87</td>
                               <td>$0.87</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
            <td>$0.87</td>
            <td>$0.87</td>
             <td>$0.87</td>
                  <td>$0.87</td>
                  
          </tr>
          -->
          
          
          <?php
             foreach($query->result() as $rows)
                 {
                    ?>
          <tr>
        <td>
                   <?php
                     $id=$rows->id_main1;
                   //  $id=10;
                  //   $id=100;
                     if(  strlen($id) ==1   )
                     {
                      echo "000".$id;
                     }
                    else if(  strlen($id) ==2   )
                     {
                      echo "00".$id;
                     } 
                      else if(  strlen($id) ==3   )
                     {
                      echo "0".$id;
                     } 
                     else
                     {
                         echo $id;
                     }
                   ?>
                       

        </td>
        <td>
            <?php  echo $rows->at; ?>
        </td>
        <td>
            <?php  echo $rows->date;  ?>
        </td> 
          <td>
            <?php  echo $rows->from;  ?>
        </td> 
        <td>
            <?php  echo $rows->to;  ?>
        </td> 
        <td>
            <?php  echo $rows->subject; ?>
        </td>
        <td>
            <?php  echo $rows->practice; ?>
        </td>
        
        <td>
            <?php  echo $rows->note; ?>
        </td>
        <td >
            <?php
              if( strlen($rows->filename) >  0  )
              {
                  ?>
             <a href="<?=base_url()?>upload/<?php  echo  $rows->filename; ?>">  
            <i class="material-icons">system_update_alt</i>
            </a>
                  <?php
              }
            ?>
        </td>
          </tr>
            <?php 
                 }
            ?>
          
          
          
        </tbody>
      </table>
    
    </div>
 
    <!--
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
    -->
    
  </div>







 <!-- Modal Structure  table มูลนิธีตะวันฉาย -->
 <!--
  <div id="modal_table11" class="modal">
    <div class="modal-content">
        

       
       


      
            


      
      
      
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  -->
  <!-- Modal Structure  table มูลนิธีตะวันฉาย -->
  
  
  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>