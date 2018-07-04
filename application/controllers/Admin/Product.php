<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    @session_start();
    if(@$_SESSION['Status'] !="NZN"){
      echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
      echo "<script>document.location='" . SITE_URL('Login') . "'</script>";
    }
  }

  public function LoadPage($value)
  {
    $data = $value['Result'];
    $this->load->view('Back/themes/header', $data);
    $this->load->view($value['View']);
    $this->load->view('Back/themes/footer');
  }

  public function index()
  {
    $product = $this->ProductModel->SelectProduct();
    $brand = $this->BrandModel->SelectBrand();
    $category = $this->CategoryModel->Select();
    $value = array(
      'Result' => array(
        'brand' => $brand,
        'category' => $category,
        'product' => $product,
      ),
      'View' => 'Back/ProductList',
    );
    $this->LoadPage($value);
  }

  public function ProductDetail()
  {
    $id = $this->uri->segment(4);
    $product = $this->ProductModel->SelectProductByID($id);
    $brand = $this->BrandModel->SelectBrand();
    $category = $this->CategoryModel->Select();
    $value = array(
      'Result' => array(
        'brand' => $brand,
        'category' => $category,
        'data' => $product,
      ),
      'View' => 'Back/ProductDetail',
    );
    $this->LoadPage($value);
  }

  public function ProductForm()
  {
    $brand = $this->BrandModel->SelectBrand();
    $category = $this->CategoryModel->Select();
    $value = array(
      'Result' => array(
        'brand' => $brand,
        'category' => $category,
      ),
      'View' => 'Back/ProductForm',
    );
    $this->LoadPage($value);
  }

  public function saveProduct()
  {
    $input = $this->input->post();
    echo "<pre>";
    print_r($input);
    exit();
    // $value = array(
    //   'Result' => array(
    //     //
    //   ),
    //   'View' => 'Back/ProductList',
    // );
    // $this->LoadPage($value);
  }

  public function ProductSearch()
  {
    $input = $this->input->post();
    echo "<pre>";
    print_r($input);
    exit();
    // $value = array(
    //   'Result' => array(
    //     //
    //   ),
    //   'View' => 'Back/ProductList',
    // );
    // $this->LoadPage($value);
  }
}
