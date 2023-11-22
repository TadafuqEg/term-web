<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>term-contacts</title>
  <link rel="stylesheet" href="{{asset("css/contact.css")}}" />
</head>

<body>
  <div class="page service per contactus">
    <!-- nav -->
    <nav class="services-nav">
      <div class="logo-nav">
        <a href="{{route('web.index')}}"><img src="{{asset("assets/imgs/logo.png")}}" /></a>
      </div>
      <div class="nav-btn" id="btn">
        <img src="{{asset("assets/imgs/menu icon.png")}}" onclick="myFunction()" />
      </div>
      <ul class="nav-ul nav-ul2 remov" id="nav-ul">
        <li><a href="{{route('web.about')}}">About</a></li>
        <li><a href="{{route('web.services')}}">Services</a></li>
        <li><a href="{{route('web.proficiencies')}}">Proficiencies</a></li>
        <li class="active"><a>Contact Us</a></li>
      </ul>
    </nav>
    <!-- main-content -->
    <form class="frame-main cont" method="post" action="{{route('contact-us.store')}}">
      @csrf


      <div class="formm">
        <div class="card">
          <h2>Contact Us</h2>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>
                  Your Name
                  @if ($errors->has('name'))
                    <span style="color:red;font-size: 14px;">( {{ $errors->first('name') }} )</span>
                  @endif
              </label>
                <input type="text" name="name">
              </div>
              
            </div>

            <div class="col">
              <div class="form-group">
                <label>
                  Your Email
                  @if ($errors->has('email'))
                    <span style="color:red;font-size: 14px;">( {{ $errors->first('email') }} )</span>
                  @endif
                </label>
                <input type="text" name="email">
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label>
                  Phone
                  @if ($errors->has('phone_number'))
                    <span class="sp" style="color:red;font-size: 14px;">( {{ $errors->first('phone_number') }} )</span>
                  @endif
                </label>
                <input type="text" name="phone_number">
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label>
                  Company
                  @if ($errors->has('company'))
                    <span style="color:red;font-size: 12px;">( {{ $errors->first('company') }} )</span>
                  @endif
                </label>
                <input type="text" name="company">
              </div>
            </div>

            <div class="col-message">
              <div class="form-group">
                <label>
                  Your Message
                  @if ($errors->has('message'))
                    <span style="color:red;font-size: 14px;">( {{ $errors->first('message') }} )</span>
                  @endif
                </label>
                <textarea name="message" id="xx"></textarea>
              </div>
            </div>

            <div class="col col-submit">
              <input type="submit" value="Submit" />
            </div>
          </div>
        </div>
      </div>


      <div class="ppppp">
        <ul class="contact-ul">
          <li>
            <div class="trigger"><a href="mailto:info@term.ae"><img src="{{asset("assets/imgs/email.png")}}" class="mail" /></a>
            </div>
            <div class="hidden-content">
              <p>tadafuq email</p>

            </div>
          </li>
          
          <li>
            <div class="trigger"><a><img src="{{asset("assets/imgs/location.png")}}" /></a>
            </div>
            <div class="hidden-content">
              <p>tadafuq location</p>
            </div>
          </li>
          <li>
            <div class="trigger"><a href="https://www.facebook.com/term.infotech/"><img src="{{asset("assets/imgs/face.png")}}" /></a>
            </div>
            <div class="hidden-content">
              <p>https://www.facebook.com/term.infotech/</p>
            </div>
          </li>
          <li>
            <div class="trigger"><a href="https://www.instagram.com/term.infotech/"><img src="{{asset("assets/imgs/instgram.png")}}" /></a>
            </div>
            <div class="hidden-content">
              <p>https://www.instagram.com/term.infotech/</p>
            </div>
          </li>
          <li>
            <div class="trigger"><a href="https://www.tiktok.com/@term.infotech"><img src="{{asset("assets/imgs/tik.png")}}" /></a>
            </div>
            <div class="hidden-content">
              <p>https://www.tiktok.com/@term.infotech</p>
            </div>
          </li>
      </ul>
    </div>
  </div>
  <div class="footer">
    <div class="priv">
      <a href="{{route('web.privacy')}}">Privacy Policy</a>
      <a href="{{route('web.terms')}}">Terms and Conditions</a>
    </div>
    <div class="copy">
      <p>© Copyright 2023 Tadafuq. All rights reserved.</p>
    </div>
  </div>
  </div>


  



  <script>
    function myFunction() {
      var btn = document.getElementById("btn")
      var element = document.getElementById("nav-ul");
      btn.addEventListener('click', () => {
        if (element.classList.contains('remov')) {
          element.classList.remove('remov')
        }
        else {
          element.classList.add('remov')
        }

      })
    }
  </script>
 <script>
  var message = document.getElementById("xx")
	function myFunction() {
		alert("message send successfuly");
	}
</script>
  <!-- <script>
        function sendEmailDefault() {
            var email = "info@term.ae";
            var subject = "Test Email";
            var msgBody = "Thank you for contacting us, we will get back to you in 24 hours!";
            window.open(`mailto:${email}?subject=${subject}&body=${msgBody}`);
        }
    </script> -->
</body>

</html>