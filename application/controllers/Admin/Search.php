<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
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
    $group = $this->GroupModel->SelectGroup();
    $category = $this->CategoryModel->SelectCategory();
    $brand = $this->BrandModel->SelectBrand();
    $tech = $this->ProductModel->SelectTech();
    $resolution = $this->ProductModel->SelectResolution();
    $product = $this->ProductModel->SelectProduct();

    $value = array(
      'Result' => array(
        'group' => $group,
        'category' => $category,
        'brand' => $brand,
        'tech' => $tech,
        'resolution' => $resolution,
        'product' => $product,
      ),
      'View' => 'Back/ProductSearch',
    );
    // $this->debug->log($value);
    $this->LoadPage($value);
  }

  public function ProductSearch()
  {
    $input = $this->input->post();
    $title = $this->TitleGroupModel->SelectTitleGroup();
    $group = $this->GroupModel->SelectGroup();
    $category = $this->CategoryModel->SelectCategory();
    $brand = $this->BrandModel->SelectBrand();
    $tech = $this->ProductModel->SelectTech();
    $resolution = $this->ProductModel->SelectResolution();
    if (isset($input['catebox']) || isset($input['brandbox']) || isset($input['sortbyprice']) || isset($input['resolution'])
    || isset($input['tech']) || $input['Size-min'] != '' ||  $input['Size-max'] != '' || $input['min'] != '' || $input['max'] != '' || $input['wordsearch'] != '') {
      $product = $this->ProductModel->SelectSearchProduct($input);
    } else {
      echo "<script>document.location='" . SITE_URL('Admin/Search') . "'</script>";
    }
    $keyword = $input;

    $value = array(
      'Result' => array(
        'title' => $title,
        'group' => $group,
        'category' => $category,
        'brand' => $brand,
        'tech' => $tech,
        'resolution' => $resolution,
        'product' => $product,
        'keyword' => $keyword,
      ),
      'View' => 'Back/ProductSearch',
    );
    $this->LoadPage($value);
  }

}
