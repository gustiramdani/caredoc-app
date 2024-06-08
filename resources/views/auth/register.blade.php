<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{!!asset('assets/images/caredoc_sOg_icon.ico')!!}" type="image/gif" sizes="16x16">
    <title>Caredoc | Login</title>
    <link rel="stylesheet" href="{!!asset('assets/css/style_login.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/fontawesome/all.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/bootstrap/bootstrap.css')!!}">
    <script src="{!! asset("js/iconify.js?v=".time()) !!}" charset="utf-8"></script>

</head>

<body>
    <form action="{!! route('register.store') !!}" method="POST">
        @csrf
        <div class="form-box">
            <h1>Register Page</h1>
            <div class="input-box">
                <iconify-icon icon="mdi:pencil"></iconify-icon>
                <input type="text" placeholder="name" autocomplete="off" name="name">
                @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="input-box">
                <iconify-icon icon="mdi:user"></iconify-icon>
                <input type="text" placeholder="email" autocomplete="off" name="email">
                @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="input-box">
                <iconify-icon icon="mdi:key"></iconify-icon>
                <input type="password" placeholder="password" autocomplete="off" id="myInput" name="password">
                @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="eye" onclick="myFunction()">
                    <iconify-icon id="hide1" icon="mdi:eye"></iconify-icon>
                    <iconify-icon id="hide2" icon="ph:eye-slash-fill"></iconify-icon>
                </span>
            </div>
            <button type="submit" name="masuk" class="login-btn">Register</button>
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