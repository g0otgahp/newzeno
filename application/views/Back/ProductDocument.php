<div class="content">
  <div class="container-fluid">
    <?php echo form_open_multipart('Admin/Product/UpdateProduct') ?>

    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card">
          <div class="header">
            <button type="submit" class="btn btn-info btn-fill pull-right">ลงทะเบียนเอกสารแนบ</button>
            <h4 class="title">แก้ไขรูปภาพสินค้า</h4>
          </div>
          <div class="content">

            <input type="hidden" name="productId" value="<?php echo $data['product'][0]['productId'] ?>" >
            <input type="hidden" name="productImg" value="<?php echo $data['product'][0]['productImg'] ?>" >

          </div>
        </div>
      </div>
    </div>


    <div class="col-md-12 animate-box">
    <div class="card">
      <div class="header">
        <h4 class="title">เอกสารเพิ่มเติม</h4>
      </div>
      <div class="content">
        <div class="row">
          <div class="form-group">
            <div class="col-md-4">
            <label>เอกสาร <span style="color:red; font-size:11px;">*PDF เท่านั้น</span></label>
            <input type="file" accept="application/pdf" name="Doc[]" class="form-control" multiple>
            <br>
          </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">

              <?php if (empty($data['document'])): ?>

                <div class="" align="center">
                  <h4>ยังไม่ได้เพิ่มเอกสารแนบ</h4>
                </div>

              <?php else: ?>

                <table class="table table-hover dataTable">
                  <thead>
                    <tr>
                      <th width="20px;">ลำดับ</th>
                      <th>ชื่อ</th>
                      <th>ตัวเลือก</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $i=1; foreach ($data['document'] as $document): ?>
                      <tr>
                        <td><?php echo $i ?></td>
                        <td><a href="<?php echo BASE_URL('uploads/pdf/'.$document['docFilename']); ?>" target="_blank"><?php echo $document['docName'] ?></a></td>
                        <td>
                          <a href="<?php echo SITE_URL('Admin/Product/DeleteDocument/'.$document['docId']."/".$data['product'][0]['productId']);?>" class="btn btn-info btn-danger"
                          onClick="javascript: return confirm('ต้องการลบเอกสารนี้ใช่หรือไม่')">ลบ
                        </a>
                      </td>
                    </tr>
                    <?php $i++; endforeach; ?>

                  </tbody>
                </table>

              <?php endif; ?>

              </div>
          </div>
        </div>
      </div>
    </div>
  </div>






      <?php echo form_close() ?>
