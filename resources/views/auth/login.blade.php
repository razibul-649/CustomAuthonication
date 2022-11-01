<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authonication</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
  <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 20px">
            <h4>Login</h4>
            <hr>
            <form action="{{ route('login-user') }}" method="post">
                
                @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                    
                @endif
                @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    
                @endif
                
                @csrf
                
                <div class="form-group">
                    <label for="email">Email</label><br>
                    <input type="email" class="form-controll" placeholder="Enter Email Here" name="email" value="{{ old('email') }}">
                    <span class="text-danger">@error('email') {{ $message }}
                        @enderror</span>

                </div>

                <div class="form-group">
                    <label for="password">Password</label><br>
                    <input type="password" class="form-controll" placeholder="Enter Password" name="password" value="">

                    
                    <span class="text-danger">@error('password') {{ $message }}
                        @enderror</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit" style="margin-top:10px">login</button>
                </div>
                <br>
                <a href="registration"> New User !! Register Here</a>

                
            </form>
        </div>
      </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>