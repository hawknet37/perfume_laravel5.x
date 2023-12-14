@extends('layout')

@section('content')
<section id="form">
    <!--form-->
    <div class="container">
        <div class="col-sm-3 col-sm-offset-1">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {!! session()->get('message') !!}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger">
                    {!! session()->get('error') !!}
                </div>
            @endif
            <div class="login-form">
                <h2>Đổi mật khẩu</h2>
                <form action="{{ URL::to('/reset-password') }}" method="POST">
                    {{ csrf_field() }}          
                    <!-- Các trường mật khẩu mới và xác nhận mật khẩu -->
                    <input type="password" name="new_password" placeholder="Mật khẩu mới" required>
                    <input type="password" name="confirm_password" placeholder="Xác nhận mật khẩu mới" required>
                    <!-- Nút submit -->
                    <button type="submit" class="btn btn-default" id="passwordChangeBtn">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--/form-->

<script>
    @if(session()->has('logout_after_success'))
        
        setTimeout(function(){
            window.location.href = '{{ URL::to('/logout-checkout') }}';
        }, 1000);
    @endif
</script>
@endsection
