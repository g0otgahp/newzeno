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

  // public function index()
  // {
  //   $product = $this->ProductModel->SelectProduct();
  //   $brand = $this->BrandModel->SelectBrand();
  //   $category = $this->CategoryModel->SelectCategory();
  //   $group = $this->GroupModel->SelectGroup();
  //
  //   $value = array(
  //     'Result' => array(
  //       'brand' => $brand,
  //       'category' => $category,
  //       'product' => $product,
  //       'group' => $group,
  //     ),
  //     'View' => 'Back/ProductList',
  //   );
  //   $this->LoadPage($value);
  // }

  // public function index()
  // {
  //   $dataSelect = $this->TitleGroupModel->SelectTitleGroup();
  //   $value = array(
  //     'Result' => array(
  //       'dataSelect' => $dataSelect,
  //     ),
  //     'View' => 'Back/Product',
  //   );
  //   $this->LoadPage($value);
  // }

  public function ProductDetail()
  {
    $id = $this->uri->segment(4);
    $product = $this->ProductModel->SelectProductByID($id);
    $brand = $this->BrandModel->SelectBrand();
    $category = $this->CategoryModel->SelectCategory();
    $group = $this->GroupModel->SelectGroup();
    $SelectTech = $this->ProductModel->SelectTech();
    $SelectResolution = $this->ProductModel->SelectResolution();
    $SelectSize = $this->ProductModel->SelectSize();

    $value = array(
      'Result' => array(
        'brand' => $brand,
        'category' => $category,
        'data' => $product,
        'group' => $group,
        'SelectTech' => $SelectTech,
        'SelectResolution' => $SelectResolution,
        'SelectSize' => $SelectSize,
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
    $Checking = $this->ProductModel->CheckingProduct($input);
    if (count($Checking) == 0) {

    if (!empty($_FILES['productImg']['name'])) {
      $pathinfo = pathinfo($_FILES['productImg']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['productImg']['tmp_name'], "uploads/Products/" . $new_file);
      $input['productImg'] = $new_file;
    }

    if (isset($input['checkbox'])) {
      $input['productFav'] = 1;
    } else {
      $input['productFav'] = 2;
    }

    $input['editId'] = $_SESSION['adminId'];

    unset($input['checkbox']);

    $id = $this->ProductModel->saveProduct($input);

    $LogInsert = array(
      'logProductProfileId' => $_SESSION['adminId'],
      'logProductStatus' => 'เพิ่ม',
      'logProductType' => 'จัดการสินค้า',
      'logProductItem' => $input['productName'],
    );

    $this->LogModel->LogProduct($LogInsert);

    if (@$_FILES['SubImg']['name'][0] != '') {
      $i = 0;
      foreach ($_FILES['SubImg']['name'] as $row) {
        $pathinfo = pathinfo($row, PATHINFO_EXTENSION);
        $new_file = "P".date('YmdHis'.$i) . "." . $pathinfo;
        move_uploaded_file($_FILES['SubImg']['tmp_name'][$i], "uploads/Products/" . $new_file);
        $SubImage[$i] = array(
          'proimageName' => $new_file,
          'editId' => $_SESSION['adminId'],
          'proimageProductid' => $id,
        );
        $i++;
      }
      $this->ProductModel->saveSubImage($SubImage);
    }

    if (@$_FILES['Doc']['name'][0] != '') {
      $d = 0;
      foreach ($_FILES['Doc']['name'] as $row) {
        $pathinfo = pathinfo($row, PATHINFO_EXTENSION);
        $new_file = "D".date('YmdHis'.$d) . "." . $pathinfo;
        move_uploaded_file($_FILES['Doc']['tmp_name'][$d], "uploads/pdf/" . $new_file);
        $Document[$d] = array(
          'docName' => $row,
          'docFilename' => $new_file,
          'docProductid' => $id,
          'editId' => $_SESSION['adminId'],
        );
        $d++;
      }
      $this->ProductModel->saveDocument($Document);
    }

    echo "<script>alert('เพิ่มสินค้าใหม่เรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product/ProductDetail/') .$id. "'</script>";
  } else {
    echo "<script>alert('มีสินค้านี้ในฐานข้อมูลแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product/ProductDetail/') .$Checking[0]['productId']. "'</script>";
  }

  }

  public function UpdateProduct()
  {
    $input = $this->input->post();
    $idlog = $input['productId'];
    $product = $this->ProductModel->SelectProductByID($idlog);

    if (isset($input['checkbox'])) {
      $input['productFav'] = 1;
    } else {
      $input['productFav'] = 2;
    }

    $input['editId'] = $_SESSION['adminId'];

    unset($input['checkbox']);

    $this->ProductModel->UpdateProduct($input);

      $LogUpdate = array(
        'logProductProfileId' => $_SESSION['adminId'],
        'logProductStatus' => 'แก้ไข',
        'logProductType' => 'จัดการสินค้า',
        'logProductItem' => $product['product'][0]['productName'],
      );

      $this->LogModel->LogProduct($LogUpdate);

    echo "<script>alert('แก้ไขสินค้าเรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product/ProductDetail/').$input['productId']. "'</script>";
  }

  public function UpdateImageProduct()
  {
    $input = $this->input->post();
    $idlog = $input['productId'];
    $product = $this->ProductModel->SelectProductByID($idlog);

    // $this->debug->log($product['product'][0]['productName']);

    if (!empty($_FILES['productImg']['name'])) {
      $pathinfo = pathinfo($_FILES['productImg']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['productImg']['tmp_name'], "uploads/Products/" . $new_file);
      $input['productImg'] = $new_file;
    }

    $input['editId'] = $_SESSION['adminId'];

    $this->ProductModel->UpdateProduct($input);

      $LogUpdate = array(
        'logProductProfileId' => $_SESSION['adminId'],
        'logProductStatus' => 'แก้ไข',
        'logProductType' => 'จัดการสินค้า',
        'logProductItem' => $product['product'][0]['productName'],
      );

      $this->LogModel->LogProduct($LogUpdate);


    if (@$_FILES['SubImg']['name'][0] != '') {
      $i = 0;
      foreach ($_FILES['SubImg']['name'] as $row) {
        $pathinfo = pathinfo($row, PATHINFO_EXTENSION);
        $new_file = "P".date('YmdHis'.$i) . "." . $pathinfo;
        move_uploaded_file($_FILES['SubImg']['tmp_name'][$i], "uploads/Products/" . $new_file);
        $SubImage[$i] = array(
          'proimageName' => $new_file,
          'editId' => $_SESSION['adminId'],
          'proimageProductid' => $input['productId'],
        );
        $i++;
      }
      $this->ProductModel->saveSubImage($SubImage);

      $LogUpdate = array(
        'logProductProfileId' => $_SESSION['adminId'],
        'logProductStatus' => 'แก้ไข',
        'logProductType' =>'จัดการสินค้า',
        'logProductItem' => $product['product'][0]['productName'],
      );

      $this->LogModel->LogProduct($LogUpdate);

    }

    echo "<script>alert('แก้ไขรูปภาพเรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product/ProductDetail/').$input['productId']. "'</script>";
  }

  public function UpdateDocProduct()
  {
    $input = $this->input->post();
    $idlog = $input['productId'];
    // $this->debug->log($input);
    $product = $this->ProductModel->SelectProductByID($idlog);
    $input['editId'] = $_SESSION['adminId'];
    $this->ProductModel->UpdateProduct($input);
      $LogUpdate = array(
        'logProductProfileId' => $_SESSION['adminId'],
        'logProductStatus' => 'แก้ไข',
        'logProductType' => 'จัดการสินค้า',
        'logProductItem' => $product['product'][0]['productName'],
      );
      $this->LogModel->LogProduct($LogUpdate);

    if (@$_FILES['Doc']['name'][0] != '') {
      $d = 0;
      foreach ($_FILES['Doc']['name'] as $row) {
        $pathinfo = pathinfo($row, PATHINFO_EXTENSION);
        $new_file = "D".date('YmdHis'.$d) . "." . $pathinfo;
        move_uploaded_file($_FILES['Doc']['tmp_name'][$d], "uploads/pdf/" . $new_file);
        $Document[$d] = array(
          'docName' => $row,
          'docFilename' => $new_file,
          'docProductid' => $input['productId'],
          'editId' => $_SESSION['adminId'],
        );
        $d++;
      }
      $this->ProductModel->saveDocument($Document);

      $LogUpdate = array(
        'logProductProfileId' => $_SESSION['adminId'],
        'logProductStatus' => 'แก้ไข',
        'logProductType' => 'จัดการสินค้า',
        'logProductItem' => $product['product'][0]['productName'],
      );

      $this->LogModel->LogProduct($LogUpdate);

    }

    echo "<script>alert('แก้ไขเอกสารเรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product/ProductDetail/').$input['productId']. "'</script>";
  }

  public function ProductImage()
  {

    $id = $this->uri->segment(4);
    $product = $this->ProductModel->SelectProductByID($id);

    $value = array(
      'Result' => array(
        'data' => $product,

      ),
      'View' => 'Back/ProductImage',
    );
    $this->LoadPage($value);
  }

  public function ProductDocument()
  {

    $id = $this->uri->segment(4);
    $product = $this->ProductModel->SelectProductByID($id);

    $value = array(
      'Result' => array(
        'data' => $product,

      ),
      'View' => 'Back/ProductDocument',
    );
    $this->LoadPage($value);
  }

  public function DeleteSubImage()
  {
    $id = $this->uri->segment(4);
    $Productid = $this->uri->segment(5);
    $this->ProductModel->DeleteSubImage($id);

    echo "<script>alert('ลบรูปภาพเรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product/ProductDetail/'.$Productid) . "'</script>";
  }

  public function DeleteDocument()
  {
    $id = $this->uri->segment(4);
    $Productid = $this->uri->segment(5);
    $this->ProductModel->DeleteDocument($id);

    echo "<script>alert('ลบเอกสารเรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Product/ProductDetail/'.$Productid) . "'</script>";
  }

  public function DeleteProduct()
  {
    $id = $this->uri->segment(4);
    $product = $this->ProductModel->SelectProductByID($id);
    $status = array(
      'productId' => $id,
      'editId' => $_SESSION['adminId'],
      'productStatus' => 2,
    );
    $this->ProductModel->UpdateProduct($status);

    $LogDelete = array(
      'logProductProfileId' => $_SESSION['adminId'],
      'logProductStatus' => 'ลบ',
      'logProductType' => 'จัดการสินค้า',
      'logProductItem' => $product['product'][0]['productName'],
    );

    $this->LogModel->LogProduct($LogDelete);

    echo "<script>alert('ลบสินค้าเรียบร้อยแล้ว')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Search') . "'</script>";
  }

  public function ProductQuick()
  {
    // $brand = $this->BrandModel->SelectBrand();
    // $category = $this->CategoryModel->SelectCategory();
    // $group = $this->GroupModel->SelectGroup();
    $SelectTech = $this->ProductModel->SelectTech();
    $SelectResolution = $this->ProductModel->SelectResolution();
    $SelectSize = $this->ProductModel->SelectSize();

    $value = array(
      'Result' => array(
        // 'brand' => $brand,
        // 'category' => $category,
        // 'group' => $group,
        'SelectTech' => $SelectTech,
        'SelectResolution' => $SelectResolution,
        'SelectSize' => $SelectSize,

      ),
      'View' => 'Back/ProductQuick',
    );
    $this->LoadPage($value);
  }

}
