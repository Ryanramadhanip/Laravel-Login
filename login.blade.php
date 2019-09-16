<div class="card"> 
    <div class="body">
        @if(Session::has('pesan'))
        <div class="alert alert-danger">
            {{ Session('pesan') }}
        </div>
        @endif
        <form action="{{ url('login/cek') }}" method="POST" id="sign_in">
        {{ csrf_field() }}
        <div class="msg">
            Sign in to start your session
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">Person</i>
            </span>
            <div class="form-line">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">Lock</i>
            </span>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 p-t-5">
                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                <label for="rememberme">Remember Me</label>
            </div>
            <div class="col-xs-4">
                <button class="btn btn-black bg-pink waves-effect" type="submit">SIGN IN</button>
            </div>
        </div>
        <div class="row m-t-15 m-b--20">
            <div class="col-xs-6">
                <a href="sign-up.html">Register Now!</a>
            </div>
            <div class="col-xs-6 align-right">
                <a href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
        </form>
    </div>
</div>