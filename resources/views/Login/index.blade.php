<!DOCTYPE html>
<html>
<body>
<form action="" method="POST" name="frmLogin"  >
<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<table>
    <tr>
        <td>Username</td>
        <td><input type="text" name="user" />
        {!! $errors->first('user') !!}
        </td>
    </tr>
    
    <tr>
        <td>Password</td>
        <td><input type="text" name="pass" />
        {!! $errors->first('pass') !!}
        </td>
    </tr>
      
    <tr>
        <td>
        <input type="submit" name="btnLogin" value="Login" />
        </td>
   </tr>
</table>
</form>
</body>
</html>