<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller AquaHub
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class AquaHub extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    
  }

  public function index()
  {
    $title=["Aqua Hub"];
    $this->load->view("layout/header_admin");
    $this->load->view("admin/AquaHub");
    $this->load->view("layout/footer_admin");
  }
  

}


/* End of file AquaHub.php */
/* Location: ./application/controllers/AquaHub.php */