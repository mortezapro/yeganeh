@if(\Illuminate\Support\Facades\Auth::user()->id != $row->id)
    <a href="{{ route("admin.user.login",["user"=>$row->mobile]) }}" class="btn btn-outline-primary">ورود به عنوان کاربر</a>
@endif
<a href="{{ route("admin.user.show",["user"=>$row->id]) }}" class="btn btn-primary">جزئیات</a>
