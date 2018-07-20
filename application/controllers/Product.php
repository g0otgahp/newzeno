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

    $Group = $this->GroupModel->SelectGroup();
    $Category = $this->CategoryModel->HomeCategory($Group[0]['categroupId']);

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
    $Id = $this->uri->segment(4);
    $Group = $this->GroupModel->SelectGroup();
    $Category = $this->CategoryModel->HomeCategory($cateId);
    $GroupSelect = $this->GroupModel->SelectGroupById($cateId);
    $CateSelect = $this->CategoryModel->SelectCategoryById($Id);
    $Product = $this->HomepageModel->SelectProductByCate($Id);

    $data = array(
      'Product' => $Product,
      'GroupSelect' => $GroupSelect,
      'CateSelect' => $CateSelect,
      'Category' => $Category,
      'Group' => $Group,
    );

    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/filter');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  }

  public function ProductDetail()
  {
    $cateId = $this->uri->segment(3);
    $Id = $this->uri->segment(4);
    $ProductId = $this->uri->segment(5);
    $Group = $this->GroupModel->SelectGroup();
    $Category = $this->CategoryModel->HomeCategory($cateId);
    $GroupSelect = $this->GroupModel->SelectGroupById($cateId);
    $CateSelect = $this->CategoryModel->SelectCategoryById($Id);
    $Product = $this->HomepageModel->SelectProductByProduct($ProductId);

    $data = array(
      'Product' => $Product,
      'GroupSelect' => $GroupSelect,
      'CateSelect' => $CateSelect,
      'Category' => $Category,
      'Group' => $Group,
    );

    $this->load->view('Front/themes/header',$data);
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductDetail');
    $this->load->view('Front/themes/footer');
  }
}
