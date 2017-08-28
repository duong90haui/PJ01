@if (count($errors) > 0)

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

@endif
<form action="{!! route('postDangky') !!}" method="POST" name="frmThem">
<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<table>
    <tr>
        <td>M�n H?c</td>
        <td><input type="text" name="txMonHoc" /></td>
    </tr>
    <tr>
        <td>Gi� Ti?n</td>
        <td><input type="text" name="txGiaTien" /></td>
    </tr>
    <tr>
        <td>Gi?ng Vi�n</td>
        <td><input type="text" name="txGiangVien" /></td>
    </tr>
    <tr>
        <td>
        <input type="submit" name="btnGui" value="Th�m" />
        </td>
    </tr>
</table>
</form>
