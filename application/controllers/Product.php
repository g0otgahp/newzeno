<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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

    $cateId = 1;
    $Group = $this->GroupModel->SelectGroup();
    // $cateId = 1;
    $Category = $this->CategoryModel->HomeCategory($cateId);

    $data = array(
      'Category' => $Category,
      'Group' => $Group,
    );

    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  }

  public function ShowProduct()
  {

    $cateId = $this->uri->segment(3);
    // echo "<pre>";
    // print_r($cateId);
    // exit();

    $Group = $this->GroupModel->SelectGroup();
    // $cateId = 1;
    $Category = $this->CategoryModel->HomeCategory($cateId);

    $data = array(
      'Category' => $Category,
      'Group' => $Group,
    );

    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  }

  public function ProductDetail()
  {
    $Group = $this->GroupModel->SelectGroup();
    $cateId = 1;
    $Category = $this->CategoryModel->HomeCategory($cateId);

    $data = array(
      'Category' => $Category,
      'Group' => $Group,
    );

    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductDetail');
    $this->load->view('Front/themes/footer');
  }
}
