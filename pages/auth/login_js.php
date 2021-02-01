<script>
    $(document).ready(function() {

        // Init
        var params = new URL(window.location).searchParams;
        var username = params.get('un');
        var password = params.get('pw');
        var code = params.get('ac');
        $('.login-info-box').fadeOut();
        $('.login-show').addClass('show-log-panel');
        $("#username").val(username);
        $("#password").val(password);
        $("#code").val(code);

        // login
        $("#login").on("click", function() {
            if ($("#term")[0].checked == true) {
                $(this).val("true");
                if (username != "" && password != "" && code != "") {
                    $.ajax({
                        url: "model/auth_model.php",
                        type: "post",
                        data: {
                            type: 1,
                            username: username,
                            password: password,
                            code: code
                        },
                        success: function(res) {
                            if (res == "success") {
                                $(".alert-success").addClass("show");
                                setTimeout(function() {
                                    $(".alert-success").removeClass("show");
                                    window.location.href = "./pages/main/main.php";
                                }, 1500);
                            }
                            if (res == "failed") {
                                $(".alert-danger").addClass("show");
                                setTimeout(function() {
                                    $(".alert-danger").removeClass("show");
                                }, 3000);
                            }
                        }
                    });
                } else {
                    $(".alert-danger").addClass("show");
                    setTimeout(function() {
                        $(".alert-danger").removeClass("show");
                    }, 3000);
                }
            } else {
                $(".alert-danger .error_message").html("Please check term and condition.");
                $(".alert-danger").addClass("show");
                setTimeout(function() {
                    $(".alert-danger").removeClass("show");
                }, 3000);
            }
        });

        // ?un=general&pw=general$%^12345&ac=general12345
        // ?un=user&pw=user$%_!^12345&ac=user_12345

    });
</script>