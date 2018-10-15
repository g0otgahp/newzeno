<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductModel extends CI_Model
{

  public function CheckingProduct($input)
  {
    $data = $this->db
    ->where('productName',$input['productName'])
    ->where('productPrice',$input['productPrice'])
    ->where('productBrandid',$input['productBrandid'])
    ->where('productGroupid',$input['productGroupid'])
    ->where('productCateid',$input['productCateid'])
    ->where('productTechId',$input['productTechId'])
    ->where('productResolution',$input['productResolution'])
    ->where('productSizeId',$input['productSizeId'])
    ->get('product')
    ->result_array();
    return $data;
  }

  public function SelectProduct()
  {
    $data = $this->db
    ->where('productStatus',1)
    ->where('cateStatus',1)
    ->where('brandStatus',1)
    ->where('categroupStatus',1)
    ->order_by('product.productId','DESC')
    ->join('brand','brand.brandId = product.productBrandid')
    ->join('category','category.CateId = product.productCateid')
    ->join('categroup','categroup.categroupId = product.productGroupid')
    ->get('product')
    ->result_array();
    return $data;
  }

  public function SelectSearchProduct($input)
  {
    $this->db->where('productStatus',1);
    $this->db->where('cateStatus',1);
    $this->db->where('brandStatus',1);
    $this->db->where('categroupStatus',1);

    if (isset($input['groupbox'])) {
      $this->db->where_in('product.productGroupid',$input['groupbox']);
    }

    if (isset($input['catebox'])) {
      $this->db->where_in('product.productCateid',$input['catebox']);
    }

    if (isset($input['brandbox'])) {
      $this->db->where_in('product.productBrandid',$input['brandbox']);
    }

    if (isset($input['resulotion'])) {
      $this->db->where_in('product.productResolution',$input['resulotion']);
    }

    if (isset($input['tech'])) {
      $this->db->where_in('product.productTechId',$input['tech']);
    }

    if ($input['Size-min'] != '') {
      $this->db->where('product.productSizeId >=',$input['Size-min']);
    }

    if ($input['Size-max'] != '') {
      $this->db->where('product.productSizeId <=',$input['Size-max']);
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

    $this->db->join('brand','brand.brandId = product.productBrandid');
    $this->db->join('category','category.CateId = product.productCateid');
    $this->db->join('categroup','categroup.categroupId = product.productGroupid');
    $data = $this->db->get('product')->result_array();
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

    $data['document'] = $this->db
    ->where('docStatus',1)
    ->where('docProductid',$data['product'][0]['productId'])
    ->get('doc')
    ->result_array();

    return $data;

  }

  public function saveProduct($input)
  {

    // echo "<pre>";
    // print_r($input);
    // exit();

    $this->db->insert('product',$input);
    $id = $this->db->insert_id();
    return $id;
  }

  public function UpdateProduct($input)
  {

    $this->db->where('productId',$input['productId'])->update('product',$input);
  }

  public function saveSubImage($SubImage)
  {
    $this->db->insert_batch('productimage',$SubImage);
  }

  public function saveDocument($Document)
  {
    $this->db->insert_batch('doc',$Document);
  }

  public function DeleteDocument($id)
  {
    $this->db->where('docId',$id)->delete('doc');
  }

  public function DeleteSubImage($id)
  {
    $this->db->where('proimageId',$id)->delete('productimage');
  }

  public function SelectTech()
  {
    $data = $this->db
    ->order_by('techId','ASC')
    ->where('techStatus',1)
    ->get('technology')
    ->result_array();
    return $data;
    }

  public function SelectResolution()
  {
    $data = $this->db
    ->order_by('resolutionId','ASC')
    ->where('resolutionStatus',1)
    ->get('resolution')
    ->result_array();
    return $data;
    }

  public function SelectSize()
  {
    $data = $this->db
    ->order_by('SizeId','ASC')
    ->where('SizeStatus',1)
    ->get('size')
    ->result_array();
    return $data;
    }

    public function SelectProductRestore()
    {
      $data = $this->db
      ->select('productId,productName,brandName,brandImg,categroupName')
      ->join('brand','brand.brandId = product.productBrandid')
      ->join('categroup','categroup.categroupId = product.productGroupid')
      ->where('productStatus',2)
      ->get('product')
      ->result_array();
      return $data;
    }

    public function UpdateProductRestore($productId)
    {

      $dataUpdateRestore = array(
        'productStatus' => 1 ,
      );

    $this->db->where('productId',$productId)
    ->update('product',$dataUpdateRestore);

    }
}
