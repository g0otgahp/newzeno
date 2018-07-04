<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductModel extends CI_Model
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

  public function SelectProduct()
  {
    $data = $this->db
    ->where('productStatus',1)
    ->where('cateStatus',1)
    ->where('brandStatus',1)
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->get('product')
    ->result_array();
    return $data;
  }

  public function SelectProductByID($id)
  {
    $data['product'] = $this->db
    ->where('productId',$id)
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->get('product')
    ->result_array();

    $data['productImage'] = $this->db
    ->where('proimageStatus',1)
    ->where('proimageProductid',$data['product'][0]['productId'])
    ->get('productimage')
    ->result_array();

    // echo "<pre>";
    // print_r($data);
    // exit();
    return $data;

  }
}
