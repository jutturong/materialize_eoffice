<!--  คู่มือการใช้งาน  http://w3widgets.com/responsive-calendar/#presentation   -->

<script type="text/javascript"  >
    $(function(){
                       //sub_calendar1
                     //  $('#sub_calendar1').load("<?=base_url()?>index.php/welcome/table_main_academic");
            });
</script>

<!DOCTYPE html>
<html lang="en">
    
    
  <head>
      
      
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta name="distributor" content="Global" />
    <meta itemprop="contentRating" content="General" />
    <meta name="robots" content="All" />
    <meta name="revisit-after" content="7 days" />
    <meta name="description" content="The source of truly unique and awesome jquery plugins." />
    <meta name="keywords" content="slider, carousel, responsive, swipe, one to one movement, touch devices, jquery, plugin, bootstrap compatible, html5, css3" />
    <meta name="author" content="w3widgets.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    
    
    <!-- Bootstrap -->
    <!--  ลบเนื่องจากทำให้ css ชนกัน
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    -->
    
    
    <!-- Respomsive slider -->
     <link href="<?=base_url()?>responsive-calendar/0.9/css/responsive-calendar.css" rel="stylesheet">
     
  </head>
  
  <br/>
  <br/>
  
  <body>
    <div class="container">
      <!-- Responsive calendar - START -->
    	<div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            
            <!--
            <h4>
                <span data-head-year></span> <span data-head-month></span>
            </h4>
            -->
            
                   <h4>
                            <?=nbs(2)?><?php   echo  date("Y-m-d");    ?><?=nbs(2)?>
                   </h4>
            
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
            
            
        </div>
            
            <hr/>
            
            
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
            
        <div class="days" data-group="days">
          
        </div>
            
      </div>
      
      <!-- Responsive calendar - END -->
      
      
    </div>
      
      
      <!--
    <script src="<?=base_url()?>responsive-calendar/0.9/js/jquery.js"></script>
      -->
    <script src="<?=base_url()?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>responsive-calendar/0.9/js/responsive-calendar.js"></script>
    
    
    <!--
    <script type="text/javascript"> 
      $(document).ready(function () {
            var  sr_time='<?=date("Y-m")?>';
        $(".responsive-calendar").responsiveCalendar({
         // time: '2013-05',
           time: sr_time ,
          events: {
            "2017-01-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2017-02-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2017-02-03":{"number": 1}, 
              "2017-02-04":{"number": 2}, 
              "2017-02-08": {"number": 5, "badgeClass": "badge-warning", "url": "http://www.sanook.com"},
            "2017-03-12": {}}
        });
        
      });
    </script>
    -->
  
    

    
    
    
<script type="text/javascript"> 
          
          
         /*
          $(document).ready(function () {
               var  sr_time='<?=date("Y-m")?>';      
                $(".responsive-calendar").responsiveCalendar({
                   //  time: '2017-02',
           time: sr_time ,
          events:
                  {
                      
            "2017-02-02": {"number": 1, "url": "http://w3widgets.com" , }, 
           "2017-02-03":{"number": 1 , dayClick:function(){ alert('t'); }  }, 
              "2017-02-04":{"number": 2}, 
              "2017-02-08": {"number": 5, "badgeClass": "badge-warning", "url": "http://www.sanook.com"},
           "2017-03-12": {}

                    }

                         });
        });
        */
           
           
                   
         $(document).ready(function () { 
                     var  sr_time='<?=date("Y-m")?>';  
                     $(".responsive-calendar").responsiveCalendar({  
                     //   $("#calendar").responsiveCalendar({   
                         
                                 time: sr_time ,   
                                  left:   'title',
    
                                  events:
                                    {

                            /*
                               "2017-02-01": {"number": 1, "url": "http://w3widgets.com" , }, 
                              "2017-02-02": {"number": 1, "url": "http://w3widgets.com" , }, 
                             "2017-02-03":{"number": 1 , dayClick:function(){ alert('t'); }  }, 
                                "2017-02-04":{"number": 2}, 
                                "2017-02-08": {"number": 5, "badgeClass": "badge-warning", "url": "http://www.sanook.com"},
                             "2017-03-12": {},
                            */ 
                             
                              <?php
                                        $tbrow="tb_main_academic";
                                        foreach($q->result() as $row)
                                        {
                                                 $begin_date=$row->begin_date;
                                                 // echo br();
                                                 $end_date=$row->end_date;
                                                //echo br();
                                                    
                                                    $qn=$this->db->get($tbrow,array("begin_date"=>$begin_date));
                                                    $num_q=  $qn->num_rows();
                                                      ?>
                                                               "<?=$begin_date?>": {"number":  <?=$num_q?>  , "url": "#" ,   },                 
                                                      <?php
                                        }
                                 ?>
                                        

                                      },
                                    
                                      
                    
                      });
                      
                   
              $(".responsive-calendar").click(function()
              {
                  
                 // $(function(){
                      
                        //alert('t'); 
                     //   $('#modal_calendar').modal();
                   
                                    

                //  });
                 
  
  
  
  
               });
                    
                      
         });
  
</script>  
      
        
   
    
     
     
     <!--
     <div id='calendar'></div>
     -->
             
      <div id="modal_calendar" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

     
     
  </body>
  
  
  
</html>