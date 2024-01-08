<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/materialize-stepper@2.1.4/materialize-stepper.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">
    <link rel="icon" href="{{asset("assets/imgs/TERM fav.png")}}" type="image/x-icon">
    <title>term-getquotation</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/new-form.css")}}">
    
    <style> 
     .select2-selection ,.select2-container{
            min-width: 250px !important;
        }
      #wrapper {
      text-align: center;
      }
      #selectCountry{
        padding:10px 0 !important;
        background:red;
        color:#fff;
        margin-left:20% !important;
      }
      .all-flex{
        display:flex;
        width:50%;
        justify-content:start;
        gap:50px;
      }
      .select-selected:after {
        position: absolute;
        content: "";
        top: 19px;
      }
     .fflex{
       display:flex;
       align-items:center !important;
     }
     .fflex .input2-plus{
      width:400px !important;
      margin-left:30px;
      border:1px solid #000 !important;
      text-align:center;
      color:#000;
     }
     .f-flex{
      display:flex;
     }
     .f-flex input{
       width:50%;
       margin-top:-30px;
       margin-left:20px;
     }
     .f-flex label{
      border:0;
     }
     .step2{
      position: absolute;
      bottom: -80px !important;
     }
     .step3{
      position: absolute;
      bottom: -140px !important;
     }
     ul.stepper.horizontal .step-actions {
      position: absolute;
      bottom: 0;
      left:50% !important;
      width: 50% !important;
      padding: 20px;
      background-color: transparent;
      -ms-flex-direction: row-reverse;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: reverse;
      flex-direction: row-reverse;
     }
     @media (max-width: 900px){
           .nav>.nav-btn {
              display: inline-block;
              position: absolute;
              right: 40px;
              top: 35px;
           }
           .active {
              background-color: #fff !important;
              border: none !important;
              height: 100%;
            }
            .step-actions {
               position: relative;
               width: 100%;
             }
             ul.stepper.horizontal .step-content {
             padding: 0px 0px 75px 0px !important;
             }
             [type="checkbox"]+label {
              position: relative;
              padding-left: 17px !important;
              font-size:13px !important;
             }
             [type="checkbox"].filled-in+label:before, [type="checkbox"].filled-in+label:after {
               content: '';
               left: -8px !important;
             }
             .select-items div, .select-selected { 
                width: 200px;
             }
             
             .all-flex {
              display: flex;
              width: 100%;
            }
            .fflex {
              display: flex;
              align-items: start !important;
              flex-direction: column;
              justify-content: start !important;
            }
            .fflex .input2-plus {
             width: 270px !important;
            }
            .step2,.step3 {
              bottom: 0px !important;
            }
            .keywords {
             font-size: 35px;
            }
            ul.stepper.horizontal .step-actions {
             position: absolute;
             top:70%;
             left: 40% !important;
            }
            ul.stepper.horizontal .step-content {
                overflow:auto: !important;
             }
     }
     @media (max-width:767px){
        ul.stepper.horizontal .step-actions {
        position: absolute;
        bottom: 0;
        left: 0% !important;
        width: 100% !important;
        padding: 20px;
     }
     }

     .toast {
      color: #000;
      line-height: 1.5;
      margin-bottom: 1em;
      padding: 1.25em;
      position: absolute;
      right: -365px;
      top: 1em;
      transition: 0.15s ease-in-out;
      width: 325px;
     }

     .toast.on {
      transform: translateX(-365px);
     }

     .close {
      cursor: pointer;
      float: right;
      font-size: 1.25rem;
      line-height: 1;
      margin-left: 1em;
      opacity: .8;
     }

     .jam {
      background-color: red;
      color: #fff;
     }
     .getqu .nav .active{
      height:auto !important;
     }
     .zip-code{
        width:50%
     }
     .iti {
       position: relative;
       display: inline-block;
       width: 92% !important;
       top: -30px;
       left: 16px;
       z-index: 999999;
     }
    </style>

</head>

<body>
    <div class="getqu">

        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
              <div class="nav-title">
                <a href="{{route('web.homepage')}}"><img src="{{asset("assets/imgs/logo.png")}}" /></a>
              </div>
            </div>
            <div class="nav-btn">
              <label for="nav-check">
                <img src="{{asset("assets/imgs/menu icon.png")}}" />
              </label>
            </div>
            
            <div class="nav-links">
                <a href="{{route('web.about')}}">About</a>
                <a href="{{route('web.services')}}">Services</a>
                <a href="{{route('web.proficiencies')}}">Proficiencies</a>
                <a href="{{route('web.contact-us')}}">Contact Us</a>
                <a href="{{route('web.getquotation')}}" class="active">Get Quotation</a>
            </div>
        </div>

        <div class="guo-main-content">
         <h2 class="hh">Search</h2>

          <div class="selects">
            <form method="post" action="{{route('web.ClientIntakeForm.store')}}">
                @csrf
                <input type="radio" class="hidden" id="step-0" name="progress" checked />
                <fieldset class="show-when-checked">
                    <div class="tab flex-item">
                        <div class="form--header-container">
                            <h1 class="form--header-title">
                                Client Intake Form
                            </h1>
        
                            <p class="form--header-text">
                                Please fill in the required informations
                            </p>
                        </div>
                        <div class="inputs">
                            <div class="input-container">
                                <div class="flex inputs-1">
                                    <div class="input-1 did-floating-label-content">
                                        <label class="did-floating-label" for="first-name">First Name</label>
                                        <input id="first-name" class="did-floating-input" type="text" name="first_name" placeholder="">
        
                                    </div>
                                    <div class="input-1 did-floating-label-content">
                                        <label class="did-floating-label" for="last-name">Last Name</label>
                                        <input id="last-name" class="did-floating-input" type="text" name="last_phone" placeholder=" ">
        
                                    </div>
                                    <div class="input-1 did-floating-label-content">
                                        <label class="did-floating-label" for="phone">Phone</label>
                                        <input id="phone" class="did-floating-input" type="text" name="phone" placeholder=" ">
        
                                    </div>
                                    <div class="input-1 did-floating-label-content">
                                        <label class="did-floating-label" for="email">Email</label>
                                        <input id="email" class="did-floating-input" type="text" name="email" placeholder=" ">
        
                                    </div>
                                </div>
        
                                <div class="flex inputs-2">
                                    <div class="input-2 did-floating-label-content">
                                        <label class="did-floating-label" for="company">Company / Organization</label>
                                        <input id="company" class="did-floating-input" type="text" name="company_or_organization" placeholder="">
        
                                    </div>
                                    <div class="input-2 did-floating-label-content">
                                        <label class="did-floating-label" for="position">Position</label>
                                        <input id="position" class="did-floating-input" type="text" name="position" placeholder=" ">
        
                                    </div>
                                    <div class="input-2 did-floating-label-content">
                                        <label class="did-floating-label" for="adress">Adress</label>
                                        <input id="adress" class="did-floating-input" type="text" name="address" placeholder=" ">
        
                                    </div>
                                    <div class="input-2 did-floating-label-content">
                                        <label class="did-floating-label" for="">Empty</label>
                                        <input id="" class="did-floating-input" type="text" name="empty" placeholder=" ">        
                                    </div>
                                </div>
        
                                <div class="flex inputs-3">
                                    <div class="input-2 did-floating-label-content">
                                        <label class="did-floating-label" for="postal">Postal / Zip code</label>
                                        <input id="postal" class="did-floating-input" type="text" name="postal_code" placeholder="">
        
                                    </div>
                                    <div class="input-2 did-floating-label-content p2">
                                        <label class="did-floating-label" for="country">Country</label>
                                        <div class="center">
                                            <select name="sources" id="sources" name="country" class="custom-select sources"
                                                placeholder="choose country">
                                                @foreach ($countries as $country)
                                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
        
                                    </div>
                                    <div class="input-2 did-floating-label-content">
                                        <label class="did-floating-label" for="city">City</label>
                                        <input id="city" class="did-floating-input" type="text" name="city" placeholder=" ">
        
                                    </div>
                                    <div class="input-2 did-floating-label-content">
                                        <label class="did-floating-label" for="">State</label>
                                        <div class="center">
                                            {{-- <select name="sources" id="sources" name="state" class="custom-select sources"
                                                placeholder="choose state">
                                                <option value="profile">State 1</option>
                                                <option value="word">State 2</option>
                                                <option value="hashtag">State 3</option>
                                            </select> --}}
                                            <input id="state" class="did-floating-input" type="text" name="state" placeholder=" ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contain-btn">
                        <label for="step-1" class="enable-when-valid">
                            <div class="play-button-container">
                                <div class="play-button">
                                    <span class="content">Next Step</span>
                                    <span class="play-icon"><img src="./play (1).svg" /></span>
                                </div>
                               
                            </div>
                        </label>
                    </div>
                </fieldset>
        
                <input type="radio" class="hidden" id="step-1" name="progress" />
                <fieldset class="show-when-checked show-when-checked2">
                    <div class="filed2">
                        <div class="tab flex-item">
                            <div class="form--header-container">
                                <h1 class="form--header-title">
                                    Research Dataset
                                </h1>
        
                                <p class="form--header-text">
                                    Please fill in the required informations
                                </p>
                            </div>
                            <div class="filed2-contain">
                                <div class="text-inputs">
                                    <p>Subject of the study : For which company, brand, persona, or organization do you
                                        wish<br />
                                        to conduct a study with us ?</p>
                                    <textarea name="subject_of_study"></textarea>
        
        
                                    <p>Please give us the list of the keywords (company and/or organisation and/or brand(s)
                                        <br />
                                        and/or persona(s)) that the subject of the study is known for (separate each keyword
                                        with<br />
                                        a “;”)
                                    </p>
                                    <textarea name="list_of_the_keywords_company_or_organization_or_brand_or_persona"></textarea>
        
        
                                    <p>Please give us the list of the hashtags the subject of the study typically uses
                                        (brand,<br />
                                        slogan, etc), those associated with it (events, promotion, etc), or ones you simply want
                                        us<br />
                                        to monitor for you (separate each keyword with a “;”)</p>
                                    <textarea name="list_of_the_hashtags_the_subject_of_the_study_typically_uses"></textarea>
        
        
                                    <p>Please select the research sources you would like us to explore </p>
                                    <div class="social-tabs">
                                        <div class="flex-container1">
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="facebook">
                                                <div class="social-button">Facebook</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="twitter">
                                                <div class="social-button">Twitter</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="instagram">
                                                <div class="social-button">Instagram</div>
                                            </label>
                                        </div>
                                        <div class="flex-container2">
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="google">
                                                <div class="social-button">Google</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="youtube">
                                                <div class="social-button">Youtube</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="linkedin">
                                                <div class="social-button">Linkedin</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="telegram">
                                                <div class="social-button">Telegram</div>
                                            </label>
                                        </div>
                                        <div class="flex-container3">   
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="tiktok">
                                                <div class="social-button">Tiktok</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="news">
                                                <div class="social-button">News</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="web">
                                                <div class="social-button">Web</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="blog">
                                                <div class="social-button">Blog</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="research_sources_you_would_like_us_to_explore[]" value="forum">
                                                <div class="social-button">Forum</div>
                                            </label>
                                        </div>
                                        
                                    </div>
        
        
                                    <p>Besides the proposed sources, are there any other sources you find interesting to<br />
                                        explore? (Please separate sources with a " ; " if there are many)</p>
                                    <textarea name="besides_the_proposed_sources"></textarea>
        
        
                                    <p>Is there a specific known URL or groups/pages in social media that you have has a<br />
                                        specific interest on ? (Please separate sources with a " ; " if there are many)</p>
                                    <textarea name="specific_known_URL_or_groups_or_pages_in_social_media"></textarea>
        
        
                                    <p>Please provide, if applicable, the URL addresses of accounts related to the subject of
                                        the<br />
                                        study online presence (Please separate different URL with a ";" if there are multiple.)
                                    </p>
                                    <textarea name="url_addresses_of_accounts_related_subject_study_online_presence"></textarea>
        
        
                                    <p>Which service delivery formula are you interested in?</p>
                                    <div class="check-boxs">
                                        <label class="flex-container">3-MONTH SUBSCRIPTION<br />(3 month reports)
                                            <input type="radio" checked="checked" name="service_delivery_formula_are_you_interested_in" value="3-MONTH SUBSCRIPTION">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="flex-container">6-MONTH SUBSCRIPTION<br />(6 month reports)
                                            <input type="radio" name="service_delivery_formula_are_you_interested_in" value="6-MONTH SUBSCRIPTION">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="flex-container">1-YEAR SUBSCRIPTION<br />(12 month reports)
                                            <input type="radio" name="service_delivery_formula_are_you_interested_in" value="1-YEAR SUBSCRIPTION">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="flex-container">ONE SHOT
                                            <input type="radio" name="service_delivery_formula_are_you_interested_in" value="ONE SHOT">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
        
                                    <p>Which service delivery formula are you interested in?</p>
                                    <div class="social-tabs social-tabs2">
                                        <div class="flex-container4">
                                            <!-- <button class="month3" id="month3">Last 3 months</button>
                                            <button class="month6" id="month6">Last 6 months</button>
                                            <button class="month9" id="month9">Last 9 months</button>
                                            <button class="year" id="year">Last Year</button> -->
                                            <label>
                                                <input type="checkbox" name="service_delivery_formula_are_you_interested_in_2" value="3month">
                                                <div class="social-button">Last 3 months</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="service_delivery_formula_are_you_interested_in_2" value="6month">
                                                <div class="social-button">Last 6 months</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="service_delivery_formula_are_you_interested_in_2" value="9month">
                                                <div class="social-button">Last 9 months</div>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="service_delivery_formula_are_you_interested_in_2" value="year">
                                                <div class="social-button">Last Year</div>
                                            </label>
        
                                        </div>
                                        <div class="date">
                                            <p>or Specific Period : From </p>
                                            <input type="date" name="date_from" id="dateofbirth">
                                            <span>To</span>
                                            <input type="date" name="date_to" id="dateofbirth">
                                        </div>
        
                                    </div>
        
                                    <p>Please provide any information that you believe is important for the successful<br />
                                        completion of the study</p>
                                    <textarea name="information_believe_important_for_successful_completion_study"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
        
        
                    <div class="contain-btn">
                        <div class="tog">
                            <label for="step-0">Previous</label>
                            <label for="step-2" class="enable-when-valid">Next</label>
        
                        </div>
                    </div>
                </fieldset>
        
        
        
                <input type="radio" class="hidden" id="step-2" name="progress" />
                <fieldset class="show-when-checked show-when-checked2">
                    <div class="tab vv flex-item">
                        <div class="listening">
                            <p class="F-P">Social Listening</p>
                            <p class="L-P">The analysis set proposed below pertains to all conversations<br />
                                containing all or part of the keywords and hashtags provided<br />
                                earlier across the selected sources</p>
                        </div>
                        <p class="bo-bt">Please select the analyses you would like to be included in your study</p>
                        <div class="listening-tabs">
                            <div class="flex btn1">
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Document collection & distribution by source">
                                    <div class="social-button">Document collection & distribution by source</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Document distribution by languagee">
                                    <div class="social-button">Document distribution by language</div>
                                </label>
                            </div>
                            <div class="flex btn2">
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Document Distribution by Users Gender">
                                    <div class="social-button">Document Distribution by Users Gender</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Geographical Analysise">
                                    <div class="social-button">Geographical Analysis</div>
                                </label>
                            </div>
                            <div class="flex btn3">
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Sentiment Analysise">
                                    <div class="social-button">Sentiment Analysis</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Sentiment Analysis by source">
                                    <div class="social-button">Sentiment Analysis by source</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Key Positive Topicse">
                                    <div class="social-button">Key Positive Topics</div>
                                </label>
                            </div>
                            <div class="flex btn4">
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Key Positive Themes & Hashtags">
                                    <div class="social-button">Key Positive Themes & Hashtags</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Positive Influencers Identificatione">
                                    <div class="social-button">Positive Influencers Identification</div>
                                </label>
                            </div>
                            <div class="flex btn5">
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Positive Influencers Profiling">
                                    <div class="social-button">Positive Influencers Profiling</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Key Negative Topicse">
                                    <div class="social-button">Key Negative Topics</div>
                                </label>
                            </div>
                            <div class="flex btn6">
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Key Negative Themes & Hashtags">
                                    <div class="social-button">Key Negative Themes & Hashtags</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Negative Influencers Identificatione">
                                    <div class="social-button">Negative Influencers Identification</div>
                                </label>
                            </div>
                            <div class="flex btn7">
                                <label>
                                    <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included_in_your_study[]" value="Negative Influencers Profilinge">
                                    <div class="social-button">Negative Influencers Profiling</div>
                                </label>
                            </div>
                        </div>
        
                    </div>
                    <div class="contain-btn">
                        <div class="tog">
                            <label for="step-1">Previous</label>
                            <label for="step-3" class="enable-when-valid">Next</label>
        
                        </div>
                    </div>
                </fieldset>
        
                <input type="radio" class="hidden" id="step-3" name="progress" />
                <fieldset class="show-when-checked show-when-checked2">
                    <div class="tab flex-item">
                        <div class="listening">
                            <p class="F-P">Social Presence</p>
                            <p class="L-P">The analysis set proposed below delves into the<br />
                                conversations that have taken place on the accounts of the<br />
                                subject of the study, based on the earlier provided keywords<br />
                                and hashtags</p>
                        </div>
                        <p class="bo-bt">Please select the analyses you would like to be included in your study</p>
                        <div class="listening-tabs">
                            <div class="flex btn1">
                               <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Social Presence distribution by platform">
                                    <div class="social-button">Social Presence distribution by platform</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Social Media Influence Scores By Platform">
                                    <div class="social-button">Social Media Influence Scores By Platform</div>
                                </label>
                            </div>
                            <div class="flex btn2">
                               <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Engagement Performances By source">
                                    <div class="social-button">Engagement Performances By source</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Social presence Topic">
                                    <div class="social-button">Social presence Topics</div>
                                </label>
                            </div>
                            <div class="flex btn2">
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Engagement Performances by Topic for each source">
                                    <div class="social-button">Engagement Performances by Topic for each source</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Social Presence by frequency / periods">
                                    <div class="social-button">Social Presence by frequency / periods</div>
                                </label>
                            </div>
                            <div class="flex btn3">
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Facebook page Tops">
                                    <div class="social-button">Facebook page Tops</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="X (Twitter) account">
                                    <div class="social-button">X (Twitter) account</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Instagram account">
                                    <div class="social-button">Instagram account</div>
                                </label>
                            </div>
                            <div class="flex btn4">
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Authenticity Analysis of Active Profiles">
                                    <div class="social-button">Authenticity Analysis of Active Profiles</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Activity Distribution by Profile">
                                    <div class="social-button">Activity Distribution by Profile</div>
                                </label>
                            </div>
                            <div class="flex btn5">
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Negative Spreading by Profile Type">
                                    <div class="social-button">Negative Spreading by Profile Type</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Top inauthentic Profile (Facebook)">
                                    <div class="social-button">Top inauthentic Profile (Facebook)</div>
                                </label>
                            </div>
                            <div class="flex btn6">
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Top inauthentic Profile (X)">
                                    <div class="social-button">Top inauthentic Profile (X)</div>
                                </label>
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Top inauthentic Profile (Instagram)">
                                    <div class="social-button">Top inauthentic Profile (Instagram)</div>
                                </label>
                            </div>
                            <div class="flex btn7">
                               
                                <label>
                                    <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included_in_your_study[]" value="Bots identification (TOP25)">
                                    <div class="social-button">Bots identification (TOP25)</div>
                                </label>
                            </div>
                        </div>
        
                    </div>
                    <div class="contain-btn">
                        <div class="tog tog2">
                            <label for="step-2">Previous</label>
                            <label for="" class="enable-when-valid" onclick="submitForm()">SEND THE REQUEST FORM</label>
        
                        </div>
                    </div>
                </fieldset>
        
            </form>
          </div>
            @if(session()->has('error'))
                <div class="toast jam" aria-hidden="true">
                 <span class="close" aria-role="button" tabindex="0">&times;</span>
                    {{ session()->get('error') }}
                 </div>
            @endif
        </div> 
    </div>
  
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(".custom-select").each(function () {
            var classes = $(this).attr("class"),
                id = $(this).attr("id"),
                name = $(this).attr("name");
            var template = '<div class="' + classes + '">';
            template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
            template += '<div class="custom-options">';
            $(this).find("option").each(function () {
                template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
            });
            template += '</div></div>';

            $(this).wrap('<div class="custom-select-wrapper"></div>');
            $(this).hide();
            $(this).after(template);
        });
        $(".custom-option:first-of-type").hover(function () {
            $(this).parents(".custom-options").addClass("option-hover");
        }, function () {
            $(this).parents(".custom-options").removeClass("option-hover");
        });
        $(".custom-select-trigger").on("click", function () {
            $('html').one('click', function () {
                $(".custom-select").removeClass("opened");
            });
            $(this).parents(".custom-select").toggleClass("opened");
            event.stopPropagation();
        });
        $(".custom-option").on("click", function () {
            $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
            $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
            $(this).addClass("selection");
            $(this).parents(".custom-select").removeClass("opened");
            $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
        });
    </script>
    <script>
        // document.addEventListener("DOMContentLoaded", function () {
        //     // Initialize intlTelInput on the phone input field
        //     const input = document.querySelector("#phone");
        //     const iti = window.intlTelInput(input, {
        //         utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
        //     });
        // });

        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            autoPlaceholder:"polit",
            formatOnDisplay:true,
            hiddenInput: "countryCode",

            placeholderNumberType: "MOBILE",
            preferredCountries: ['ae'],
            separateDialCode: true,
        });
        $('form').submit(function(e){
            e.preventDefault;
            let phone = $('input[name="phone"]').val()
            $('input[name="phone"]').val($('.iti__selected-dial-code').text()+phone);
            console.log($('.iti__selected-dial-code').text());
        })
    </script>

    <script>
        function submitForm()
        {
            $('form').submit();
        }
    </script>
    <script>
      $(document).ready(function() {
         $('.select2').select2();
      });
    </script>
    <script>
      $(document).ready(function() {
         $('#mySelect2').select2();
      });
    </script>
    
    <script>
        $(document).ready(function () {
            $('.stepper').activateStepper();
            $('.selectCountry').on('change',function(){
                let id = $(this).find(":selected").data('id');
                $.ajax({url: `/cities-select-options/${id}`, success: function(result){
                    $(`.selectRegion`).html(result)
                    $(`.selectRegion`).trigger("change");
                }});
                
            });
        })

        function validateStepOne() {
         
            if ($('.step').first().find('input[type="checkbox"]:checked').length)
                return true;
            return false;
        }

        var validation = $.isFunction($.fn.valid) ? 1 : 0;

        $.fn.isValid = function () {
            if (validation) {
                return this.valid();
            } else {
                return true;
            }
        };

        $.fn.submitStepper = function (step) {
            var form = this.closest('form');
            if (form.isValid()) {
                form.submit();
            }
        };

        $.fn.nextStep = function (callback, activefb, e) {
            var stepper = this;
            var settings = $(stepper).data('settings');
            var form = this.closest('form');
            var active = this.find('.step.active');
            var next = $(this.children('.step:visible')).index($(active)) + 2;
            var feedback = active.find('.next-step').length > 1 ? (e ? $(e.target).data("feedback") : undefined) : active.find('.next-step').data("feedback");
            if ((settings.parallel && $(active).validateStep()) || (!settings.parallel && form.isValid())) {
                if (feedback && activefb) {
                    if (settings.showFeedbackLoader) stepper.activateFeedback();
                    return window[feedback].call();
                }
                active.removeClass('wrong').addClass('done');
                this.openStep(next, callback);
                return this.trigger('nextstep');
            } else {
                return active.removeClass('done').addClass('wrong');
            }
        };
       
        // back button
        $.fn.prevStep = function (callback) {
            var active = this.find('.step.active');
            if (active.hasClass('feedbacking')) return;
            var prev = $(this.children('.step:visible')).index($(active));
            active.removeClass('wrong');
            this.openStep(prev, callback);
            return this.trigger('prevstep');
        };

        $.fn.openStep = function (step, callback) {
            var settings = $(this).closest('ul.stepper').data('settings');
            var $this = this;
            var step_num = step - 1;
            step = this.find('.step:visible:eq(' + step_num + ')');
            if (step.hasClass('active')) return;
            var active = this.find('.step.active');
            var next;
            var prev_active = next = $(this.children('.step:visible')).index($(active));
            var order = step_num > prev_active ? 1 : 0;
            if (active.hasClass('feedbacking')) $this.destroyFeedback();
            active.closeAction(order);
            step.openAction(order, function () {
                if (settings.autoFocusInput) step.find('input:enabled:visible:first').focus();
                $this.trigger('stepchange').trigger('step' + (step_num + 1));
                if (step.data('event')) $this.trigger(step.data('event'));
                if (callback) callback();
            });
        };

        $.fn.closeAction = function (order, callback) {
            var closable = this.removeClass('active').find('.step-content');
            if (window.innerWidth < 993 || !this.closest('ul').hasClass('horizontal')) {
                closable.stop().slideUp(300, "easeOutQuad", callback);
            } else {
                if (order == 1) {
                    closable.animate({ left: '-100%' }, function () { closable.css({ display: 'none', left: '0%' }, callback); });
                } else {
                    closable.animate({ left: '100%' }, function () { closable.css({ display: 'none', left: '0%' }, callback); });
                }
            }
        };
   
        $.fn.openAction = function (order, callback) {
            var openable = this.removeClass('done').addClass('active').find('.step-content');
            if (window.innerWidth < 993 || !this.closest('ul').hasClass('horizontal')) {
                openable.slideDown(300, "easeOutQuad", callback);
            } else {
                if (order == 1) {
                    openable.css({ left: '100%', display: 'block' }).animate({ left: '0%' }, callback);
                } else {
                    openable.css({ left: '-100%', display: 'block' }).animate({ left: '0%' }, callback);
                }
            }
        };

        $.fn.activateStepper = function (options) {
            var settings = $.extend({
                linearStepsNavigation: true,
                autoFocusInput: true,
                showFeedbackLoader: true,
                autoFormCreation: true,
                parallel: false
            }, options);
            $(document).on('click', function (e) {
                if (!$(e.target).parents(".stepper").length) {
                    $('.stepper.focused').removeClass('focused');
                }
            });

            $(this).each(function () {
                var $stepper = $(this);
                if (!$stepper.parents("form").length && settings.autoFormCreation) {
                    var method = $stepper.data('method');
                    var action = $stepper.data('action');
                    var method = (method ? method : "GET");
                    action = (action ? action : "?");
                    $stepper.wrap('<form action="' + action + '" method="' + method + '"></form>');
                }

                $stepper.data('settings', { linearStepsNavigation: settings.linearStepsNavigation, autoFocusInput: settings.autoFocusInput, showFeedbackLoader: settings.showFeedbackLoader, parallel: $stepper.hasClass('parallel') });
                $stepper.find('li.step.active').openAction(1);
                $stepper.find('>li').removeAttr("data-last");
                $stepper.find('>li.step').last().attr('data-last', 'true');

                $stepper.on("click", '.step:not(.active)', function () {
                    var object = $($stepper.children('.step:visible')).index($(this));
                    if ($stepper.data('settings').parallel && validation) { // Invoke parallel stepper behaviour
                        $(this).addClass('temp-active');
                        $stepper.validatePreviousSteps()
                        $stepper.openStep(object + 1);
                        $(this).removeClass('temp-active');
                    } else if (!$stepper.hasClass('linear')) {
                        $stepper.openStep(object + 1);
                    } else if (settings.linearStepsNavigation) {
                        var active = $stepper.find('.step.active');
                        if ($($stepper.children('.step:visible')).index($(active)) + 1 == object) {
                            $stepper.nextStep(undefined, true, undefined);
                        } else if ($($stepper.children('.step:visible')).index($(active)) - 1 == object) {
                            $stepper.prevStep(undefined);
                        }
                    }
                }).on("click", '.next-step', function (e) {
                    e.preventDefault();
                    $stepper.nextStep(undefined, true, e);
                }).on("click", '.previous-step', function (e) {
                    e.preventDefault();
                    $stepper.prevStep(undefined);
                }).on("click", "button:submit:not(.next-step, .previous-step)", function (e) {
                    e.preventDefault();
                    feedback = e ? $(e.target).data("feedback") : undefined;
                    var form = $stepper.closest('form');
                    if (form.isValid()) {
                        if (feedback) {
                            stepper.activateFeedback();
                            return window[feedback].call();
                        }
                        form.submit();
                    }
                }).on("click", function () {
                    $('.stepper.focused').removeClass('focused');
                    $(this).addClass('focused');
                });
            });
        };

        $.fn.validateStep = function () {
            var stepper = this.closest('ul.stepper');
            var form = this.closest('form');
            var step = $(this);
            
            var validator = step.find('.next-step').data("validator");
            if (this.validateStepInput()) {
                if (validator) {
                    if (window[validator].call()) {
                        step.removeClass('wrong').addClass('done');
                        return true;
                    }
                    else {
                        step.removeClass('done').addClass('wrong');
                        return false;
                    }
                }
                step.removeClass('wrong').addClass('done');
                return true;
            } else {
                step.removeClass('done').addClass('wrong');
                return false;
            }
        };

        $.fn.validateStepInput = function () {
            var valid = true;
            if (validation) {
                $(this).find('input.validate').each(function () {
                    if (!$(this).valid()) {
                        valid = false;
                        return false;
                    }
                });
            }
            return valid;
        };
    
    </script>
    
    <script>
     $(function () {
         $(document).ready(function () {
         $('.toast').addClass('on');
     });

     $('.close').click(function() {
     $('.toast').removeClass('on');
     });
     });
    </script>
 
</body>
</html>