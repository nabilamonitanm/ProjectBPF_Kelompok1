<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Beranda_admin
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

class Beranda_admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("layout/header_admin");
    $this->load->view("admin/beranda");
    $this->load->view("layout/footer_admin");
  }
  

}


/* End of file Beranda_admin.php */
/* Location: ./application/controllers/Beranda_admin.php */