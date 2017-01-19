<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function  test()
        {
             echo "testing  user_model";
        }
        
        public  function  authenlogin() // check login system
        {
            //  if(    $this->user_model->authenlogin() == 1 )
                     $model_us=$this->session->userdata("sess_us");
                 //echo "<br>";
                    $model_ps = $this->session->userdata("sess_ps");
                 //echo  "<br>";
                   $model_per=$this->session->userdata("sess_per");
                 //echo "<br>";
                    $model_login = $this->session->userdata("sess_login");
                 //echo "<br>";
                 
                 
                 if( $model_login  == 1  &&   $model_us != ""    &&  $model_ps  != ""   &&    $model_per >= 1     )
                 {
                         return  1;
                 }
                 else
                 {
                     //redirect("welcome/err_system");
                        $this->user_model->logout();          
                 }
               
                   
        }
        
        public function  err_model()
        {
            //http://192.168.2.112/document/index.php/welcome/err_system
                      echo "<h1>Error: 404 Not Found</h1>";
                      //echo "<br>";
                      echo  "<h4>Sorry, the requested URL ".base_url()."<h4>";
        }
        
        public function  logout() //ปิดออกจากระบบ
        {
            //   $this->user_model->logout();
                  $sess_data=array(
                                   "sess_us"=>"",
                                   "sess_ps"=>"",
                                   "sess_per"=> "",  
                                    "sess_login"=>0, 
                             );
                  
                  $this->session->unset_userdata($sess_data);
                  $this->session->sess_destroy();
                  
                 // redirect("welcome/index/");
        }
        
        public  function tb_main1($id,$doc)  // query ตารางหลัก
        {
            
            if( $id > 0 )
              {
                 //  echo "T";
                   $tb="tb_main1";
                  
                   
                   $this->db->order_by("id_main1","DESC");
                   
                   return  $this->db->get_where($tb,array("type_record"=>$id,"type_document"=>$doc),10);
              }
    
        }
        
       // public function count_id($type_document,$type_record)
        public function count_id($type_record,$type_document)
        {
            $tb="tb_main1";
         //   $type_document=1; //หนังสือรับ
          //  $type_record=1; //มูลนิธิตะวันฉาย
            $q=$this->db->get_where($tb,array("type_document"=>$type_document,"type_record"=>$type_record));
          //  return  $q->num_rows();
            $number=$q->num_rows();
            $number +=1;
            //$number=1;
                   if(     $number == 0  )
                     {
                           $number_add = "0001";
                     }
                   else     if(     $number == 1  )
                     {
                           $number_add = "0002";
                     } 
                   else   if(  strlen($number) ==1   )
                     {
                           $number_add = "000".$number;
                     }
                    else if(  strlen($number) ==2   )
                     {
                           $number_add= "00".$number;
                     } 
                      else if(  strlen($number) ==3   )
                     {
                          $number_add= "0".$number;
                     } 
                     else
                     {
                         //echo $id;
                          $number_add;
                     }
             return $number_add;
            //return     $number+1;
        }
        
        
      public   function  date_thai_cut($m)
     {
         switch ($m)
         {
                case 1:
             {
             return "ม.ค.";
                 break;
             }
                 case 2:
             {
                 return "ก.พ.";
                     break;
             }
                  case 3:
             {
             return "มี.ค.";
                   break;
             }
                  case 4:
             {
             return "เม.ย.";
                   break;
             }
                 case 5:
             {
             return "พ.ค.";
                   break;
             }
                  case 6:
             {
             return "มิ.ย.";
                   break;
             }
                  case 7:
             {
             return "ก.ค.";
                   break;
             }
                   case 8:
             {
             return "ส.ค.";
                   break;
             }
                   case 9:
             {
             return "ก.ย.";
                   break;
             }
                    case 10:
             {
             return "ต.ค.";
                   break;
             }
                    case 11:
             {
             return "พ.ย.";
                   break;
             }
                   case 12:
             {
             return "ธ.ค.";
                   break;
             }
         }
     }

//------- ปี พ.ศ. ไทย     
public  function thai_year($y)
 {
     
                return   $y+543;
 }
 
 
 function  show_table() //แสดง รายละเอียดหลังจากทำการบันทึกข้อมูลแล้ว
 {
     
     
      /*
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
        
        <?php
          // public function  subtable11()//table หนังสือ รับ หนังสือ ส่ง มูลนิธิตะวันฉายฯ
             foreach($query2->result() as $rows)
                 {
                    ?>
        <tr>
                     <td>
                   <?php
                   echo  $rows->registration;
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
       * 
       */
  }
  
  
  function  db_select_academic() //  table  ชื่อ นามสกุล กิจกรรมทางวิชาการ
  {
                $tb="tb_academic";
                $q=$this->db->get($tb);
                foreach($q->result() as $row)
                    {
                        $rows=$row;
                        
                    }
                 return   json_encode($rows);
                    
  }
  
  function update_select_academic($id)
  {
                if( $id > 0 )
                {
                        $tb="tb_academic";
                        $q=$this->db->get_where($tb,array("id_academic"=>$id));
                        $row=$q->row();
                        $id_academic=$row->id_academic;
                       $firstname_academic=$row->firstname_academic;
                       $lastname_academic=$row->lastname_academic;
                       echo   "<option value=\"$id_academic\"  selected>".$firstname_academic.nbs(3).$lastname_academic."</option>";
                     
                       /*
                       $q2=$this->db->where_not_in($tb,array("id_academic"=>$id));
                       foreach($q2->result() as $row)
                       {
                                             $id_academic=$row->id_academic;
                                              $firstname_academic=$row->firstname_academic;
                                              $lastname_academic=$row->lastname_academic;
                                              echo "<option value=\"$id_academic\">$firstname_academic  $lastname_academic</option>";
                       }
                       */
                       
                         $this->db->where_not_in(array("id_academic"=>$id));
                         $q2=$this->db->get($tb);
                         foreach($q2->result() as $row)
                       {
                                             $id_academic=$row->id_academic;
                                              $firstname_academic=$row->firstname_academic;
                                              $lastname_academic=$row->lastname_academic;
                                              echo "<option value=\"$id_academic\">$firstname_academic  $lastname_academic</option>";
                       }
                       
                }
  }
  function  select_academic() //ชื่อ นามสกุล กิจกรรมทางวิชาการ
  {
                /*
                                          <option value="1">บวรศิลป์  เชาว์ชื่น</option>
                                          
                                          <option value="2">ไชยวิทย์  ธนไพศาล</option>
                                          
                                           <option value="3">ปรารถนา  เชาว์ชื่น</option>
                                           
                                          <option value="4">สมศักดิ์  กิจสหวงศ์</option>
                                          
                                          <option value="5">เบญจมาศ  พระธานี</option> 
                                          
                                          <option value="6">จารุณี  รัตนยาติกุล</option>
                                          
                                          <option value="7">นิรมล  พัจนสุนทร</option>
                                          
                                          <option value="8">รัตนา  ดวงฤดีสวัสดิ์</option>
                                          
                                           <option value="9">สุธีรา  ประดับวงษ์</option>
                                           
                                          <option value="10">กมลวรรณ  เจนวิถีสุข</option>
                                          
                                           <option value="11">พลากร  สุรกุลประภา</option>
                                           
                                          <option value="12">ถวัลย์วงค์  รัตนสิริ</option>
                                          
                                           <option value="13">วิชัย  ชี้เจริญ</option>
                                           
                                           <option value="14">Keith  Godfrey</option>
                                           
                                           <option value="15">ผกาพรรณ  เกียรติชูสกุล</option>
                                           
                                           <option value="16">ศิรินารถ  ศรีกาญจนเพริศ</option>
                                           
                                           <option value="17">ธีระพร  รัตนาเอนกชัย</option>
                                           
                                           <option value="18">กฤษณา  เลิศสุขประเสริฐ</option>
                                           
                                           <option value="19">วิมลรัตน์  กฤษณะประกรกิจ</option>
                                           
                                           <option value="20">สุชาติ  อารีมิตร</option>
                                           
                                           <option value="21">มณฑล  เมฆอนันต์ธวัช</option>
                                           
                                           <option value="22">สงวนศักดิ์  ธนาวิรัตนานิจ</option>
                                           
                                           <option value="23">สุปราณี  เทวินบุรานุวงศ์</option>
                                           
                                           <option value="24">พรรณรัตน์  มณีรัตนรังษี</option>
                                           
                                             <option value="25">อรอุมา  อังวราวงศ์</option>
                                           
                                            <option value="26">มนเทียร  มโนสุดประสิทธิ์</option>
                                            
                                            <option value="27">วรัญญู  คงกันกง</option>

                                              <option value="28">ดาราวรรณ  อักษรวรรณ</option>
                                              
                                               <option value="29">รุ่งทิวา  รินทรานุรักษ์</option>
                                               
                                                <option value="30">ดวงใจ  สุคนธมาน</option>
                                                
                                               <option value="31">เบญจพร  นิตินาวาการ</option>
              */
                             $tb="tb_academic";
                             $q=$this->db->get($tb);
                              foreach($q->result() as $row)    
                                          {
                                              $id_academic=$row->id_academic;
                                              $firstname_academic=$row->firstname_academic;
                                              $lastname_academic=$row->lastname_academic;
                                              echo "<option value=\"$id_academic\">$firstname_academic  $lastname_academic</option>";
                                          }
                                          
                                          
  }
  
  
   function update_select_activities($id)
  {
                if( $id > 0 )
                {
                         $tb="tb_academic_activities";
                        $q=$this->db->get_where($tb,array("id_academic_activities"=>$id));
                        $row=$q->row();
                        
                    $id_academic_activities=$row->id_academic_activities;
                    $detail_academic_activities=$row->detail_academic_activities;
                    echo "<option value=\"$id_academic_activities\"  selected >$detail_academic_activities</option>";
                    

                         $this->db->where_not_in(array("id_academic_activities"=>$id));
                         $q2=$this->db->get($tb);
                         foreach($q2->result() as $row)
                       {
                                 $id_academic_activities=$row->id_academic_activities;
                                 $detail_academic_activities=$row->detail_academic_activities;
                                 echo "<option value=\"$id_academic_activities\">$detail_academic_activities</option>";
                       }
                       
                       
                }
  }
  
  function  select_activities() // select  กิจกรรมทางวิชาการ
  {
     
                /*
                                     <option value="1">วิทยากรในประเทศ</option>
                                     <option value="2">วิทยากรต่างประเทศ</option>
                                     <option value="3">ประชุมวิชาการในประเทศ</option>
                                     <option value="4">ประชุมวิชาการต่างประเทศ</option>
                                     <option value="5">ประชุมอื่นๆ</option>
                                     <option value="6">อบรม/ดูงานในประเทศ</option>
                                     <option value="7">อบรม/ดูงานต่างประเทศ</option>
                                     <option value="8">บริการวิชาการ</option>
                                     <option value="9">ศิลปวัฒนธรรม</option>
                 * 
                 */
                //    tb_academic_activities
                $tb="tb_academic_activities";
                $q=$this->db->get($tb);
                foreach($q->result()as $row)
                {
                    $id_academic_activities=$row->id_academic_activities;
                    $detail_academic_activities=$row->detail_academic_activities;
                    echo "<option value=\"$id_academic_activities\">$detail_academic_activities</option>";
                }
                                           
  }
  
  function call_all_page($tb,$limit) //แสดงการแบ่งหน้า
  {
                       //  $tb="tb_main_academic";
                       //  $limit=2;
                         
                         $q=$this->db->get($tb);
                         $all_rows=  $q->num_rows();
                
                          
                               $call=$all_rows/$limit;
                              $max_page=round($call,0);
                             // br();
                              
                        
                              
                           echo     "<ul class=\"pagination\">";
                           echo    "<li class=\"disabled\"><a href=\"#!\"  onclick=\"page_main_academic(0)\" ><i class=\"material-icons\">chevron_left</i></a></li>";         
                                       
                        for($i=0;$i<=$call;$i++)
                        {
                                 $page_plus= $i+1;                     
/*
    
   
  
    <li class="waves-effect"><a href="#"  onclick="page_main_academic(3)">3</a></li>
    <li class="waves-effect"><a href="#"  onclick="page_main_academic(4)">4</a></li>
    <li class="waves-effect"><a href="#"   onclick="page_main_academic(5)">5</a></li>
    
*/
                              // echo  "<li class=\"active\"><a href=\"#\"  onclick=\"page_main_academic(".$page_plus.")\">1</a></li>";
                                 if(  $page_plus == 1  )
                                 {
                                         echo     "<li class=\"active\"><a href=\"#\"   onclick=\"page_main_academic(".$page_plus.")\">".$page_plus."</a></li>";
                                 }
                                 else
                                 {
                                          echo     "<li class=\"waves-effect\"><a href=\"#\"   onclick=\"page_main_academic(".$page_plus.")\">".$page_plus."</a></li>";
                                 }
         
                        }
                        echo "<li class=\"waves-effect\"><a href=\"#!\"  onclick=\"page_main_academic(".$max_page.")\"  ><i class=\"material-icons\">chevron_right</i></a></li>";
                        echo   "</ul>";
  }
  
        
}



