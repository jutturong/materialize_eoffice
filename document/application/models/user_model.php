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
                     redirect("welcome/err_system");
                 }
                 
                 
                 
                  redirect("welcome/err_system");
                 
        }
        
        public function  err_model()
        {
            //http://192.168.2.112/document/index.php/welcome/err_system
                      echo "<h1>Error: 404 Not Found</h1>";
                      //echo "<br>";
                      echo  "<h4>Sorry, the requested URL ".base_url()."<h4>";
        }
        
        
        
        
  
        
}



