<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data;
    public function __construct(){
        parent::__construct();
        $this->load->model('common_model');
        $this->load->model('menu_model');
        $this->load->library('menu_load');
        $this->data['menus'] = $this->menu_load->all();
    }
      public function index(){  
      
        $this->data['main_content'] = $this->load->view('home', $this->data, TRUE);
      $this->load->view('index', $this->data);
      }

    public function app() {
      if ($_GET) {
        $uri = $this->security->xss_clean($_GET);
       
        
        if (isset($uri['menu'])) {
            $this->data['side_menu']  = $this->menu_model->side_menu($uri['menu']);
           // echo "<pre>"; print_r($this->data['side_menu']);exit;
        }
        if (isset($uri['article'])) {
          $this->data['url']=$uri['article'];
          $uri['article'] = str_replace(' ', '+',$uri['article']);
          $this->data['article']  = $this->menu_model->get_article($uri['article']);
         //echo "<pre>"; print_r($this->data['article']);exit;
       }
      }else{
          $this->data['side_menu']  = $this->menu_model->side_menu('html');
          $this->data['article']  ="";
      } 
      $this->data['main_content'] = $this->load->view('article', $this->data, TRUE);
      $this->load->view('index', $this->data);
    }

}