<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Route extends CI_Controller {

    public function dashboard()
    {
        $this->load->view('Dashboard');
        
    }
    public function profil()
    {
        $this->load->view('Profil');
        
    }
    public function slideshow()
    {
        $this->load->view('SlideShow');
        
    }
    public function card()
    {
        $this->load->view('Card');
        
    }
    public function carousel()
    {
        $this->load->view('Carousel');
        
    }
    public function form()
    {
        $this->load->view('Form');
        
    }
}

/* End of file Route.php */


?>