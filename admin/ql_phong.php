<div class="container-fluid">
  <form name="ql_phong" action="ql_phong.php" method="post" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
      <tbody class="text-left">
        <tr>
          <th scope="row">Loại phòng</th>
          <td colspan="3"><select name="select_loaiphong">
            <option value=""></option>
          </select></td>
        </tr>
        <tr>
          <th scope="row">Tên phòng học</th>
          <td colspan="3"><input type="text" name="input_tenphong"></td>
        </tr>
        <tr>
          <th scope="row">Chức năng</th>
          <td><input type="text" name="input_chucnang"></td>
        </tr>
        <tr>
          <th scope="row">Mô tả chi tiết</th>
          <td><textarea></textarea></td>
        </tr>
        <tr>
          <th scope="row">Diện tích</th>
          <td><input type="text" name="input_dientich"></td>
        </tr>
        <tr>
          <th scope="row">Sức chứa</th>
          <td><input type="text" name="input_succhua"></td>
        </tr>
        <tr>
          <th scope="row">Sơ đồ</th>
          <td><input type="text" name="input_sodo"></td>
        </tr>
        <tr>
          <th scope="row">Vị trí</th>
          <td><input type="text" name="input_vitri"></td>
        </tr>
        <tr>
          <th scope="row">Hình ảnh</th>
          <td><div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div></td>
        </tr>
      </tbody>
    </table>
    <div>
      <input type="submit" name="" value="Thêm">
      <input type="submit" name="" value="Sửa">
      <input type="submit" name="" value="Xoá">
    </div>
  </form>
</div>

<!-- Phòng học
  id_phonghoc,id_loaiphong,ten_phonghoc,chuc_nang,mota_chitiet,dien_tich,suc_chua,so_do,vi_tri,hinh_anh
-->  
