<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
    $Product = $this->HomepageModel->SelectProductRecommend();
    $NewProduct = $this->HomepageModel->SelectProductNew();
    $data = array(
      'NewProduct' => $NewProduct,
      'Product' => $Product,
      'Category' => $Category,
      'Group' => $Group,
    );

    // echo "<pre>";
    // print_r($data);
    // exit();


    $this->load->view('Front/themes/header',$data);
    // $this->load->view('Front/themes/slide');
    $this->load->view('Front/themes/menu');
    $this->load->view('Front/Home');
    $this->load->view('Front/themes/footer');
  }

  public function CategoryHome()
  {
    $Group = $this->GroupModel->SelectGroup();
    $cateId = $this->uri->segment(3);
    $GroupSelect = $this->GroupModel->SelectGroupById($cateId);
    if (count($GroupSelect) == 0) {
      echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
      echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
      exit();
    }
    $Category = $this->CategoryModel->HomeCategory($cateId);
    $Product = $this->HomepageModel->SelectProductByGroup($cateId);
    $Brand = $this->BrandModel->SelectBrand($cateId);


    $data = array(
      'Product' => $Product,
      'Category' => $Category,
      'Group' => $Group,
      'GroupSelect' => $GroupSelect,
      'Brand' => $Brand,
    );

    // echo "<pre>";
    // print_r($data);
    // exit();
    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/filter');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  }

  public function CategoryFind()
  {
    $input = $this->input->post();
    $groupId = $this->uri->segment(3);
    $cateId = 0;
    if (isset($input['catebox']) || isset($input['brandbox']) || $input['min'] != '' || $input['max'] != '') {

      $Group = $this->GroupModel->SelectGroup();
      $GroupSelect = $this->GroupModel->SelectGroupById($groupId);
      if (count($GroupSelect) == 0) {
        echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
        echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
        exit();
      }
      $Category = $this->CategoryModel->HomeCategory($groupId);
      $Product = $this->HomepageModel->SelectProductByFind($input,$groupId,$cateId);
      $Brand = $this->BrandModel->SelectBrand($groupId);
      $keyword = $input;

      $data = array(
        'Product' => $Product,
        'Category' => $Category,
        'Group' => $Group,
        'GroupSelect' => $GroupSelect,
        'Brand' => $Brand,
        'keyword' => $keyword,
      );

      // echo "<pre>";
      // print_r($keyword);
      // exit();
      $this->load->view('Front/themes/header',$data);
      $this->load->view('Front/themes/filter');
      // $this->load->view('Front/themes/menu');
      $this->load->view('Front/ProductList');
      $this->load->view('Front/themes/footer');
    } else {
      echo "<script>document.location='" . SITE_URL('Home/CategoryHome/'.$groupId) . "'</script>";
    }
  }
}
