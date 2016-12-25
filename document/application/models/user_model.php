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
        
        
        
  
        
}



