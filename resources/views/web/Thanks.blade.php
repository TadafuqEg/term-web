<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset("assets/imgs/TERM fav.png")}}" type="image/x-icon">
    <title>Term-thanks-page</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}" />
    <style>
        .thanks{
            position: relative;
            top:0;
            width:100%;
            height:100vh;
            display:flex;
            align-items:center;
            justify-content: center;
            
        } 
        .thanks-img{
             position: absolute;
            top:0%;
            width:100%;
            height:100% !important; 
            display:flex;
            align-items:center;
            justify-content: center;
            background:#000;
        }  
        .thanks-img p{
            position: absolute;
            font-size:50px;
            font-weight:bolder;
            color:#fff;
            z-index: 9999999;
            margin-top:12%;
        } 
        .thanks-img img{
            transform:scale(.5);
        } 
    </style>
</head>
<body>
    <div class="thanks">
      <div class="thanks-img">
           <img src="{{asset("assets/imgs/thanks.svg")}}" /> 
           <p>Thanks For Submition</p>
      </div>
      <!-- pluse button -->
      <div class='paluse-container'>
                <a href="{{route('web.homepage')}}"><span class='pulse-button'>back home</span></a>
        </div>
    </div>
</body>
</html>