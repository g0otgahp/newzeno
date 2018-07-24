<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomepageModel extends CI_Model
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

  public function SelectProductNew()
  {
    $data = $this->db
    ->where('productStatus',1)
    ->where('cateStatus',1)
    ->where('brandStatus',1)
    ->where('categroupStatus',1)
    ->order_by('productId','DESC')
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->join('categroup','categroup.categroupId = product.productGroupid')
    ->order_by('productId','DESC')
    ->get('product',8)
    ->result_array();

    return $data;
  }

  public function SearchProduct($key)
  {
    $data = $this->db
    ->where('productStatus',1)
    ->where('cateStatus',1)
    ->where('brandStatus',1)
    ->where('categroupStatus',1)
    ->where('productName LIKE',"%".$key."%")
    ->or_where('productDetail LIKE',"%".$key."%")
    ->or_where('productSubdetail LIKE',"%".$key."%")
    ->or_where('categroupName LIKE',"%".$key."%")
    ->or_where('cateName LIKE',"%".$key."%")
    ->or_where('brandName LIKE',"%".$key."%")
    ->or_where('brandName LIKE',"%".$key."%")
    ->order_by('productId','DESC')
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->join('categroup','categroup.categroupId = product.productGroupid')
    ->order_by('productId','DESC')
    ->get('product')
    ->result_array();
    return $data;
  }

  public function SelectProductRecommend()
  {
    $data = $this->db
    ->where('productStatus',1)
    ->where('cateStatus',1)
    ->where('brandStatus',1)
    ->where('categroupStatus',1)
    ->where('productFav',1)
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->join('categroup','categroup.categroupId = product.productGroupid')
    ->order_by('productId','DESC')
    ->get('product')
    ->result_array();

    return $data;
  }

  public function SelectHomeProduct()
  {
    $data = $this->db->where('categroupStatus',1)->get('categroup')->result_array();


    $i = 0;
    foreach ($data as $row) {
      $data[$i]['productlist'] = $this->db
      ->where('productStatus',1)
      ->where('cateStatus',1)
      ->where('brandStatus',1)
      ->where('categroupStatus',1)
      ->where('product.productGroupid',$row['categroupId'])
      ->join('brand','brand.brandId = product.productBrandid')
      ->join('category','category.CateId = product.productCateid')
      ->join('categroup','categroup.categroupId = product.productGroupid')
      ->get('product')
      ->result_array();
      $i++;
    }
    return $data;
  }

  public function SelectProductByGroup($cateId)
  {
    $data = $this->db
    ->where('productStatus',1)
    ->where('cateStatus',1)
    ->where('brandStatus',1)
    ->where('categroupStatus',1)
    ->where('product.productGroupid',$cateId)
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->join('categroup','categroup.categroupId = product.productGroupid')
    ->get('product')
    ->result_array();
    return $data;
  }

  public function SelectProductByCate($cateId)
  {
    $data = $this->db
    ->where('productStatus',1)
    ->where('cateStatus',1)
    ->where('brandStatus',1)
    ->where('categroupStatus',1)
    ->where('product.productCateid',$cateId)
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->join('categroup','categroup.categroupId = product.productGroupid')
    ->get('product')
    ->result_array();

    return $data;
  }

  public function SelectProductByProduct($ProductId)
  {
    $data['product'] = $this->db
    ->where('productId',$ProductId)
    ->where('productStatus',1)
    ->where('cateStatus',1)
    ->where('brandStatus',1)
    ->where('categroupStatus',1)
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->join('categroup','categroup.categroupId = product.productGroupid')
    ->get('product')
    ->result_array();

    $data['productImage'] = $this->db
    ->where('proimageStatus',1)
    ->where('proimageProductid',$data['product'][0]['productId'])
    ->get('productimage')
    ->result_array();

    $data['document'] = $this->db
    ->where('docStatus',1)
    ->where('docProductid',$data['product'][0]['productId'])
    ->get('doc')
    ->result_array();

    return $data;
  }


}
