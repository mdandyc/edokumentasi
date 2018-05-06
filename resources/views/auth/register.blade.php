<!DOCTYPE html>
<html>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Register</title>
    <link rel="stylesheet" href="/css/style2.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
          <img src="/images/asd.png" height="53px">
          <br>

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" name="username" value="{{ old('username') }}" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required ></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="text"  name="name" value="{{ old('name') }}" onBlur="if(this.value == '') this.value = 'Name'" onFocus="if(this.value == 'Name') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><span class="fontawesome-user"></span><input type="text" name="email" value="{{ old('email') }}" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><select id="jabatan" type="text" class="form-control" name="jabatan" value="{{ old('jabatan') }}" required autofocus>
                                    <option value="staff">Staff</option>
                                    <option value="admin">Admin</option>
                                </select></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><span class="fontawesome-user"></span><input type="text" name="alamat" value="{{ old('alamat') }}" onBlur="if(this.value == '') this.value = 'Alamat'" onFocus="if(this.value == 'Alamat') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="text"  name="phone" value="{{ old('phone') }}" onBlur="if(this.value == '') this.value = 'Phone'" onFocus="if(this.value == 'Phone') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><span class="fontawesome-lock"></span><input type="password"  name="password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p>
            <p><span class="fontawesome-lock"></span><input type="password"  name="password_confirmation" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p>
            <p><input type="submit" value="Sign In"></p>


          </fieldset>

        </form>

        <p><a href="login.html">Login now</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>