<html>
  <head>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <style>
        body {
            outline: none;
            width: 100%;
            height: 100%;
            margin: 50px auto;
            background: black;
            box-sizing: border-box;
            font-family: "Montserrat", sans-serif;
        }

        #wrapper {
            width: 100%;
            height: 100%;
            margin: 0 auto;
        }
        .logo{
            width: 320px;
            height: auto;
            margin: 0 auto;
            padding: 60px;

        }
        .logo  > img{
            margin: 0 auto;
            display: block;
        }
        #box{
            width: 50%;
            height: auto;
            margin: 0 auto;
            background: #fff;
            border: thin solid #ededed;
            padding: 60px 5px;
            border-radius: 15px;
        }

        #box > img {
            width: 16px;
            height: auto;
            display: block;
            margin: 0 auto;
            padding: 30px 0 20px 0;
        }

        #box > h3 {
            text-transform: uppercase;
            text-align: center;
            font-size: 0.9em;
            color: #666;
            margin: 0 0 35px 0;
        }

        #box > form {
            width: 100%;
            height: auo;
            margin: 0 auto;
            text-align: center;
        }

        #box > form > input {
            display: inline-block;
            width: 260px;
            height: 50px;
            margin: 5px auto;
            padding: 15px;
            box-sizing: border-box;
            font-size: 0.8em;
            border: 1.5px solid #cccccc;
            transition: all 0.2s ease;
        }

        #box > form > input:focus {
            border: thin solid #015b7e;
            outline: none;
        }

        ::-webkit-input-placeholder {
            color: #ccc;
            font-weight: 700;
            font-size: 0.9em;
        }

        #box > a {
            display: block;
            margin: 0;
            padding: 5px 0 15px 0;
            width: 260px;
            height: 20px;
            margin: 0 auto;
            text-align: right;
            text-transform: uppercase;
            font-size: 0.7em;
            color: #ccc;
            font-weight: 400;
        }

        #box > input {
            width: 260px;
            height: 50px;
            background: #015b7e;
            border: none;
            outline: none;
            margin: 0 auto;
            display: block;
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: 700;
            font-size: 0.7em;
            transition: all 0.2s ease;
        }

        #box > input:hover {
            background: #014965;
        }

        #box > .signup {
            width: 100%;
            height: auto;
            border: none;
            background: #f5f5f5;
            outline: none;
            margin: 0 auto;
            padding: 20px;
            display: block;
            color: #666;
            text-transform: uppercase;
            text-align: center;
            box-sizing: border-box;
            font-size: 0.8em;
        }

        #box > .signup p, a {
            font-size: 0.8em;
            text-decoration: none;
        }

        #box > .signup p {
            color: #ccc;
        }

        #box > .signup a {
            text-decoration: none;
            color: #015b7e;
            font-size: 1em;
            padding-left: 25px;
        }
        .alert {
  width: 50%;
  margin: 20px auto;
  padding: 30px;
  position: relative;
  border-radius: 5px;
  box-shadow: 0 0 15px 5px #ccc;
}

.close {
  position: absolute;
  width: 30px;
  height: 30px;
  opacity: 0.5;
  border-width: 1px;
  border-style: solid;
  border-radius: 50%;
  right: 15px;
  top: 25px;
  text-align: center;
  font-size: 1.6em;
  cursor: pointer;
}

/* .alert{font-family: -apple-system,BlinkMacSystemFont,'Roboto','Segoe UI','Oxygen-Sans','Ubuntu','Cantarell','Helvetica Neue',sans-serif;
    min-height: 38px;
    width: 320px;
    padding: 12px 15px 15px;
    margin: 5px auto;
    border-radius: 4px;
    border-left: 4px solid;
	opacity:1;
} */
.warning {
    background: white;
    color: #d93025;
}
.info {
    background: rgba(186, 208, 228, .37);
    color: #00539f;
    border-color: #00539f;
}
.success {
    background: #edf7ee;
    color: #4CAF50;
    border-color: #4CAF50;
}
.tip {
    background: #fff5e6;
    color: #ff9800;
    border-color: #ff9800;
}
.alert-close{
	   padding-left: 15px;
    font-weight: bold;
    float: right;
    font-size: 20px;
    line-height: 18px;
    cursor: pointer;
	   transition:.30s all;
}
.alert-close:hover{
	color:#000;
}
.alert code, .alert .mark{
    background: #fff;
    opacity: 0.9;
    padding: 3px 5px;
    border-radius: 4px;
    font-family: Consolas,Monaco,'Andale Mono',monospace;
    font-size: 89%;
    font-weight: normal;
}
    </style>
  </head>
  <body>
    <div class="wrapper">
        <div class="logo">
            
            <img src="{{asset("assets\imgs\logo.png")}}" alt="">
        </div>
        <div id="box">
          
        
        @if (\Session::has('error-message'))
            <div class="alert warning">
                <span class='alert-close' onclick="this.parentElement.style.display='none';">&times;</span>
                <b>Warning</b><br>
                <ul>
                    <li>{!! \Session::get('error-message') !!}</li>
                </ul>
            </div>
                
        @endif

        @if($errors->any())
            <div class="alert warning">
                <span class='alert-close' onclick="this.parentElement.style.display='none';">&times;</span>
                <b>Warning</b><br>
                <ul>
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                </ul>
            </div>
           
        @endif
        <h3>Please sign in</h3>
        <form method="POST" action="{{route('dashboard.login')}}">
            @csrf
          <input type="text" placeholder="Email" name="email" />
          <input type="password" placeholder="password" name="password" />
          <input onclick="this.style.backgroundColor = '#69c061';" type="submit" value="Login"/>
        </form>
         {{-- <a href="#">forgot ?</a> --}}
        
        {{-- <div class="signup">
          <p>not a member ? <a href="#">sign up</a></p>
        </div> --}}
      </div>
    </div>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  </body>
</html>