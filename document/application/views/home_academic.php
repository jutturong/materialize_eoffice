<script type="text/javascript">
   $(document).ready(function(){
       //$('.collapsible').collapsible();
       // $(".button-collapse").sideNav();
  });
  
  
 function dia_delete2(id)
    {
          $(document).ready(function()
          {
                    //    $('.modal').modal();
                   //  $('#modal_delete').modal('open');
                 //   $('#modal_delete1').modal('open');
                  Materialize.toast('Delete function', 1000, 'rounded' ,function()
                    {
                          //alert(id);
                          var  r=confirm("คุณต้องการลบข้อมูลหรือไม่");
                          if(r==true){
                                //alert(id);
                                window.location.assign("<?=base_url()?>index.php/welcome/del_main_academic/" + id + "/");
                                
                                
                          }
                          else
                          {
                               //  alert(id);
                               
                          }
                        
                    });
          });
    }

</script>


<br/>
<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons"  onclick="main_academic()">forward_5</i></a>
<br/>
<br/>

<?php
              foreach($query->result() as $row)
              {
                  $id_main_academic=$row->id_main_academic;
                  
                  $id_firstname_academic=$row->id_firstname_academic;
                  
                  $firstname_academic=$row->firstname_academic;
                  $lastname_academic=$row->lastname_academic;
                  
                  $detail_academic_activities=$row->detail_academic_activities;
                  
                  $id_activities=$row->id_activities;
                  $begin_date=$row->begin_date;
                  $end_date=$row->end_date;
                  $title=$row->title;
                  $place=$row->place;
                  
                  $detail=$row->detail;
                  $expenses=$row->expenses;
                  $borrow=$row->borrow;
                  $note=$row->note;
                  
 ?>




<ul class="collection">
    <!--
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    -->
    <li class="collection-item avatar">
        
        <i class="material-icons circle" onclick="update_academic(<?=$id_main_academic?>)">folder</i>
      
      
      <span class="title"><?=$firstname_academic.nbs(5).$lastname_academic?></span>
      <p>
          กิจกรรม : <?=$detail_academic_activities?>
      </p>
      <p>
          
          
          
          ตั้งแต่ - ถึง :   <?php  echo  nbs().$begin_date.nbs(5).$end_date;  ?>       
          <br>
           หัวข้อ : <?=$title?>
      </p>
      <p>
           สถานที่ : <?=$place?>
          
      </p>
      
          <p>
           สถานที่ : <?=$place?>
          
      </p>
      
       <p>
           รายละเอียด : <?=$detail?>
          
      </p>
      
       <p>
           ค่าใช้จ่าย : <?=$expenses?>
          
      </p>
      
       <p>
           เงินยืม : <?=$borrow?>
          
      </p>
      
      <p>
           หมายเหตุ : <?=$note?>
          
      </p>
      
      
      <a href="#!"  onclick= "dia_delete2(<?=$id_main_academic?>)"  class="secondary-content"><i class="material-icons">power_settings_new</i></a>
    </li>
    <!--
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    -->
  </ul>
<?php
              }
?>