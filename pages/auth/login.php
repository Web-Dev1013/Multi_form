<?php
    include("login_css.php");
?>
<div class="alert alert-danger fade w-25 float-right">
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong> Failed! </strong> <span class="error_message">You are not logged in!</span>.
</div>
<div class="alert alert-success fade w-25 float-right">
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong> Success! </strong> Successfully Logged In!.
</div>
<div class="login-reg-panel">
    <div class="login-info-box text-center">
        <h2 class="mt-5">Have an account?</h2>
        <label id="label-register" class="mx-auto mt-5" for="log-reg-show">Login</label>
        <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
    </div>

    <div class="register-info-box text-center">
        <p class="h4">
            This is an authentication-protected multiple pages form with submitted data being written to MySQL.
        </p>
    </div>

    <div class="white-panel">
        <div class="login-show">
            <h2>LOGIN</h2>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <input type="text" class="form-control" id="code" name="code" placeholder="Access Code">
            <input type="checkbox" id="term" name="term" value="">
            <span class="px-2">I understand that my responses are anonymous</span><br>
            <i><small class="note text-danger"></small></i>
            <button class="btn btn-outline-primary px-5 mt-3 float-right" id="login">Login</button>
        </div>
    </div>
</div>

<?php
    include("login_js.php");
?>