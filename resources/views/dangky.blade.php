
<!DOCTYPE html>
<html>
<body>

<form enctype="multipart/form-data" action="{!! route('postDangky') !!}" method="POST" name="frmThem"  >

<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<table>
    <tr>
        <td>Môn H?c</td>
        <td><input type="text" name="txtMonHoc" />
        {!! $errors->first('txtMonHoc') !!}
        </td>
    </tr>
    
    <tr>
        <td>Giá Ti?n</td>
        <td><input type="text" name="txtGiaTien" />
        {!! $errors->first('txtGiaTien') !!}
        </td>
    </tr>
    
    <tr>
        <td>Gi?ng Viên</td>
        <td><input type="text" name="txtGiangVien" />
        {!! $errors->first('txtGiangVien') !!}
        </td>
    </tr>
    
  
    <tr>
        <td>Hinh anh</td>
        <td><input type="file" name="fImages" />
       
        </td>
    </tr>
    
    <tr>
        <td>
        <input type="submit" name="btnGui" value="Thêm" />
        </td>
   </tr>
</table>
</form>
</body>
</html>