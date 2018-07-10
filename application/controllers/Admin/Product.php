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
    $category = $this->CategoryModel->SelectCategory();
    $group = $this->GroupModel->SelectGroup();
    $value = array(
      'Result' => array(
        'brand' => $brand,
        'category' => $category,
        'product' => $product,
        'group' => $group,
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
    $category = $this->CategoryModel->SelectCategory();
    $group = $this->GroupModel->SelectGroup();

    $value = array(
      'Result' => array(
        'brand' => $brand,
        'category' => $category,
        'data' => $product,
        'group' => $group,

      ),
      'View' => 'Back/ProductDetail',
    );
    $this->LoadPage($value);
  }

  public function ProductForm()
  {
    $brand = $this->BrandModel->SelectBrand();
    $category = $this->CategoryModel->SelectCategory();
    $group = $this->GroupModel->SelectGroup();

    $value = array(
      'Result' => array(
        'brand' => $brand,
        'category' => $category,
        'group' => $group,

      ),
      'View' => 'Back/ProductForm',
    );
    $this->LoadPage($value);
  }

  public function saveProduct()
  {
    $input = $this->input->post();

    if (!empty($_FILES['productImg']['name'])) {
      $pathinfo = pathinfo($_FILES['productImg']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['productImg']['tmp_name'], "uploads/Products/" . $new_file);
      $input['productImg'] = $new_file;
    }

    $id = $this->ProductModel->saveProduct($input);
    if (!empty($_FILES['SubImg']['name'])) {
      $i = 0;
      foreach ($_FILES['SubImg']['name'] as $row) {
        $pathinfo = pathinfo($row, PATHINFO_EXTENSION);
        $new_file = date('YmdHis'.$i) . "." . $pathinfo;
        move_uploaded_file($_FILES['SubImg']['tmp_name'][$i], "uploads/Products/" . $new_file);
        $SubImage[$i] = array(
          'proimageName' => $new_file,
          'proimageProductid' => $id,
        );
        $i++;
      }
      $this->ProductModel->saveSubImage($SubImage);
    }
    echo "<script>alert('เพิ่มสินค้าใหม่เรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product') . "'</script>";
  }

  public function UpdateProduct()
  {
    $input = $this->input->post();
    if (!empty($_FILES['productImg']['name'])) {
      $pathinfo = pathinfo($_FILES['productImg']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['productImg']['tmp_name'], "uploads/Products/" . $new_file);
      $input['productImg'] = $new_file;
    }

    $this->ProductModel->UpdateProduct($input);
    if (!empty($_FILES['SubImg']['name'])) {
      $i = 0;
      foreach ($_FILES['SubImg']['name'] as $row) {
        $pathinfo = pathinfo($row, PATHINFO_EXTENSION);
        $new_file = date('YmdHis'.$i) . "." . $pathinfo;
        move_uploaded_file($_FILES['SubImg']['tmp_name'][$i], "uploads/Products/" . $new_file);
        $SubImage[$i] = array(
          'proimageName' => $new_file,
          'proimageProductid' => $input['productId'],
        );
        $i++;
      }
      $this->ProductModel->saveSubImage($SubImage);
    }
    echo "<script>alert('แก้ไขสินค้าเรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product/ProductDetail/'.$input['productId']) . "'</script>";
  }

  public function DeleteSubImage()
  {
    $id = $this->uri->segment(4);
    $Productid = $this->uri->segment(5);
    $this->ProductModel->DeleteSubImage($id);
    echo "<script>alert('ลบรูปภาพเรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product/ProductDetail/'.$Productid) . "'</script>";
  }

  public function DeleteProduct()
  {
    $id = $this->uri->segment(4);
    $status = array(
      'productId' => $id,
      'productStatus' => 2,
    );
    $this->ProductModel->UpdateProduct($status);
    echo "<script>alert('ลบสินค้าเรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product') . "'</script>";
  }

  public function ProductSearch()
  {
    $input = $this->input->post();
    $product = $this->ProductModel->SelectSearchProduct($input);
    $brand = $this->BrandModel->SelectBrand();
    $category = $this->CategoryModel->SelectCategory();
    $group = $this->GroupModel->SelectGroup();

    $select = array();
    if (!empty($input['Category'])) {
      $select['cate'] = $input['Category'];
    }

    if (!empty($input['Brand'])) {
      $select['brand'] = $input['Brand'];
    }

    if (!empty($input['Group'])) {
      $select['group'] = $input['Group'];
    }

    $value = array(
      'Result' => array(
        'select' => $select,
        'brand' => $brand,
        'category' => $category,
        'group' => $group,
        'product' => $product,
      ),
      'View' => 'Back/ProductList',
    );
    $this->LoadPage($value);
  }
}
