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

  public function SelectProductByFind($input,$groupId,$cateId)
  {
    $this->db->where('productStatus',1);
    $this->db->where('cateStatus',1);
    $this->db->where('brandStatus',1);
    $this->db->where('categroupStatus',1);

    if (isset($input['catebox'])) {
      $icate = 0;
      foreach ($input['catebox'] as $catebox) {
        if ($icate == 0) {
          $this->db->where('product.productCateid',$catebox);
        } else {
          $this->db->or_where('product.productCateid',$catebox);
        }
        $icate++;
      }
    }

    if (isset($input['brandbox'])) {
      $ibrand = 0;
      foreach ($input['brandbox'] as $brandbox) {
        if ($ibrand == 0) {
          $this->db->where('product.productBrandid',$brandbox);
        } else {
          $this->db->or_where('product.productBrandid',$brandbox);
        }
        $ibrand++;
      }
    }

    if ($input['min'] != '') {
      $this->db->where('product.productPrice >=',$input['min']);
    }

    if ($input['max'] != '') {
      $this->db->where('product.productPrice <=',$input['max']);
    }
    $this->db->where('product.productGroupid',$groupId);
    $this->db->join('brand','brand.brandId = product.productBrandid');
    $this->db->join('category','category.CateId = product.productCateid');
    $this->db->join('categroup','categroup.categroupId = product.productGroupid');
    $data = $this->db->get('product')->result_array();
    // echo "<pre>";
    // print_r($data);
    // exit();
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

    if (count($data['product']) == 0) {
      echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
      echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
      exit();
    }

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
