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
                             $this->load->view("send11",$data);
                     }
                     
                }
                
              
                public function receive21()
               {
                   if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                             $this->load->view("receive21",$data);
                     }
               }
                
             public function  send21() //ทะเบี่ยนหนังสือส่ง
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
                            $this->load->view("table11",$data);
                     }
                    
                }
                
                
                public  function inserttable1() //บันทึกหนังสือรับ มูลนิธิตะวันฉาย
                {
                    #   http://localhost/document/index.php/welcome/inserttable1
                    //header("Content-Type: application/json", true);
                      header('Content-Type: text/html; charset=UTF-8');
                     if(    $this->user_model->authenlogin() == 1 )
                     {
                         #-- หนังสือรับ หนังสือเ้ข้า  มูลนิธิตะวันฉายฯ
                       $registration_receive11=trim($this->input->get_post("registration_receive11"));   //เลขทะเบียนส่ง
                       //echo "<br>";
                        $at_receive11=trim($this->input->get_post("at_receive11"));  //ที่
                     //  echo  "<br>";
                     $date1_receive11=trim($this->input->get_post("date1_receive11")); //ลงวันที่
                   //    echo  "<br>";
                       $from_receive11=trim($this->input->get_post("from_receive11")); //จาก
                      // echo  "<br>";
                       $to_receive11=trim($this->input->get_post("to_receive11"));  //ถึง
                     //  echo  "<br>";
                        $subject_receive11=trim($this->input->get_post("subject_receive11"));  //เรื่อง
                      // echo  "<br>";
                        $practice_receive11=trim($this->input->get_post("practice_receive11"));  //การปฏฺิบัติ
                      // echo  "<br>";
                         $note_receive11=trim($this->input->get_post("note_receive11")); //หมายเหตุ
                       //echo  "<br>";
                      
                         // $file1_receive11
                         /*
                          $fname =  $_FILES['file_rec']['name'];
                         $fsize=$_FILES['file_rec']['size'];
                         $ftmpname=$_FILES['file_rec']['tmp_name'];
                         $ftypename=$_FILES['file_rec']['type'];
                                  
                                   if(   !empty(  $fname   )      )
                                   {
                                           $source = $_FILES['file_rec']['tmp_name'];
                                           $file_rec = $_FILES['file_rec']['tmp_name'];
                                           $target = "uploadfile/".$_FILES['file_rec']['name'];
                                           move_uploaded_file( $source, $target );// or die ("Couldn't copy");
                                          // $size = getImageSize( $target );
                                   }

                          */
                       
                 
                   //   echo  "<br>";
                         
                       
                       print_r($_POST);
                       
                       
                  
                           
                       /*
                        $config['max_size'] = '900';
                        $this->load->library('upload');
                       $this->upload->initialize($config);
                        $this->load->library('upload');
                        $this->upload->initialize($config);
                   
                          //  print_r($_FILES);    
                            
                           // echo  $file1name = $_FILES['file_upload1']['name'];
                            //  $_FILES['file_upload1']['name'];
                        */
                       
                
                       
                        
             //  $file1name = $_FILES['file_upload1']['name'];
            //   $file1tmp  =$_FILES['file_upload1']["tmp_name"]; // tmp folder
            //   $file1Type= $_FILES['file_upload1']["type"]; //type of file
           //    $file1Size= $_FILES['file_upload1']["size"]; //size
         //      $file1ErrorMsg = $_FILES['file_upload1']["error"]; // 0=false 1=true

 /*                      
//$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = '100';
$config['max_width'] = '1024';
$config['max_height'] = '768';

$this->load->library('upload', $config);

// Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
$this->upload->initialize($config);
*/
               
      // $_FILES["file_upload1"]["name"];
    
                         print_r($_FILES); 
                      // $_FILES['image']['name'];   
                     //   echo  $file1name = $_FILES['file1']['name'];        
               
                           
                         
                         //edirect("index.php/welcome/index");
                        // redirect("welcome");
                         
                        redirect("welcome/homepage/insert_success");

                     }
                }
                
                public  function insert_send11()
                        {
                                  header('Content-Type: text/html; charset=UTF-8');
                                  print_r($_POST);
                                   print_r($_FILES); 
                                redirect("welcome/homepage/insert_success_send11");
                                   
                    
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