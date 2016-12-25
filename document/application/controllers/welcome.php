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
                           
                 }
             
             
	public function index()
	{
		//$this->load->view('welcome_message');
                                $this->user_model->logout();
                                $data["title"]=$this->title;
                                $this->load->view("test2",$data);
                                
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
          
          
              public function  logout()
              {
                     $this->user_model->logout();
              }
              
              
          
                public function  formsub11()
                {
                     if(    $this->user_model->authenlogin() == 1 )
                     {
                             $data["title"]=$this->title;
                             $this->load->view("sub11",$data);
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