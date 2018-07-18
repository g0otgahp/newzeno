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

        $cateId = 1;
        $Category = $this->CategoryModel->HomeCategory($cateId);
        $Product = $this->HomepageModel->SelectHomeProduct();

        $data = array(
          'Product' => $Product,
          'Category' => $Category,
          'Group' => $Group,
        );

        // echo "<pre>";
        // print_r($data);
        // exit();


        $this->load->view('Front/themes/header',$data);
        $this->load->view('Front/themes/slide');
        // $this->load->view('Front/themes/menu');
        $this->load->view('Front/Home');
        $this->load->view('Front/themes/footer');
    }

    public function CategoryHome()
    {
        $Group = $this->GroupModel->SelectGroup();
        $cateId = $this->uri->segment(3);
        $GroupSelect = $this->GroupModel->SelectGroupById($cateId);
        $Category = $this->CategoryModel->HomeCategory($cateId);
        $Product = $this->HomepageModel->SelectProductByGroup($cateId);

        $data = array(
          'Product' => $Product,
          'Category' => $Category,
          'Group' => $Group,
          'GroupSelect' => $GroupSelect,
        );


        $this->load->view('Front/themes/header',$data);
        $this->load->view('Front/themes/filter');
        // $this->load->view('Front/themes/menu');
        $this->load->view('Front/ProductList');
        $this->load->view('Front/themes/footer');
    }
}
