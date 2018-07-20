<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

      $Group = $this->GroupModel->SelectGroup();
      $Category = $this->CategoryModel->HomeCategory($Group[0]['categroupId']);

      $dataService = $this->ConfigModel->SelectService();

      $data = array(
        'Category' => $Category,
        'Group' => $Group,
        'dataService' => $dataService,
      );

        $this->load->view('Front/themes/header',$data);
        // $this->load->view('Front/themes/slide');
        // $this->load->view('Front/themes/menu');
        $this->load->view('Front/Service');
        $this->load->view('Front/themes/footer');
    }
}
