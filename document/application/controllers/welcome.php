<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Welcome extends CI_Controller
    {

             var  $title="ระบบโปรแกรมงานธุรการ";
             var  $limit=3;
             
                 public function __construct() {
                     
                         
                           parent::__construct();
                          // $this->load->model("user_model");
                          // $this->user_model->test();
                        //  $this->load->helper(array('form', 'url'));
                           $this->load->helper(array('form', 'url'));
                           $this->load->helper('file');
                         //  $this->load->library('encrypt');
                           
                 }
             
             
	public function index()
	{
		//$this->load->view('welcome_message');
                            //    $this->user_model->logout();
                                $data["title"]=$this->title;
                                $this->load->view("test2",$data);
                                
	}
        
                 public  function  homepage()
                 {
                                $data["title"]=$this->title;
                                $this->load->view("test2",$data);
                 }
        
                 public function logout()
                 {
                         $this->user_model->logout();
                         redirect("welcome/index/","refresh");
                 }
          public function checklogin()
          {
                 // echo "T";
                    $us=trim($this->input->get_post("us"));
                   //echo "<br>";
                     $ps=trim($this->input->get_post("ps"));
                   $ps=md5($ps);
                   //echo $ps;
                   //echo "<br>";
                   $tb="tb_user";
                   $query1=$this->db->get_where($tb,array("username"=>$us,"password"=>$ps));
                     $num_rows=$query1->num_rows();
                     $row=$query1->row();
                      
                      //echo $check_per;
                      
                     if( $num_rows == 1    )
                     {
                          //   $query2=$this->db->get_where($tb,array());
                           //  foreach($row->)
                         $check_per=$row->id_permission;  //permission database
                         
                             $sess_data=array(
                                   "sess_us"=>$us,
                                   "sess_ps"=>$ps,
                                   "sess_per"=> $check_per,  
                                    "sess_login"=>1, 
                             );
                            // echo  "login";
                             $this->session->set_userdata($sess_data);
                             $this->session->userdata("sess_login");
                           //  echo "1";   //รหัสผ่านถูกต้อง 
                            
                            
                             /*
                             foreach($query1->$result() as $row() )
                             {
                                    $rows[]=$row;
                             }
                           //  echo json_encode($rows);
                              * 
                              */
                             
                             foreach ( $query1->result() as $row)
                             {
                                   $rows[]=$row;
                             }
                                   header("Content-Type: application/json", true);
                                   echo json_encode($rows);
                             
                             
                     }
                     else{
                                   echo "0";  //รหัสผ่านไม่ถูกต้อง
                     }
                  
                   
          }
          

               public function receive11()
               {
                   if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                             
                             
                             //  $number=$this->user_model->count_id(1,1);
                              
                /*               
                                  //  $id=10;
                               //   $id=100;
                               
                     if(  strlen($number) ==1   )
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
                       
                          $number_add;
                     }
                 
                 */
                         //    $data["number_add"]=$number_add;     
                             $data["number_add"]=$this->user_model->count_id(1,1);
                             $this->load->view("receive11",$data);
                     }
               }
               
                   public function  send11() //ทะเบี่ยนหนังสือส่ง
                {
                    #  index.php/welcome/formsend11
                    if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                            // $this->load->view("sub11",$data);
                            // echo "test";
                           //  $data["number_add"]=$this->user_model->count_id(1,2);
                             $this->load->view("send11",$data);
                     }
                     
                }
                
              
                public function receive21()
               {
                   if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                             //($tb,array("type_document"=>$type_document,"type_record"=>$type_record));
                              
                   //-----------------------------------------------------------            
                   $tb="tb_main1";        
                   $q_n=$this->db->get_where($tb,array("type_record"=>3,"type_document"=>1));
                    $number = $q_n->num_rows()+1;
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
                          $number_add;
                     }
                     $data["number_add"]=$number_add;
                     //-----------------------------------------------------------            
                               
                             $this->load->view("receive21",$data);
                     }
               }
               
               
                public function receive31()
               {
                   if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                             
                             
                  //-----------------------------------------------------------            
                   $tb="tb_main1";        
                   $q_n=$this->db->get_where($tb,array("type_record"=>2,"type_document"=>1));
                    $number = $q_n->num_rows()+1;
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
                          $number_add;
                     }
                     $data["number_add"]=$number_add;
                     //-----------------------------------------------------------   
                             
                             
                             $this->load->view("receive31",$data);
                     }
               }
               
               
                
             public function  send21() //ทะเบี่ยนหนังสือส่ง
                {
                    #  index.php/welcome/formsend11
                    if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                            // $this->load->view("sub11",$data);
                             
                             
                            
                  //-----------------------------------------------------------            
                   $tb="tb_main1";        
                   $q_n=$this->db->get_where($tb,array("type_record"=>3,"type_document"=>2));
                    $number = $q_n->num_rows()+1;
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
                          $number_add;
                     }
                     $data["number_add"]=$number_add;
                     //-----------------------------------------------------------   
                       // $data["number_add"]=$this->user_model->count_id(3,2); 
                     
                     
                               $this->load->view("send21",$data);
                     }
                     
                }
                
                
                public function  send31() //ทะเบี่ยนหนังสือส่ง
                {
                    #  index.php/welcome/formsend11
                    if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                            // $this->load->view("sub11",$data);
                             
                             //    $data["number_add"]=$this->user_model->count_id(2,2); 
                             //-----------------------------------------------------------            
                   $tb="tb_main1";        
                   $q_n=$this->db->get_where($tb,array("type_record"=>2,"type_document"=>2));
                    $number = $q_n->num_rows()+1;
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
                          $number_add;
                     }
                     $data["number_add"]=$number_add;
                     //-----------------------------------------------------------  
                             
                             $this->load->view("send31",$data);
                     }
                     
                }
                
                
               
          
                public function  formsub11()
                {
                     if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                             $this->load->view("sub11",$data);
                     }
                     
                }
                

                
                public function  formsend11() //ทะเบี่ยนหนังสือส่ง
                {
                    #  index.php/welcome/formsend11
                    if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                            // $this->load->view("sub11",$data);
                             $this->load->view("send11",$data);
                     }
                     
                }
                
                
                
                

                 public function  formsend21() //ทะเบี่ยนหนังสือส่ง  ศูนย์การดูแลฯ
                {
                    #  index.php/welcome/formsend11
                    if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                            // $this->load->view("sub11",$data);
                             $this->load->view("send21",$data);
                     }
                     
                }
                
                public function  subtable11()//table หนังสือ รับ หนังสือ ส่ง มูลนิธิตะวันฉายฯ
                {
                    #    index.php/welcome/subtable11/
                     if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                            // $this->load->view("sub11",$data);
                            $data["query"]=$this->user_model->tb_main1("1","1");
                            //   return  $this->db->get_where($tb,array("type_record"=>$id,"type_document"=>$doc));
                         
                            
                            $tb="tb_main1";
                            //$data["query2"]=$this->db->get_where($tb,array("type_document"=>2,"type_record"=>2));
                             $data["query2"]=$this->user_model->tb_main1("1","2");
                            
                            $this->load->view("table11",$data);
                            
                            
                            
                               //1 มูลนิธิตะวันฉายฯ                       
                            ///2	ศูนย์วิจัยผู้่ป่วยปากแหว่งเพดานโหว่ฯ
                            //3 ศูนย์การดูแลผู้ป่วยปากแหว่งเพดานโหว่ฯ
                            
                     }
                    
                }
                
                public function table2() //ศูนย์การดูแล
                {
                     if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                            // $this->load->view("sub11",$data);
                            $data["query"]=$this->user_model->tb_main1("3","1");
                              $this->db->order_by("id_main1","DESC");
                            //   return  $this->db->get_where($tb,array("type_record"=>$id,"type_document"=>$doc));
                          
                            
                            $tb="tb_main1";
                            //$data["query2"]=$this->db->get_where($tb,array("type_document"=>2,"type_record"=>2));
                             $data["query2"]=$this->user_model->tb_main1("3","2");
                            
                            $this->load->view("table2",$data);
                            
                            
                          //1 มูลนิธิตะวันฉายฯ                       
                            ///2	ศูนย์วิจัยผู้่ป่วยปากแหว่งเพดานโหว่ฯ
                            //3 ศูนย์การดูแลผู้ป่วยปากแหว่งเพดานโหว่ฯ    
                            
                            
                     }
                }
                
                 public function table3()  //ศูนย์วิจัย
                {
                     if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                            // $this->load->view("sub11",$data);
                         $tb="tb_main1";
                                
                          //  $data["query"]=$this->user_model->tb_main1("2","1");
                            //   return  $this->db->get_where($tb,array("type_record"=>$id,"type_document"=>$doc));
                          //  $data["query"]=$this->db->get_where($tb,array("type_document"=>2,"type_record"=>1));
                               $data["query"]=$this->user_model->tb_main1("2","1");
                         
                         //   $data["query2"]=$this->db->get_where($tb,array("type_document"=>2,"type_record"=>2));
                            // $data["query2"]=$this->user_model->tb_main1("2","2");
                               $data["query2"]=$this->user_model->tb_main1("2","2");
                            
                            $this->load->view("table2",$data);
                            
                     }
                }
                
                
                public  function inserttable11() //บันทึกหนังสือรับ มูลนิธิตะวันฉาย   $type_document=1;  // 1=หนังสือรับ,2=หนังสือส่ง
                {
                    #   http://localhost/document/index.php/welcome/inserttable1
                    //header("Content-Type: application/json", true);
                      header('Content-Type: text/html; charset=UTF-8');
                     if(    $this->user_model->authenlogin() == 1 )
                     {
                         #-- หนังสือรับ หนังสือเ้ข้า  มูลนิธิตะวันฉายฯ
                       $registration_receive11=trim($this->input->get_post("registration_receive11"));   //เลขทะเบียนส่ง   1
                       //echo "<br>";
                        $at_receive11=trim($this->input->get_post("at_receive11"));  //ที่       2
                     //  echo  "<br>";
                         $date1_receive11=trim($this->input->get_post("date1_receive11")); //ลงวันที่           3
                      // echo  "<br>";
                       $from_receive11=trim($this->input->get_post("from_receive11")); //จาก       4
                      // echo  "<br>";
                       $to_receive11=trim($this->input->get_post("to_receive11"));  //ถึง        5
                     //  echo  "<br>";
                        $subject_receive11=trim($this->input->get_post("subject_receive11"));  //เรื่อง       6
                      // echo  "<br>";
                        $practice_receive11=trim($this->input->get_post("practice_receive11"));  //การปฏฺิบัติ       7
                      // echo  "<br>";
                         $note_receive11=trim($this->input->get_post("note_receive11")); //หมายเหตุ      8
                       //echo  "<br>";
                         
                         
                        $type_record=trim($this->input->get_post("type_record11")); //ประเภทของตารางที่ทำการบันทึก    9
                        
                        $type_document=1;  // 1=หนังสือรับ,2=หนังสือส่ง
                        
                        
                            // print_r($_POST);               
              //------------------------------- upload file-------------------------------------------
                      // print_r($_FILES)  
                          $file1name = $_FILES["file11"]['name'];  // ชื่อของไฟล์      10
                        //echo br();
                        $file1tmp  =$_FILES['file11']["tmp_name"]; // tmp folder
                       // echo br();
                          $file1Type= $_FILES['file11']["type"]; //type of file
                        // echo br();
                          $file1Size= $_FILES['file11']["size"]; //size
                        // echo br();
                            $file1ErrorMsg = $_FILES['file11']["error"]; // 0=false 1=true
                         
                         if( strlen($file1name)   >  0  &&  $file1name != ""  )
                         {

                                         $data=array(
                                             "registration"=>$registration_receive11,
                                             "at"=> $at_receive11,
                                             "date"=>$date1_receive11,
                                             "from"=>$from_receive11,
                                             "to"=> $to_receive11,
                                            "subject"=>$subject_receive11,
                                            "practice"=>$practice_receive11,
                                            "note"=>$note_receive11,
                                            "type_record"=> $type_record,
                                            "filename"=>$file1name, 
                                             "type_document"=>$type_document,
                                         );
                                         
                                         
                                         
                                     $cp=copy($file1tmp ,  "upload/". $file1name );
                                     if( $cp )
                                     {
                                         echo 1;
                                     }
                                     else{
                                         echo 0;
                                     }

                         }
                         else
                         {
                               $data=array(
                                             "registration"=>$registration_receive11,
                                             "at"=> $at_receive11,
                                             "date"=>$date1_receive11,
                                             "from"=>$from_receive11,
                                             "to"=> $to_receive11,
                                            "subject"=>$subject_receive11,
                                            "practice"=>$practice_receive11,
                                            "note"=>$note_receive11,
                                            "type_record"=> $type_record,
                                          //  "filename"=>$file1name, 
                                            "type_document"=>$type_document,
                                         );
                             
                         }

                                           //FROM `tb_main1` 
                                         $tb="tb_main1";
                                         $this->db->insert($tb,$data);
                         
                         
                         
             //------------------------------- upload file-------------------------------------------     
                         
                         
                        redirect("welcome/homepage/insert_success",'refresh');
                         
                         

                     }
                }
                
                
                //----------------form  update  table-------------------------------
                public function update_main()
                {
                    header('Content-Type: text/html; charset=UTF-8');
                     if(    $this->user_model->authenlogin() == 1 )
                     {
                              //print_r($_POST);
                              //echo "<hr>";
                              $id_main1=trim($this->uri->segment(3));                
                            // echo br();
                             if( $id_main1 > 0 )
                             {
                                              
                                          $data["title"]=$this->title;  
                                          $tb="tb_main1";
                                          $query=$this->db->get_where($tb,array("id_main1"=>$id_main1));
                                          $rows= $query->row(); 
                                          
                                          $data["id_main1"]= $rows->id_main1;
                                          $data["registration"]= $rows->registration;
                                          $data["at"]= $rows->at;
                                          $data["date"]= $rows->date;
                                          $data["from"]= $rows->from;
                                          $data["to"]= $rows->to;
                                          $data["subject"]= $rows->subject;
                                          $data["practice"]= $rows->practice;
                                           $data["note"]= $rows->note;
                                          $this->load->view("fr_update",$data);     
                                         
                             }
                     }              
                }
                 //----------------form  update  table in database------------------------------ 
                public function update_tablemain()
                {
                     header('Content-Type: text/html; charset=UTF-8');
                     if(    $this->user_model->authenlogin() == 1 )
                     {
                              //print_r($_POST);
                              //echo "<hr>";
                              /*
                               Array ( [id_main1] => 57
                               *  [registration] => 0002
                               *  [at] => ศธ 0514.1.61.3/ว 3136 
                               * [date1] => 2017-01-10 
                               * [from] => รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี 
                               * [to] => ผู้อำนวยการมูลนิธิตะวันฉายฯ 
                               * [subject] => แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม
                               *  [practice] => 
                               * [note] =>
                               *  [file] => 
                               * [type_record] => ) 
                               */
                  $id_main1= trim($this->input->get_post("id_main1"));   //เลขทะเบียนส่ง   1      
                   // echo "<br>";
                      $registration=trim($this->input->get_post("registration"));   //เลขทะเบียนส่ง   1
                  // echo "<br>";
                 $at=trim($this->input->get_post("at"));  //ที่       2
                 //  echo  "<br>";
                       $date1=trim($this->input->get_post("date1")); //ลงวันที่           3
                  // echo  "<br>";
                     $from=trim($this->input->get_post("from")); //จาก       4
                  // echo  "<br>";
                     $to=trim($this->input->get_post("to"));  //ถึง        5
                 //  echo  "<br>";
                       $subject=trim($this->input->get_post("subject"));  //เรื่อง       6
                  // echo  "<br>";
                     $practice=trim($this->input->get_post("practice"));  //การปฏฺิบัติ       7
                  // echo  "<br>";
                      $note=trim($this->input->get_post("note")); //หมายเหตุ      8
                   //echo  "<br>";     
                   
           
                 //  print_r($_FILES);
                   //echo "<hr>";
                    //------------------------------- upload file-------------------------------------------
                      // print_r($_FILES)  
                       $file1name = $_FILES["file"]['name'];  // ชื่อของไฟล์      10
                   // echo br();
                   $file1tmp  =$_FILES['file']["tmp_name"]; // tmp folder
                   // echo br();
                    $file1Type= $_FILES['file']["type"]; //type of file
                   // echo br();
                       $file1Size= $_FILES['file']["size"]; //size
                  //  echo br();
                      $file1ErrorMsg = $_FILES['file']["error"]; // 0=false 1=true 
                   // echo br();
                   
                   if( strlen($file1name)   >  0  &&  $file1name != ""  )
                         {

                                         $data=array(
                                             "registration"=>$registration,
                                             "at"=> $at,
                                             "date"=>$date1,
                                             "from"=>$from,
                                             "to"=> $to,
                                            "subject"=>$subject,
                                            "practice"=>$practice,
                                            "note"=>$note,
                                           //"type_record"=> $type_record,
                                            "filename"=>$file1name, 
                                           //  "type_document"=>$type_document,
                                         );
                                         
                                         
                                         
                                     $cp=copy($file1tmp ,  "upload/". $file1name );
                                     if( $cp )
                                     {
                                         echo 1;
                                     }
                                     else{
                                         echo 0;
                                     }

                         }
                         else
                         {
                               $data=array(
                                             "registration"=>$registration,
                                             "at"=> $at,
                                             "date"=>$date1,
                                             "from"=>$from,
                                             "to"=> $to,
                                            "subject"=>$subject,
                                            "practice"=>$practice,
                                            "note"=>$note,
                                           // "type_record"=> $type_record,
                                          //  "filename"=>$file1name, 
                                         //   "type_document"=>$type_document,
                                         );
                             
                         }

                     //echo br();    
                      $page=trim($this->input->get_post("page"));
                    // echo br();
                                           //FROM `tb_main1` 
                                         $tb="tb_main1";
                                         $this->db->where("id_main1",$id_main1);
                                         $ck=$this->db->update($tb,$data);
                                         if( $ck )
                                         {
                                           //  echo 1;
                                             
                                       
                                             
                                             
                                         }else
                                         {
                                             //echo 0;
                                         }
                                         

                                              switch ($page)
                                              {
                                                  case 1:
                                                  {
                                                           redirect("welcome/homepage/page1",'refresh');  
                                                           break;
                                                  }
                                                  case 2:
                                                  {
                                                       redirect("welcome/homepage/page2",'refresh');  
                                                       break;
                                                  }
                                                  case 3:
                                                  {
                                                       redirect("welcome/homepage/page3",'refresh');  
                                                       break;
                                                  }
                                              } 
                                         
                                         
                         
                     }
                }
                
                
                
                
                public  function insert_send11()
                        {
                                  header('Content-Type: text/html; charset=UTF-8');
                                   if(    $this->user_model->authenlogin() == 1 )
                                        {
                                                        //    print_r($_POST);
                                                        //    print_r($_FILES); 

                                                      /*
                                                       Array ( [registration_send11] => 0001
                                                       *   [at_send11] => ศธ 0514.1.61.3/ว 3136 
                                                       * [date1_send11] => 17 January, 2017
                                                       *  [from_send11] => รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี 
                                                       * [to_send11] => ผู้อำนวยการมูลนิธิตะวันฉายฯ 
                                                       * [subject_send11] => แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม 
                                                       * [practice_send11] => ทราบ 
                                                       * [note_send11] => ทราบและปฏฺิบัติตาม 
                                                       * [btn_insert11] => ) Array ( [file1] => Array ( [name] => 706408.jpg [type] => image/jpeg [tmp_name] => /tmp/phpxCtITE [error] => 0 [size] => 181330 ) ) 
                                                       */

                                                   //   echo $registration_send11=trim($this->input->get_post("registration_send11"));
                                                   //   echo  br();


                                                        #-- หนังสือรับ หนังสือเ้ข้า  มูลนิธิตะวันฉายฯ
                                                                            $registration_send11=trim($this->input->get_post("registration_send11"));   //เลขทะเบียนส่ง   1
                                                                        // echo "<br>";
                                                                            $at_send11=trim($this->input->get_post("at_send11"));  //ที่       2
                                                                         // echo  "<br>";
                                                                             $date1_send11=trim($this->input->get_post("date1_send11")); //ลงวันที่           3
                                                                         // echo  "<br>";
                                                                            $from_send11=trim($this->input->get_post("from_send11")); //จาก       4
                                                                        //echo  "<br>";
                                                                            $to_send11=trim($this->input->get_post("to_send11"));  //ถึง        5
                                                                        // echo  "<br>";
                                                                            $subject_send11=trim($this->input->get_post("subject_send11"));  //เรื่อง       6
                                                                         // echo  "<br>";
                                                                           $practice_send11=trim($this->input->get_post("practice_send11"));  //การปฏฺิบัติ       7
                                                                          // echo  "<br>";
                                                                            $note_send11=trim($this->input->get_post("note_send11")); //หมายเหตุ      8
                                                                         // echo  "<br>";
                                                                          // <input type="hidden"  id="type_record11"  name="type_record11"  value="1"  /> 
                                                                            $type_record=trim($this->input->get_post("type_record11")); //ประเภทของตารางที่ทำการบันทึก    9
                                                                         //echo  "<br>";
                                                                            $type_document=2;  // 1=หนังสือรับ,2=หนังสือส่ง
                                                                       // echo  "<br>";
                                                                        
                                                                   
                                                                        
                                                                     
                                                                        
                                                                       
                                                                //------------------------------- upload file-------------------------------------------
                                                                                   // print_r($_FILES)  
                                                                                        $file1name = $_FILES["file12"]['name'];  // ชื่อของไฟล์      10  
                                                                                      //echo br();
                                                                                      $file1tmp  =$_FILES['file12']["tmp_name"]; // tmp folder
                                                                                     // echo br();
                                                                                      $file1Type= $_FILES['file12']["type"]; //type of file
                                                                                     // echo br();
                                                                                      $file1Size= $_FILES['file12']["size"]; //size
                                                                                     // echo br();
                                                                                        $file1ErrorMsg = $_FILES['file12']["error"]; // 0=false 1=true
                                                                                     // echo br();
                                                                                      
                                                                                      if( strlen($file1name)   >  0  &&  $file1name != ""  )
                                                                                      {

                                                                                                      $data=array(
                                                                                                          "registration"=>$registration_send11,
                                                                                                          "at"=> $at_send11,
                                                                                                          "date"=>$date1_send11,
                                                                                                          "from"=>$from_send11,
                                                                                                          "to"=> $to_send11,
                                                                                                         "subject"=>$subject_send11,
                                                                                                         "practice"=>$practice_send11,
                                                                                                         "note"=>$note_send11,
                                                                                                         "type_record"=> $type_record,
                                                                                                         "filename"=>$file1name, 
                                                                                                          "type_document"=>$type_document,
                                                                                                      );



                                                                                                  $cp=copy($file1tmp ,  "upload/". $file1name );
                                                                                                  if( $cp )
                                                                                                  {
                                                                                                      //echo 1;
                                                                                                  }
                                                                                                  else{
                                                                                                      //echo 0;
                                                                                                  }

                                                                                      }
                                                                                      else
                                                                                      {
                                                                                            $data=array(
                                                                                                          "registration"=>$registration_send11,
                                                                                                          "at"=> $at_send11,
                                                                                                          "date"=>$date1_send11,
                                                                                                          "from"=>$from_send11,
                                                                                                          "to"=> $to_send11,
                                                                                                         "subject"=>$subject_send11,
                                                                                                         "practice"=>$practice_send11,
                                                                                                         "note"=>$note_send11,
                                                                                                         "type_record"=> $type_record,
                                                                                                       //  "filename"=>$file1name, 
                                                                                                         "type_document"=>$type_document,
                                                                                                      );

                                                                                      }
                                                                                     
                                          $tb="tb_main1";
                                          $this->db->insert($tb,$data);
                                                  
                                       
                                                 redirect("welcome/homepage/insert_success_send21",'refresh');

                                        }
                        }
                        
                        
                 public   function     inserttable21()
                 {
                         header('Content-Type: text/html; charset=UTF-8');
                                   if(    $this->user_model->authenlogin() == 1 )
                                   {
                                        //echo print_r($_POST);  
                                        //echo  "<hr>";
                                        #-- หนังสือรับ หนังสือเ้ข้า  มูลนิธิตะวันฉายฯ
                                                                           $registration_receive21=trim($this->input->get_post("registration_receive21"));   //เลขทะเบียนส่ง   1
                                                                      // echo "<br>";
                                                                         $at_receive21=trim($this->input->get_post("at_receive21"));  //ที่       2
                                                                      // echo  "<br>";
                                                                       $date1_receive21=trim($this->input->get_post("date1_receive21")); //ลงวันที่           3
                                                                     //  echo  "<br>";
                                                                     $from_receive21=trim($this->input->get_post("from_receive21")); //จาก       4
                                                                      // echo  "<br>";
                                                                        $to_receive21=trim($this->input->get_post("to_receive21"));  //ถึง        5
                                                                     //  echo  "<br>";
                                                                       $subject_receive21=trim($this->input->get_post("subject_receive21"));  //เรื่อง       6
                                                                     //  echo  "<br>";
                                                                  $practice_receive21=trim($this->input->get_post("practice_receive21"));  //การปฏฺิบัติ       7
                                                                    //   echo  "<br>";
                                                                     $note_receive21=trim($this->input->get_post("note_receive21")); //หมายเหตุ      8
                                                                      // echo  "<br>";
                                                                          // <input type="hidden"  id="type_record11"  name="type_record11"  value="1"  /> 
                                                                       /*

                                                                                          1 	มูลนิธิตะวันฉายฯ
		                                                      2 	ศูนย์วิจัยผู้่ป่วยปากแหว่งเพดานโหว่ฯ
	                                                      	3 	ศูนย์การดูแลผู้ป่วยปากแหว่งเพดานโหว่ฯ 
                                                                        
                                                                        */
                                                                          $type_record=trim($this->input->get_post("type_record21")); //ประเภทของตารางที่ทำการบันทึก    9
                                                                     //  echo  "<br>";
                                                                            $type_document=1;  // 1=หนังสือรับ,2=หนังสือส่ง
                                                                            
                                                                            
                                                                      //  print_r($_FILES); 
                                                                            
                                                                                        //------------------------------- upload file-------------------------------------------
                                                                                   // print_r($_FILES)  
                                                                                       $file1name = $_FILES["file21"]['name'];  // ชื่อของไฟล์      10  
                                                                                 // echo br();
                                                                              $file1tmp  =$_FILES['file21']["tmp_name"]; // tmp folder
                                                                                 //echo br();
                                                                                    $file1Type= $_FILES['file21']["type"]; //type of file
                                                                                //  echo br();
                                                                                   $file1Size= $_FILES['file21']["size"]; //size
                                                                                 // echo br();
                                                                                   $file1ErrorMsg = $_FILES['file21']["error"]; // 0=false 1=true   
                                                                              //   echo br();
                                                                                 
                                                                                 
                                                                                 
                                                                                 if( strlen($file1name)   >  0  &&  $file1name != ""  )
                                                                                      {

                                                                                                      $data=array(
                                                                                                          "registration"=> $registration_receive21,
                                                                                                          "at"=> $at_receive21,
                                                                                                          "date"=>$date1_receive21,
                                                                                                          "from"=>$from_receive21,
                                                                                                          "to"=> $to_receive21,
                                                                                                         "subject"=>$subject_receive21,
                                                                                                         "practice"=>$practice_receive21,
                                                                                                         "note"=>$note_receive21,
                                                                                                         "type_record"=> $type_record,
                                                                                                         "filename"=>$file1name, 
                                                                                                          "type_document"=>$type_document,
                                                                                                      );



                                                                                                  $cp=copy($file1tmp ,  "upload/". $file1name );
                                                                                                  if( $cp )
                                                                                                  {
                                                                                                      echo 1;
                                                                                                  }
                                                                                                  else{
                                                                                                      echo 0;
                                                                                                  }

                                                                                      }
                                                                                      else
                                                                                      {
                                                                                            $data=array(
                                                                                                          "registration"=>$registration_receive21,
                                                                                                          "at"=> $at_receive21,
                                                                                                          "date"=>$date1_receive21,
                                                                                                          "from"=>$from_receive21,
                                                                                                          "to"=> $to_receive21,
                                                                                                         "subject"=>$subject_receive21,
                                                                                                         "practice"=>$practice_receive21,
                                                                                                         "note"=>$note_receive21,
                                                                                                         "type_record"=> $type_record,
                                                                                                       //  "filename"=>$file1name, 
                                                                                                         "type_document"=>$type_document,
                                                                                                      );

                                                                                      }
                                                                                      
                                         
                                          $tb="tb_main1";
                                          $this->db->insert($tb,$data);
                                          
                                             redirect("welcome/homepage/insert_success_receive21",'refresh');
                                                                       
                                    }  
                 }
                 
                   public   function     inserttable22()
                   {
                          header('Content-Type: text/html; charset=UTF-8');
                                   if(    $this->user_model->authenlogin() == 1 )
                                   {
                                           //print_r($_POST);
                                          // echo "<hr>";
                                          $registration_send21=trim($this->input->get_post("registration_send21"));   //เลขทะเบียนส่ง   1
                                          //echo br();        
                                            $at_send21=trim($this->input->get_post("at_send21"));  //ที่       2
                                         // echo br();      
                                            $date1_send21=trim($this->input->get_post("date1_send21")); //ลงวันที่           3
                                         // echo br();      
                                             $from_send21=trim($this->input->get_post("from_send21")); //จาก       4
                                         // echo br();     
                                           $to_send21=trim($this->input->get_post("to_send21"));  //ถึง        5
                                         // echo br();     
                                            $subject_send21=trim($this->input->get_post("subject_send21"));  //เรื่อง       6
                                         // echo br();     
                                           $practice_send21=trim($this->input->get_post("practice_send21"));  //การปฏฺิบัติ       7
                                        //  echo br();   
                                          $note_send21=trim($this->input->get_post("note_send21")); //หมายเหตุ      8
                                         // echo br();   
                                                                          // <input type="hidden"  id="type_record11"  name="type_record11"  value="1"  /> 
                                                                       /*

                                                                                          1 	มูลนิธิตะวันฉายฯ
		                                                      2 	ศูนย์วิจัยผู้่ป่วยปากแหว่งเพดานโหว่ฯ
	                                                      	3 	ศูนย์การดูแลผู้ป่วยปากแหว่งเพดานโหว่ฯ 
                                                                        
                                                                        */
                                                                    $type_record=trim($this->input->get_post("type_record21")); //ประเภทของตารางที่ทำการบันทึก    9
                                                //    echo  "<br>";
                                                             $type_document=2;  // 1=หนังสือรับ,2=หนังสือส่ง
                                                //     echo  "<br>";
                                                     
                                                                                         //------------------------------- upload file-------------------------------------------
                                                                                   // print_r($_FILES)  
                                                                                   $file1name = $_FILES["file21"]['name'];  // ชื่อของไฟล์      10  
                                                                                //  echo br();
                                                                                 $file1tmp  =$_FILES['file21']["tmp_name"]; // tmp folder
                                                                                //  echo br();
                                                                                 $file1Type= $_FILES['file21']["type"]; //type of file
                                                                                //  echo br();
                                                                                $file1Size= $_FILES['file21']["size"]; //size
                                                                                //  echo br();
                                                                                  $file1ErrorMsg = $_FILES['file21']["error"]; // 0=false 1=true   
                                                                                // echo br();
                                                                                  
                                                                                   
                                                                                 if( strlen($file1name)   >  0  &&  $file1name != ""  )
                                                                                      {

                                                                                                      $data=array(
                                                                                                          "registration"=> $registration_send21,
                                                                                                          "at"=> $at_send21,
                                                                                                          "date"=>$date1_send21,
                                                                                                          "from"=>$from_send21,
                                                                                                          "to"=> $to_send21,
                                                                                                         "subject"=>$subject_send21,
                                                                                                         "practice"=>$practice_send21,
                                                                                                         "note"=>$note_send21,
                                                                                                         "type_record"=> $type_record,
                                                                                                         "filename"=>$file1name, 
                                                                                                          "type_document"=>$type_document,
                                                                                                      );



                                                                                                  $cp=copy($file1tmp ,  "upload/". $file1name );
                                                                                                  if( $cp )
                                                                                                  {
                                                                                                      //echo 1;
                                                                                                  }
                                                                                                  else{
                                                                                                     // echo 0;
                                                                                                  }

                                                                                      }
                                                                                          else
                                                                                      {
                                                                                            $data=array(
                                                                                                          "registration"=>$registration_send21,
                                                                                                          "at"=> $at_send21,
                                                                                                          "date"=>$date1_send21,
                                                                                                          "from"=>$from_send21,
                                                                                                          "to"=> $to_send21,
                                                                                                         "subject"=>$subject_send21,
                                                                                                         "practice"=>$practice_send21,
                                                                                                         "note"=>$note_send21,
                                                                                                         "type_record"=> $type_record,
                                                                                                       //  "filename"=>$file1name, 
                                                                                                         "type_document"=>$type_document,
                                                                                                      );

                                                                                      }
                                                                                  
                                                                             $tb="tb_main1";
                                                                             $this->db->insert($tb,$data);     
                                                                             redirect("welcome/homepage/insert_success_send21",'refresh');
                                       
                                   }
                   }
                   
                   
                   
                 public   function     inserttable31()
                   {
                          header('Content-Type: text/html; charset=UTF-8');
                                   if(    $this->user_model->authenlogin() == 1 )
                                   {
                                          // print_r($_POST);
                                          //echo "<hr>";
                                          $registration_receive31=trim($this->input->get_post("registration_receive31"));   //เลขทะเบียนส่ง   1
                                       //  echo br();        
                                        $at_receive31=trim($this->input->get_post("at_receive31"));  //ที่       2
                                       //  echo br();      
                                        $date1_receive31=trim($this->input->get_post("date1_receive31")); //ลงวันที่           3
                                         //echo br();      
                                         $from_receive31=trim($this->input->get_post("from_receive31")); //จาก       4
                                     //    echo br();     
                                        $to_receive31=trim($this->input->get_post("to_receive31"));  //ถึง        5
                                      //   echo br();     
                                        $subject_receive31=trim($this->input->get_post("subject_receive31"));  //เรื่อง       6
                                      //   echo br();     
                                        $practice_receive31=trim($this->input->get_post("practice_receive31"));  //การปฏฺิบัติ       7
                                      //   echo br();   
                                        $note_receive31=trim($this->input->get_post("note_receive31")); //หมายเหตุ      8
                                       //  echo br();  
                                         
                                          $type_record=trim($this->input->get_post("type_record31")); //ประเภทของตารางที่ทำการบันทึก    9
                                      //   echo br();  
                                          $type_document=1;  // 1=หนังสือรับ,2=หนังสือส่ง
                                       //  echo br();  
                                             
                                         
                                                                    //------------------------------- upload file-------------------------------------------
                                                                                   // print_r($_FILES)  
                                                                                $file1name = $_FILES["file31"]['name'];  // ชื่อของไฟล์      10  
                                                                            //echo br();
                                                                            $file1tmp  =$_FILES['file31']["tmp_name"]; // tmp folder
                                                                            //echo br();
                                                                               $file1Type= $_FILES['file31']["type"]; //type of file
                                                                          //  echo br();
                                                                           $file1Size= $_FILES['file31']["size"]; //size
                                                                            //echo br();
                                                                             $file1ErrorMsg = $_FILES['file31']["error"]; // 0=false 1=true   
                                                                          //  echo br();
                                                                            
                                                                            if( strlen($file1name)   >  0  &&  $file1name != ""  )
                                                                                      {

                                                                                                      $data=array(
                                                                                                          "registration"=> $registration_receive31,
                                                                                                          "at"=> $at_receive31,
                                                                                                          "date"=>$date1_receive31,
                                                                                                          "from"=>$from_receive31,
                                                                                                          "to"=> $to_receive31,
                                                                                                         "subject"=>$subject_receive31,
                                                                                                         "practice"=>$practice_receive31,
                                                                                                         "note"=>$note_receive31,
                                                                                                         "type_record"=> $type_record,
                                                                                                         "filename"=>$file1name, 
                                                                                                          "type_document"=>$type_document,
                                                                                                      );



                                                                                                  $cp=copy($file1tmp ,  "upload/". $file1name );
                                                                                                  if( $cp )
                                                                                                  {
                                                                                                     //   echo 1;
                                                                                                  }
                                                                                                  else{
                                                                                                      //   echo 0;
                                                                                                  }

                                                                                      }
                                                                                        else
                                                                                      {
                                                                                            $data=array(
                                                                                                          "registration"=>$registration_receive31,
                                                                                                          "at"=> $at_receive31,
                                                                                                          "date"=>$date1_receive31,
                                                                                                          "from"=>$from_receive31,
                                                                                                          "to"=> $to_receive31,
                                                                                                         "subject"=>$subject_receive31,
                                                                                                         "practice"=>$practice_receive31,
                                                                                                         "note"=>$note_receive31,
                                                                                                         "type_record"=> $type_record,
                                                                                                       //  "filename"=>$file1name, 
                                                                                                         "type_document"=>$type_document,
                                                                                                      );

                                                                                      }
                                                                                      
                                                               $tb="tb_main1";
                                                               $this->db->insert($tb,$data);                          
                                                               redirect("welcome/homepage/insert_success_receive31",'refresh');                  

                                   }
      
                    }
                    
                    
               public   function     inserttable32()
                   {
                       header('Content-Type: text/html; charset=UTF-8');
                                   if(    $this->user_model->authenlogin() == 1 )
                                   {
                                          // print_r($_POST);
                                        //   echo "<hr>";
                                           //send31
                                           
                                            $registration_send31=trim($this->input->get_post("registration_send31"));   //เลขทะเบียนส่ง   1
                                       // echo br();        
                                         $at_send31=trim($this->input->get_post("at_send31"));  //ที่       2
                                        //echo br();      
                                          $date1_send31=trim($this->input->get_post("date1_send31")); //ลงวันที่           3
                                       // echo br();      
                                         $from_send31=trim($this->input->get_post("from_send31")); //จาก       4
                                        //echo br();     
                                          $to_send31=trim($this->input->get_post("to_send31"));  //ถึง        5
                                       // echo br();     
                                         $subject_send31=trim($this->input->get_post("subject_send31"));  //เรื่อง       6
                                        //echo br();     
                                          $practice_send31=trim($this->input->get_post("practice_send31"));  //การปฏฺิบัติ       7
                                        //echo br();   
                                         $note_send31=trim($this->input->get_post("note_send31")); //หมายเหตุ      8
                                        //echo br();  
                                         
                                            $type_record=trim($this->input->get_post("type_record31")); //ประเภทของตารางที่ทำการบันทึก    9
                                         //echo br();  
                                            $type_document=2;  // 1=หนังสือรับ,2=หนังสือส่ง
                                         //echo br();  
                                         
                                         //print_r($_FILES);
                                                                       //------------------------------- upload file-------------------------------------------
                                                                                   // print_r($_FILES)  
                                                                              $file1name = $_FILES["file31"]['name'];  // ชื่อของไฟล์      10  
                                                                           //echo br();
                                                                            $file1tmp  =$_FILES['file31']["tmp_name"]; // tmp folder
                                                                           //echo br();
                                                                              $file1Type= $_FILES['file31']["type"]; //type of file
                                                                          // echo br();
                                                                            $file1Size= $_FILES['file31']["size"]; //size
                                                                           //echo br();
                                                                             $file1ErrorMsg = $_FILES['file31']["error"]; // 0=false 1=true   
                                                                          //  echo br();
                                                                            
                                                                            
                                                                             if( strlen($file1name)   >  0  &&  $file1name != ""  )
                                                                                      {

                                                                                                      $data=array(
                                                                                                          "registration"=> $registration_send31,
                                                                                                          "at"=> $at_send31,
                                                                                                          "date"=>$date1_send31,
                                                                                                          "from"=>$from_send31,
                                                                                                          "to"=> $to_send31,
                                                                                                         "subject"=>$subject_send31,
                                                                                                         "practice"=>$practice_send31,
                                                                                                         "note"=>$note_send31,
                                                                                                         "type_record"=> $type_record,
                                                                                                         "filename"=>$file1name, 
                                                                                                          "type_document"=>$type_document,
                                                                                                      );



                                                                                                  $cp=copy($file1tmp ,  "upload/". $file1name );
                                                                                                  if( $cp )
                                                                                                  {
                                                                                                      // echo 1;
                                                                                                  }
                                                                                                  else{
                                                                                                       //  echo 0;
                                                                                                  }

                                                                                      }
                                                                                      else
                                                                                      {
                                                                                            $data=array(
                                                                                                          "registration"=>$registration_send31,
                                                                                                          "at"=> $at_send31,
                                                                                                          "date"=>$date1_send31,
                                                                                                          "from"=>$from_send31,
                                                                                                          "to"=> $to_send31,
                                                                                                         "subject"=>$subject_send31,
                                                                                                         "practice"=>$practice_send31,
                                                                                                         "note"=>$note_send31,
                                                                                                         "type_record"=> $type_record,
                                                                                                       //  "filename"=>$file1name, 
                                                                                                         "type_document"=>$type_document,
                                                                                                      );

                                                                                      }
                                                                                      
                                                               $tb="tb_main1";
                                                               $this->db->insert($tb,$data);                          
                                                               redirect("welcome/homepage/insert_success_send31",'refresh');              
                                                                            
                                                                            
                                       
                                   }
                    }
                    
                public function  test()
                {
                    #   http://localhost/document/index.php/welcome/test
                          //$this->load->model("User_model");
                           $this->user_model->authenlogin();  //check login  from  model
                }
                
                function  add_academic()
                {
                         if(    $this->user_model->authenlogin() == 1 )
                          {
                                 $data["title"]=$this->title;
                                 $this->load->view("add_academic");
                           }
                }
                
                 function  update_academic()
                {
                         if(    $this->user_model->authenlogin() == 1 )
                          {
                                $id=trim($this->uri->segment(3));     
                                $data["id_main_academic"]=$id;
                                 $tb="tb_main_academic";
                                 $q=$this->db->get_where($tb,array("id_main_academic"=>$id));
                                // $row=$q->rows();
                                 $row=$q->row();
                                 
                                   $data["id_firstname_academic"]=$row->id_firstname_academic;   
                                   
                                   
                                   
                                    $data["id_activities"]=$row->id_activities;   
                                 
                                  $data["begin_date"]=$row->begin_date;
                                  $data["end_date"]=$row->end_date;
                                  $data["title"]=$row->title;
                                  $data["place"]=$row->place;
                                  $data["detail"]=$row->detail;
                                  $data["expenses"]=$row->expenses;
                                  
                                  $data["note"]=$row->note;
                                  $data["borrow"]=$row->borrow;
                                  
                                                  
                                 //$data["title"]=$this->title;
                                 $this->load->view("update_academic",$data);
                           }
                }
                
                function  update_tb_main_academic()
                {
                       if(    $this->user_model->authenlogin() == 1 )
                          {
                            header('Content-Type: text/html; charset=UTF-8');
                                 //print_r($_FILES);
                                // print_r($_POST);    
                                 /*
                                   Array ( 
                                  * [firstname_academic] => 4 
                                  * [activities] => 4 
                                  * [begin_date] => 2017-01-01 
                                  * [end_date] => 2017-01-27
                                  *  [title] => à¸«à¸±à¸§à¸‚à¹‰à¸­ The 12 ht Khon kaen FESS course & The 5th Khon Kaen
                                  *  [place] => à¸“ à¸«à¹‰à¸­à¸‡à¸›à¸£à¸°à¸Šà¸¸à¸¡à¸¡à¸´à¸•à¸£à¸ à¸²à¸ž à¸Šà¸±à¹‰à¸™ 3
                                  *  [detail] => International course in advanced endoscopic sinus and skull base surgery: Handson dissection In fresh frozen cadavers 
                                  * [expenses] => 1200 
                                  * [borrow] => 1000 
                                  * [note] => --
                                  *  [btn_academic] => ) 
                                  */
                                //   echo "<hr>";
                                           $id_main_academic=trim($this->input->get_post("id_main_academic"));
                                             
                                if(   $id_main_academic > 0  )       
                                { 
                                         $firstname_academic=trim($this->input->get_post("firstname_academic"));   

                                                   $activities=trim($this->input->get_post("activities"));

                                                  $begin_date=trim($this->input->get_post("begin_date"));
                                                  //  echo "<br>";
                                                     $end_date=trim($this->input->get_post("end_date"));
                                                   // echo "<br>";
                                                     $title=trim($this->input->get_post("title"));
                                                    //echo "<br>";
                                                    $place=trim($this->input->get_post("place"));
                                                    //echo "<br>";
                                                    $detail=trim($this->input->get_post("detail"));
                                                    //echo "<br>";   
                                                    $expenses=trim($this->input->get_post("expenses"));
                                                   // echo "<br>";   
                                                     $borrow=trim($this->input->get_post("borrow"));
                                                   // echo "<br>";   
                                                    $note=trim($this->input->get_post("note"));
                                                  //  echo "<br>";   



                                                    $data=array(
                                                        "id_firstname_academic"=>$firstname_academic,  //1
                                                       "id_activities"=>$activities,      //2
                                                        "begin_date"=>$begin_date,   //3
                                                        "end_date"=>$end_date,   //4
                                                        "title"=>$title,   //5
                                                        "place"=>$place,   //6
                                                        "detail"=>$detail,    //7
                                                        "expenses"=>$expenses,   //8
                                                       "borrow"=>$borrow,   //9
                                                       "note"=>$note,   //9
                                                    );

                                                       $tb="tb_main_academic";
                                                       $this->db->where("id_main_academic",$id_main_academic);
                                                       $ck=$this->db->update($tb,$data);       
                                                       if( $ck )
                                                       {
                                                           //echo 1;
                                                       }
                                                       else if( !$ck )
                                                       {
                                                           //echo 0;
                                                       }
                                        redirect("welcome/homepage/insert_main_academic",'refresh');   
                                }
                         }
                }
                
                function insert_academic()  //บันทึกกิจกรรมทางวิชาการ
                {
                       if(    $this->user_model->authenlogin() == 1 )
                          {
                               header('Content-Type: text/html; charset=UTF-8');
                                 //print_r($_FILES);
                                // print_r($_POST);    
                                 /*
                                   Array ( 
                                  * [firstname_academic] => 4 
                                  * [activities] => 4 
                                  * [begin_date] => 2017-01-01 
                                  * [end_date] => 2017-01-27
                                  *  [title] => à¸«à¸±à¸§à¸‚à¹‰à¸­ The 12 ht Khon kaen FESS course & The 5th Khon Kaen
                                  *  [place] => à¸“ à¸«à¹‰à¸­à¸‡à¸›à¸£à¸°à¸Šà¸¸à¸¡à¸¡à¸´à¸•à¸£à¸ à¸²à¸ž à¸Šà¸±à¹‰à¸™ 3
                                  *  [detail] => International course in advanced endoscopic sinus and skull base surgery: Handson dissection In fresh frozen cadavers 
                                  * [expenses] => 1200 
                                  * [borrow] => 1000 
                                  * [note] => --
                                  *  [btn_academic] => ) 
                                  */
                                //   echo "<hr>";
                                     $firstname_academic=trim($this->input->get_post("firstname_academic"));   
                                 //  echo "<br>";
                                    $activities=trim($this->input->get_post("activities"));
                                  // echo "<br>";
                                   $begin_date=trim($this->input->get_post("begin_date"));
                                 //  echo "<br>";
                                    $end_date=trim($this->input->get_post("end_date"));
                                  // echo "<br>";
                                    $title=trim($this->input->get_post("title"));
                                   //echo "<br>";
                                   $place=trim($this->input->get_post("place"));
                                   //echo "<br>";
                                   $detail=trim($this->input->get_post("detail"));
                                   //echo "<br>";   
                                   $expenses=trim($this->input->get_post("expenses"));
                                  // echo "<br>";   
                                    $borrow=trim($this->input->get_post("borrow"));
                                  // echo "<br>";   
                                   $note=trim($this->input->get_post("note"));
                                 //  echo "<br>";   
                                   
                                   $tb="tb_main_academic";
                                   
                                   $data=array(
                                       
                                       "id_firstname_academic"=>$firstname_academic,  //1
                                       "id_activities"=>$activities,      //2
                                       "begin_date"=>$begin_date,   //3
                                       "end_date"=>$end_date,   //4
                                       "title"=>$title,   //5
                                       "place"=>$place,   //6
                                       "detail"=>$detail,    //7
                                       "expenses"=>$expenses,   //8
                                       "borrow"=>$borrow,   //9
                                       "note"=>$note,   //9
                                       
                                   );
                                   
                                   $ck = $this->db->insert($tb,$data);
                                  // $ck=true;
                                   if( $ck )
                                   {
                                      // echo 1;
                                   }
                                   elseif( !$ck )
                                   {
                                       //echo 0;
                                   }
                                   
                                     redirect("welcome/homepage/insert_main_academic",'refresh');   
                                   
                          }
                }
                
                public  function  search_main_academic()
                {
                     #   http://localhost/document/index.php/welcome/search_main_academic
                      if(    $this->user_model->authenlogin() == 1 )
                          {
                          
                              //  print_r($_POST);
                             //    echo "<hr>";
                                 /*
                                  Array
(
    [firstname_academic] => 2
    [activities] => 2
    [begin_date] => 2017-01-02
    [end_date] => 2017-01-13
)
                                  */
                                 
                                 
                                  $begin_date=trim($this->input->get_post("begin_date"));
                                // echo  "<br>";
                                  $end_date=trim($this->input->get_post("end_date"));
                               //  echo  "<br>";
                                 
                                 $tb="tb_main_academic";
                           
            
                                 
                                                          $tbj1="tb_academic"; 
                                   $tbj2="tb_academic_activities";
                                   
                                                  
                                                  $this->db->join($tbj1,$tb.".id_firstname_academic=".$tbj1.".id_academic","left");
                                                  $this->db->join($tbj2,$tb.".id_activities=".$tbj2.".id_academic_activities","left");
                                                  
                                            
                                                  
                                                  
                                                     $this->db->order_by("id_main_academic","DESC");
                                                     
                                                              $this->db->where($tb.".begin_date >= ", $begin_date);
                                                               $this->db->where($tb.".end_date <= ", $end_date);
                                                     
                                                     
                                                  $data["query"]=$this->db->get($tb);
                                               
                                                  $this->load->view("home_academic",$data);
                          
                         }
                    
                }
                
                public  function  search_tb_main1()
                {
                     #http://localhost/document/index.php/welcome/search_tb_main1
                    if(    $this->user_model->authenlogin() == 1 )
                          {
                                   $data["title"]=$this->title;     
                                   $tb="tb_main1";
                                   $begin_date_main=trim($this->input->get_post("begin_date_main"));   
                                   //echo br();
                                   $end_date_main=trim($this->input->get_post("end_date_main"));   
                                   //echo br();
                                   $type_record=trim($this->input->get_post("type_record")); 
                                 //  echo br();

                                 
                                switch($type_record)  
                                {
                                    case 1:  //subtable11()
                                    {
                                    $this->db->order_by("id_main1","DESC");
                                    $this->db->where("date >=  ", $begin_date_main );
                                    $this->db->where("date <=  ", $end_date_main );
                                    $this->db->where("type_record", $type_record );
                                    $this->db->where("type_document",1 );
                                                   
                                     //   $data["query"]=$this->user_model->tb_main1("1","1");
                                     //   $data["query"] = $this->db->get_where($tb,array("type_record"=>$id,"type_document"=>1));
                                      $data["query"] =$this->db->get($tb);
                                      
                                    $this->db->order_by("id_main1","DESC");
                                    $this->db->where("date >=  ", $begin_date_main );
                                    $this->db->where("date <=  ", $end_date_main );
                                    $this->db->where("type_record", $type_record );
                                    $this->db->where("type_document",2 );
                                    $data["query2"]=$this->db->get($tb);
                                    
                                    
                                   $this->load->view("table11",$data);
                                     
                                           break;
                                    }
                                    case 2: // table2()
                                    {
                                            $this->db->order_by("id_main1","DESC");
                                             $this->db->where("date >=  ", $begin_date_main );
                                             $this->db->where("date <=  ", $end_date_main );
                                             $this->db->where("type_record", $type_record );
                                             $this->db->where("type_document",1 );
                                             $data["query"] =$this->db->get($tb);
                                             //$data["query"]=$this->user_model->tb_main1("3","1");

                                               $this->db->order_by("id_main1","DESC");
                                                $this->db->where("date >=  ", $begin_date_main );
                                                $this->db->where("date <=  ", $end_date_main );
                                                $this->db->where("type_record", $type_record );
                                                $this->db->where("type_document",2 );
                                               $data["query2"]=$this->db->get($tb);
                                               // $data["query2"]=$this->user_model->tb_main1("3","2");    
                                               
                                             $this->load->view("table11",$data);
                                             break;
                                    }
                                    case 3:  //table3() 
                                    {
                                        
                                    //  $data["query"]=$this->user_model->tb_main1("2","1");
                                         $this->db->order_by("id_main1","DESC");
                                             $this->db->where("date >=  ", $begin_date_main );
                                             $this->db->where("date <=  ", $end_date_main );
                                             $this->db->where("type_record", $type_record );
                                             $this->db->where("type_document",1 );
                                             $data["query"] =$this->db->get($tb);
                                        
                                        
                                        
                                    //   $data["query2"]=$this->user_model->tb_main1("2","2");
                                                       $this->db->order_by("id_main1","DESC");
                                                $this->db->where("date >=  ", $begin_date_main );
                                                $this->db->where("date <=  ", $end_date_main );
                                                $this->db->where("type_record", $type_record );
                                                $this->db->where("type_document",2 );
                                               $data["query2"]=$this->db->get($tb);
                                        
                                         $this->load->view("table11",$data);
                                        break;  
                                    }
                                }   
                                    
                                     
                                     
                                    
                                  
                          }
                    
                }
                
                
                public  function table_main_academic()
                {
                      #   http://localhost/document/index.php/welcome/table_main_academic
                     //     $tb="tb_main_academic";
                     if(    $this->user_model->authenlogin() == 1 )
                          {
                                   $tb="tb_main_academic";
                                   $tbj1="tb_academic"; 
                                   $tbj2="tb_academic_activities";
                                   
                                                  
                                                  $this->db->join($tbj1,$tb.".id_firstname_academic=".$tbj1.".id_academic","left");
                                                  $this->db->join($tbj2,$tb.".id_activities=".$tbj2.".id_academic_activities","left");
                                                  
                                                  $this->db->order_by("id_main_academic","DESC");
                                                  $data["query"]=$this->db->get($tb,$this->limit);
                                                  $this->load->view("home_academic",$data);
                                                  
                           }
                }
                
                
                public  function page_table_main_academic()
                {
                     #http://localhost/document/index.php/welcome/page_table_main_academic/1
                     //     $tb="tb_main_academic";
                     if(    $this->user_model->authenlogin() == 1 )
                          {
                                   $tb="tb_main_academic";
                                   $tbj1="tb_academic"; 
                                   $tbj2="tb_academic_activities";
                                   
                                   
                                                 $page=$this->uri->segment(3);
                                              //   http://10.87.196.170/document/index.php/welcome/homepage/page_table_main_academic/1
                                  
                                          
                                                  
                                                  $this->db->join($tbj1,$tb.".id_firstname_academic=".$tbj1.".id_academic","left");
                                                  $this->db->join($tbj2,$tb.".id_activities=".$tbj2.".id_academic_activities","left");
                                                  
                                                  $this->db->order_by("id_main_academic","DESC");
                                                  
                                                  
                                                  
                                                  
                                                /*  
                                                     //$query = $this->db->get('mytable', 10, 20);    
                                                  if( $page == 1 )
                                                  {
                                                        $data["query"]=$this->db->get($tb,$this->limit,0);
                                                        //redirect("welcome/homepage/insert_main_academic",'refresh');     
                                                  }
                                                  else  if( $page ==  2  )
                                                  {
                                                        //$data["query"]=$this->db->get($tb,$this->limit,6);
                                                         $data["query"]=$this->db->get($tb,$this->limit,$cal_limit);
                                                        
                                                       //  redirect("welcome/homepage/insert_main_academic",'refresh');     
                                                  }
                                                  else  if( $page ==  3  )
                                                  {
                                                       // $data["query"]=$this->db->get($tb,$this->limit,11);
                                                         $data["query"]=$this->db->get($tb,$this->limit,$cal_limit);
                                                       //  redirect("welcome/homepage/insert_main_academic",'refresh');     
                                                  }
                                                   else  if( $page ==  4  )
                                                  {
                                                         // $data["query"]=$this->db->get($tb,$this->limit,16);
                                                            $data["query"]=$this->db->get($tb,$this->limit,$cal_limit);
                                                      //   redirect("welcome/homepage/insert_main_academic",'refresh');   
                                                  }
                                                  else  if( $page ==  5  )
                                                  {
                                                      //  $data["query"]=$this->db->get($tb,$this->limit,21);
                                                          $data["query"]=$this->db->get($tb,$this->limit,$cal_limit);
                                                       //  redirect("welcome/homepage/insert_main_academic",'refresh');   
                                                  }
                                                  else{
                                                      
                                                        $data["query"]=$this->db->get($tb,$this->limit); 
                                                       //  redirect("welcome/homepage/insert_main_academic",'refresh');   
                                                  }
                                                  */
                                                  
                                                  
                                                    if(  $page   > 1  )
                                                    {
                                                           $cal_limit=$page-1*$this->limit  + 2;
                                                           $data["query"]=$this->db->get($tb,$this->limit,$cal_limit);
                                                    }else{
                                                            $data["query"]=$this->db->get($tb,$this->limit); 
                                                    }

                                    
                                                  
                                                    // $this->load->view("home_academic",$data);     
                                                     //http://10.87.196.170/document/index.php/welcome/homepage/insert_main_academic
                                                    //  redirect("welcome/homepage/insert_main_academic",'refresh');     
                                                   $this->load->view("home_academic",$data);
                           }
                }
                
                
   
                
                public function  del_main_academic()
                {
                     if(    $this->user_model->authenlogin() == 1 )
                          {
                                   $tb="tb_main_academic";
                                   //$tbj1="tb_academic"; 
                                $id=trim($this->uri->segment(3));    
                             if( $id > 0)
                             {
                                            $this->db->where("id_main_academic",$id);
                                            $ck = $this->db->delete($tb);
                                            if( $ck )
                                            {
                                               // echo 1;
                                            }
                                            else
                                            {
                                               // echo 0;
                                            }
                             }    
                                
                                
                               redirect("welcome/homepage/insert_main_academic",'refresh');     
                                                  
                           }
                }
                
                public  function  export_excel()
                {
                     #   http://localhost/document/index.php/welcome/export_excel
                        if(    $this->user_model->authenlogin() == 1 )
                          {
                                $type_record=trim($this->uri->segment(3));
                                $type_document=trim($this->uri->segment(4));
                                
                                
                                if(   $type_record  == 1  &&    $type_document == 1 )
                                {
                                       $strExcelFileName="ทะเบียนหนังสือรับ.xls";
                                }
                                 else    if(   $type_record  == 1  &&    $type_document == 2 )
                                {
                                       $strExcelFileName="ทะเบียนหนังสือส่ง.xls";
                                }
                                else
                                {
                                       $strExcelFileName="ทะเบียนหนังสือ.xls";
                                }
                                
                             
                                header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
                                header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
                                header("Pragma:no-cache");
                                //header('Content-Type: text/html; charset=UTF-8');
                                
                               
                                $tb="tb_main1";
                              //  $data["query_excel"]= $this->db->get_where($tb,array("type_record"=>$type_record,"type_document"=>$type_document));
                                 $query_excel = $this->db->get_where($tb,array("type_record"=>$type_record,"type_document"=>$type_document));
                              //  $this->load->view("export_excel",$data);
                                
                                 $size1=3;
                                 $size2=2;
                                 
                                echo "<table border='1'  >";
                                echo "<tr>";
                                echo "<td  align='center'   ><font face=\"TH Saraban New\" size='".$size1."'> เลข".br()
                                        . "ทะเบียนรับ  </font></td>";
                                echo "<td  align='center' ><font face=\"TH Saraban New\"  size='".$size1."'> ที่  </font></td>";
                                echo "<td  align='center' ><font face=\"TH Saraban New\" size='".$size1."'> ลงวันที่  </font></td>";
                                echo "<td align='center' ><font face=\"TH Saraban New\"  size='".$size1."' > จาก  </font></td>";
                                echo "<td  align='center' ><font face=\"TH Saraban New\" size='".$size1."' > ถึง  </font></td>";
                                echo "<td align='center' ><font face=\"TH Saraban New\" size='".$size1."' > เรื่อง  </font></td>";
                                echo "<td  align='center' ><font face=\"TH Saraban New\" size='".$size1."' > การปฏิบัติ  </font></td>";
                                echo "<td align='center' ><font face=\"TH Saraban New\" size='".$size1."' > หมายเหตุ  </font></td>";
                                echo "</tr>";
                                foreach(  $query_excel->result() as $row)
                                {
                                    echo "<tr>";
                                   
                                      echo "<td align='center'>";
                                      echo "<font face=\"TH Saraban New\"  size='".$size2."'  >";
                                      
                                      echo  $registration=$row->registration;
                                     //echo  $this->user_model->count_id($type_record,$type_document);
                                     echo " </font>";
                                     echo "</td>";
                                     
                                     
                                        echo "<td>";
                                        echo "<font face=\"TH Saraban New\" size='".$size2."'  >";
                                     echo  $at=$row->at;
                                      echo " </font>";
                                     echo "</td>";
                                     
                                           echo "<td>";
                                           echo "<font face=\"TH Saraban New\"  size='".$size2."'  >";
                                           
                                           
                                    echo   $date=$row->date;
                                     
                                     
                                     
                                      echo " </font>";
                                     echo "</td>";
                                     
                                     
                                     
                                     echo "<td>";
                                     echo "<font face=\"TH Saraban New\" size='".$size2."' >";
                                     echo  $from=$row->from;
                                      echo " </font>";
                                     echo "</td>";
                                     
                                  
                                     
                          
                                     
                                     echo "<td>";
                                     echo "<font face=\"TH Saraban New\" size='".$size2."'  >";
                                     echo  $to=$row->to;
                                      echo " </font>";
                                     echo "</td>";
                                     
                                      echo "<td>";
                                      echo "<font face=\"TH Saraban New\" size='".$size2."'  >";
                                     echo  $subject=$row->subject;
                                      echo " </font>";
                                     echo "</td>";
                                     
                                       echo "<td>";
                                       echo "<font face=\"TH Saraban New\" size='".$size2."'  >";
                                   //  echo  $practice=$row->practice;
                                       
                                        echo " </font>";
                                     echo "</td>";
                                     
                                     echo "<td>";
                                     echo "<font face=\"TH Saraban New\" size='".$size2."'  >";
                                  //   echo  $note=$row->note;
                                      echo " </font>";
                                     echo "</td>";
                                     
                                     echo "</tr>";
                                }
                                echo "</table>";
                               
                                       
                         }
                        
                        
                    
                    
                }
                
                public function delete()
                {
                        if(    $this->user_model->authenlogin() == 1 )
                          {
                               $id=$this->uri->segment(3);
                               // echo br();
                               $page=$this->uri->segment(4);
                               // echo br();
                                
                                if( $id > 0 )
                                {
                                    $tb="tb_main1";
                                    $this->db->where("id_main1",$id);
                                    $ck=$this->db->delete($tb);
                                    //$ck=true;
                                    
                                    
                                    
                                    
                                    if($ck)
                                    {
                                       // echo 1;
                                         //  redirect("welcome/homepage/insert_success_send21",'refresh');
                                          switch($page)
                                          {
                                              case 1:  //insert_success_send11
                                              {
                                                  
                                     
                                                  redirect("welcome/homepage/insert_success_send11",'refresh');
                                                  break;
                                              }
                                              case 2: //insert_success_receive21
                                              {
                                                  
                                                  
                                                    redirect("welcome/homepage/insert_success_receive21",'refresh');  
                                                   break;
                                              }
                                              case 3:  //insert_success_receive31
                                              {
                                                  
                                                  
                                                    redirect("welcome/homepage/insert_success_receive31",'refresh');    
                                                   break;
                                              }
                                              default:
                                              {
                                                  
                                              }
                                              
                                          }
                                    }
                                    else
                                    {
                                       // echo 0;
                                                   redirect("welcome/homepage/insert_success_send11",'refresh');                                        
                                    }
                                   
                                    
                                
                                    
                            
                          }
                          
                      }
                }
                
                
                public function auto()
                {
                    //http://http://192.168.2.112/document/index.php/welcome/auto 
                    // if(    $this->user_model->authenlogin() == 1 )
                         // {
                                    $tb="tb_main1";   
                                    $q=$this->db->get($tb);
                                    foreach($q->result() as $row)
                                    {
                                              $rows[]=$row;
                                    }
                                    echo  json_encode($rows);
                         //  }
                    
                }
                
               
                
                
                public function testauto()
                {
                     //http://192.168.2.112/document/index.php/welcome/testauto
                                              $this->load->view("testauto");
                    
                }
                
                public function  err_system()
                {
                    //http://192.168.2.112/document/index.php/welcome/err_system
                    
                    /*
                      echo "<h1>Error: 404 Not Found</h1>";
                      //echo "<br>";
                      echo  "<h4>Sorry, the requested URL ".base_url()."<h4>";
                     * 
                     */
                          
                         $this->user_model->err_model();
                         
                }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */