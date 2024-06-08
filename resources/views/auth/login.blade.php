<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{!!asset('assets/images/caredoc_sOg_icon.ico')!!}" type="image/gif" sizes="16x16">
    <title>Caredoc | Login</title>
    <link rel="stylesheet" href="{!!asset('assets/css/style_login.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/fontawesome/all.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/bootstrap/bootstrap.css')!!}">
</head>

<body>
    <form action="{!! route('login.authenticate') !!}" method="POST">
        @csrf
        <div class="form-box">
            <h1>Login Page</h1>
            <div class="input-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="email" autocomplete="off" name="email">
                @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="input-box">
                <i class="fa fa-key" aria-hidden="true"></i>
                <input type="password" placeholder="password" autocomplete="off" id="myInput" name="password">
                @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="eye" onclick="myFunction()">
                    <i id="hide1" class="fa fa-eye"></i>
                    <i id="hide2" class="fa fa-eye-slash"></i>
                </span>
            </div>
            <button type="submit" name="masuk" class="login-btn">LOGIN</button>
        </div>
    </form>
</body>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");
        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        } else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script>

</html>