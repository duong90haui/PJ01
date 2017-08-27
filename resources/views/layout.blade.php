{!! Form::open(array('route'=>'send','file'=>true)) !!}
{!! Form::label('hoten','Ho Ten') !!}
{!! Form::text('txHoten','',array('class'=>'input','placeholder'=>'vui long nhap ho ten')) !!}
<br /><br />
{!! Form::label('matkhau','Mat Khau') !!}
{!! Form::password('txPassword','',array('class'=>'input')) !!}
<br /><br />
{!! Form::label('email','Email') !!}
{!! Form::email('txEmail','',array('class'=>'input','placeholder'=>'vui long nhap email')) !!}
<br /><br />
{!! Form::label('ghichu','Ghi chu') !!}
{!! Form::textarea('txGhichu','',array('class'=>'input','placeholder'=>'vui long nhap ghi chu','rows'=>'5')) !!}
<br /><br />
{!! Form::label('gioitinh','Gioi Tinh') !!} 
{!! Form::radio('rdoGioitinh','nam',true) !!} Nam
{!! Form::radio('rdoGioitinh','nam',true) !!} Nu
<br /><br />
{!! Form::label('avatar','Hinh') !!}
{!! Form::file('Image') !!} 
<br /><br />

{!! Form::submit('Gui') !!} 


{!! Form::close() !!}