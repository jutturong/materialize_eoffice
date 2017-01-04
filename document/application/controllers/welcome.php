<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
             var  $title="ระบบโปรแกรมงานธุรการ";
             
                 public function __construct() {
                     
                         
                           parent::__construct();
                          // $this->load->model("user_model");
                          // $this->user_model->test();
                        //  $this->load->helper(array('form', 'url'));
                           $this->load->helper(array('form', 'url'));
                           $this->load->helper('file');
                           
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
                         redirect("welcome/index/");
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
                           // echo   $data["number_add"]=$this->user_model->count_id(1,2);
                             $this->load->view("receive21",$data);
                     }
               }
               
               
                public function receive31()
               {
                   if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
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
                               $data["number_add"]=$this->user_model->count_id(1,2); 
                               
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
                             $this->load->view("send21",$data);
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
                         
                         
                        redirect("welcome/homepage/insert_success");
                         
                         

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
                                                                            $type_record=trim($this->input->get_post("type_record21")); //ประเภทของตารางที่ทำการบันทึก    9
                                                                         //echo  "<br>";
                                                                            $type_document=2;  // 1=หนังสือรับ,2=หนังสือส่ง
                                                                       // echo  "<br>";
                                                                        
                                                                   
                                                                        
                                                                     
                                                                        
                                                                       
                                                                //------------------------------- upload file-------------------------------------------
                                                                                   // print_r($_FILES)  
                                                                                        $file1name = $_FILES["file21"]['name'];  // ชื่อของไฟล์      10  
                                                                                      //echo br();
                                                                                      $file1tmp  =$_FILES['file21']["tmp_name"]; // tmp folder
                                                                                     // echo br();
                                                                                      $file1Type= $_FILES['file21']["type"]; //type of file
                                                                                     // echo br();
                                                                                      $file1Size= $_FILES['file21']["size"]; //size
                                                                                     // echo br();
                                                                                        $file1ErrorMsg = $_FILES['file21']["error"]; // 0=false 1=true
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
                                                  
                                       
                                                 redirect("welcome/homepage/insert_success_send21");

                                        }
                        }
                
                public function  test()
                {
                    #   http://localhost/document/index.php/welcome/test
                          //$this->load->model("User_model");
                           $this->user_model->authenlogin();  //check login  from  model
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