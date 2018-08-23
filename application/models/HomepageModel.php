<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomepageModel extends CI_Model
{

  public function LoadHead()
  {
    $TitleGroup = $this->HomepageModel->SelectTitleGroup();
    $Group = $this->GroupModel->SelectGroup();
    $data = array(
      'TitleGroup' => $TitleGroup,
      'Group' => $Group,
    );
    $this->load->view('Front/themes/header',$data);
  }

  public function PreProduct($Product,$value)
  {
    $PreProduct = array();
    if ($value == "True") {
      $key = 1;
      $PreProduct['new'] = 0;
    } elseif ($value == "New") {
      $key = 1;
      $PreProduct['new'] = 1;
    } else {
      $key = 0;
      $PreProduct['new'] = 0;
    }
    $PreProduct['PreProduct'] = $Product;
    $PreProduct['value'] = $key;
    $this->load->view('Front/ProductPreview',$PreProduct);
  }

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
    ->get('product',4)
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
    ->get('product',4)
    ->result_array();

    return $data;
  }

  public function SearchProduct($key)
  {

    $data = $this->db
    ->where('productName LIKE',"%".$key."%")
    // ->or_where('product.productDetail LIKE',"%".$key."%")
    ->or_where('product.productSubdetail1 LIKE',"%".$key."%")
    ->or_where('product.productSubdetail2 LIKE',"%".$key."%")
    ->or_where('product.productSubdetail3 LIKE',"%".$key."%")
    ->or_where('product.productSubdetail4 LIKE',"%".$key."%")
    ->or_where('product.productSubdetail5 LIKE',"%".$key."%")
    ->or_where('product.productSubdetail6 LIKE',"%".$key."%")
    ->or_where('categroup.categroupName LIKE',"%".$key."%")
    ->or_where('category.cateName LIKE',"%".$key."%")
    ->or_where('brand.brandName LIKE',"%".$key."%")
    ->order_by('productId','DESC')
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->join('categroup','categroup.categroupId = product.productGroupid')
    ->order_by('productId','DESC')
    ->get('product')
    ->result_array();

    $array = [];
    foreach ($data as $row) {
      if ($row['productStatus'] == 1 && $row['cateStatus'] == 1 && $row['brandStatus'] == 1 && $row['categroupStatus'] == 1) {
        array_push($array, $row);
      }
    }

    return $array;
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

    if ($input['wordsearch'] != '') {
      $this->db->where('product.productName LIKE',"%".$input['wordsearch']."%");
    }

    if (isset($input['catebox'])) {
          $this->db->where_in('product.productCateid',$input['catebox']);
    }

    if (isset($input['brandbox'])) {
          $this->db->where_in('product.productBrandid',$input['brandbox']);
    }

    if ($input['min'] != '') {
      $this->db->where('product.productPrice >=',$input['min']);
    }

    if ($input['max'] != '') {
      $this->db->where('product.productPrice <=',$input['max']);
    }

    if (isset($input['sortbyprice'])) {
      $this->db->order_by('product.productPrice',$input['sortbyprice']);
    }

    $this->db->where('product.productGroupid',$groupId);
    $this->db->join('brand','brand.brandId = product.productBrandid');
    $this->db->join('category','category.CateId = product.productCateid');
    $this->db->join('categroup','categroup.categroupId = product.productGroupid');
    $data = $this->db->get('product')->result_array();
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

  public function SelectTitleGroup()
  {

    $dataSelect = $this->db
    ->where('catetitleStatus',1)
    ->get('catetitle')
    ->result_array();

    $g=0;
    foreach ($dataSelect as $group) {
      $dataSelect[$g]['group'] = $this->db
      ->where('categroupStatus',1)
      ->where('categroup.catetitleId',$group['catetitleId'])
      ->get('categroup')
      ->result_array();

      $i=0;
      foreach ($dataSelect[$g]['group'] as $cate) {
        $dataSelect[$g]['group'][$i]['category'] = $this->db
        ->where('cateStatus',1)
        ->where('categroupId',$cate['categroupId'])
        ->get('category')
        ->result_array();
        $i++;
      }
      $g++;
    }
    // echo "<pre>";
    // print_r($dataSelect);
    // exit();
    return $dataSelect;
  }

}
