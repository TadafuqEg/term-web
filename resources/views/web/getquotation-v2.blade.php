<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/materialize-stepper@2.1.4/materialize-stepper.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">
    <link rel="icon" href="{{asset("assets/imgs/TERM fav.png")}}" type="image/x-icon">
    <title>term-getquotation</title>
    <link rel="stylesheet" href="{{asset("css/new-form.css")}}">
    
    <style> 
    
      input.invalid {
        border: 2px solid red;
      }
      input.success{
        border: 2px solid #fff;
      }
      .tab {
        display: none;
      }
      .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
      }

      .step.active {
        opacity: 1;
      }

      .step.finish {
        background-color: #04AA6D;
      }
      .control-btns{
        width:40%;
        margin:auto;
        display:flex;
        justify-content:space-between;
        margin-top:50px;
      }
      .control-btns2{
        justify-content:center !important;
      }
      .control-btns button{
        width:45%;
        background-color:#F85C3D;
        border:2px solid #fff;
        height: 50px;
        border-radius:20px;
        font-size:25px;
        color:#fff;
      }
      .control-btns button:hover{
        background-color:transparent;
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



        <form id="regForm" method="post" action="{{route('web.ClientIntakeForm.store')}}">
           <!-- One "tab" for each step in the form: -->
           <div class="tab">
             <div class="form--header-container">
                <h1 class="form--header-title">
                    Client Intake Form
                </h1>

                <p class="form--header-text">
                    Please fill in the required informations
                </p>
             </div>
             <div class="tabs">

                <div class="flex inputs-1">
                    <div class="input-1 did-floating-label-content">
                        <label class="did-floating-label" for="first-name">First Name</label>
                        <input id="first-name" class="did-floating-input input-v" type="text" name="first_name" placeholder="">

                    </div>
                    <div class="input-1 did-floating-label-content">
                        <label class="did-floating-label" for="last-name">Last Name</label>
                        <input id="last-name" class="did-floating-input input-v" type="text" name="last_phone" placeholder=" ">

                    </div>
                    <div class="input-1 input-11 did-floating-label-content">
                        <label class="did-floating-label" for="phone">Phone</label>
                        <input id="phone" class="did-floating-input input-v" type="text" name="phone" placeholder=" ">

                    </div>
                    <div class="input-1 did-floating-label-content">
                        <label class="did-floating-label" for="email">Email</label>
                        <input id="email" class="did-floating-input input-v" type="text" name="email" placeholder=" ">

                    </div>
                </div>

                
                <div class="flex inputs-2">
                    <div class="input-2 did-floating-label-content">
                        <label class="did-floating-label" for="company">Company / Organization</label>
                        <input id="company" class="did-floating-input input-v" type="text" name="company_or_organization"
                            placeholder="">

                    </div>
                    <div class="input-2 did-floating-label-content">
                        <label class="did-floating-label" for="position">Position</label>
                        <input id="position" class="did-floating-input input-v" type="text" name="position" placeholder=" ">

                    </div>
                    <div class="input-2 did-floating-label-content">
                        <label class="did-floating-label" for="adress">Adress</label>
                        <input id="adress" class="did-floating-input input-v" type="text" name="address" placeholder=" ">

                    </div>
                    <div class="input-2 did-floating-label-content">
                        <label class="did-floating-label" for="">Empty</label>
                        <input id="" class="did-floating-input input-v" type="text" name="empty" placeholder=" ">
                    </div>
                </div>


                <div class="flex inputs-3">
                    <div class="input-2 did-floating-label-content">
                        <label class="did-floating-label" for="postal">Postal / Zip code</label>
                        <input id="postal" class="did-floating-input input-v" type="text" name="postal_code" placeholder="">

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
                        <input id="city" class="did-floating-input input-v" type="text" name="city" placeholder=" ">

                    </div>
                    <div class="input-2 input-12 did-floating-label-content">
                        <label class="did-floating-label" for="">State</label>
                        <div class="center">

                            <input id="state" class="did-floating-input input-v" type="text" name="state" placeholder=" ">
                        </div>
                    </div>
                </div>
             </div>

             <div style="overflow:auto;">
               <div class="control-btns control-btns2">
                 <label for="step-1" class="enable-when-valid">
                    <div class="play-button-container">
                        <div class="play-button" id="nextBtn" onclick="nextPrev(1)">
                            <span class="content">Next Step</span>
                            <span class="play-icon"><img src="{{asset("assets/imgs/play (1).svg")}}" /></span>
                        </div>
                               
                    </div>
                 </label>
               </div>
             </div>
           </div>

             <!-- seconed -->
           <div class="tab">
             <div class="filed2">
                <div class="tabb flex-item">
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
                                    <label>
                                        <input type="radio" name="service_delivery_formula_are_you_interested_in_2" value="3month">
                                        <div class="social-button">Last 3 months</div>
                                    </label>
                                    <label>
                                        <input type="radio" name="service_delivery_formula_are_you_interested_in_2" value="6month">
                                        <div class="social-button">Last 6 months</div>
                                    </label>
                                    <label>
                                        <input type="radio" name="service_delivery_formula_are_you_interested_in_2" value="9month">
                                        <div class="social-button">Last 9 months</div>
                                    </label>
                                    <label>
                                        <input type="radio" name="service_delivery_formula_are_you_interested_in_2" value="year">
                                        <div class="social-button">Last Year</div>
                                    </label>

                                </div>
                                <div class="date">
                                    <p>or Specific Period : From </p>
                                    <input type="date" name="date_from" id="dateofbirth" class="input-v" />
                                    <span>To</span>
                                    <input type="date" name="date_to" id="dateofbirth" class="input-v" />
                                </div>

                            </div>

                            <p>Please provide any information that you believe is important for the successful<br />
                                completion of the study</p>
                            <textarea name="information_believe_important_for_successful_completion_study"></textarea>
                        </div>
                    </div>
                    
                </div>
              </div>


              <div style="overflow:auto;">
                <div class="control-btns">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                       <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
              </div>


           </div>


           <div class="tab">
            <div class="tabb vv flex-item">
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
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Document collection & distribution by source">
                            <div class="social-button">Document collection & distribution by source</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Document distribution by languagee">
                            <div class="social-button">Document distribution by language</div>
                        </label>
                    </div>
                    <div class="flex btn2">
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Document Distribution by Users Gender">
                            <div class="social-button">Document Distribution by Users Gender</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Geographical Analysise">
                            <div class="social-button">Geographical Analysis</div>
                        </label>
                    </div>
                    <div class="flex btn3">
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Sentiment Analysise">
                            <div class="social-button">Sentiment Analysis</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Sentiment Analysis by source">
                            <div class="social-button">Sentiment Analysis by source</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Key Positive Topicse">
                            <div class="social-button">Key Positive Topics</div>
                        </label>
                    </div>
                    <div class="flex btn4">
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Key Positive Themes & Hashtags">
                            <div class="social-button">Key Positive Themes & Hashtags</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Positive Influencers Identificatione">
                            <div class="social-button">Positive Influencers Identification</div>
                        </label>
                    </div>
                    <div class="flex btn5">
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Positive Influencers Profiling">
                            <div class="social-button">Positive Influencers Profiling</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Key Negative Topicse">
                            <div class="social-button">Key Negative Topics</div>
                        </label>
                    </div>
                    <div class="flex btn6">
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Key Negative Themes & Hashtags">
                            <div class="social-button">Key Negative Themes & Hashtags</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Negative Influencers Identificatione">
                            <div class="social-button">Negative Influencers Identification</div>
                        </label>
                    </div>
                    <div class="flex btn7">
                        <label>
                            <input type="checkbox" name="social_Listening_analyses_you_would_like_to_be_included[]" value="Negative Influencers Profilinge">
                            <div class="social-button">Negative Influencers Profiling</div>
                        </label>
                    </div>
                </div>

            </div>


            <div style="overflow:auto;">
             <div class="control-btns">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
             </div>
           </div>
            
           </div>


           <div class="tab">
            <div class="tabb flex-item">
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
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Social Presence distribution by platform">
                            <div class="social-button">Social Presence distribution by platform</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Social Media Influence Scores By Platform">
                            <div class="social-button">Social Media Influence Scores By Platform</div>
                        </label>
                    </div>
                    <div class="flex btn2">
                       <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Engagement Performances By source">
                            <div class="social-button">Engagement Performances By source</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Social presence Topic">
                            <div class="social-button">Social presence Topics</div>
                        </label>
                    </div>
                    <div class="flex btn2">
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Engagement Performances by Topic for each source">
                            <div class="social-button">Engagement Performances by Topic for each source</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Social Presence by frequency / periods">
                            <div class="social-button">Social Presence by frequency / periods</div>
                        </label>
                    </div>
                    <div class="flex btn3">
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Facebook page Tops">
                            <div class="social-button">Facebook page Tops</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="X (Twitter) account">
                            <div class="social-button">X (Twitter) account</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Instagram account">
                            <div class="social-button">Instagram account</div>
                        </label>
                    </div>
                    <div class="flex btn4">
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Authenticity Analysis of Active Profiles">
                            <div class="social-button">Authenticity Analysis of Active Profiles</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Activity Distribution by Profile">
                            <div class="social-button">Activity Distribution by Profile</div>
                        </label>
                    </div>
                    <div class="flex btn5">
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Negative Spreading by Profile Type">
                            <div class="social-button">Negative Spreading by Profile Type</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Top inauthentic Profile (Facebook)">
                            <div class="social-button">Top inauthentic Profile (Facebook)</div>
                        </label>
                    </div>
                    <div class="flex btn6">
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Top inauthentic Profile (X)">
                            <div class="social-button">Top inauthentic Profile (X)</div>
                        </label>
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Top inauthentic Profile (Instagram)">
                            <div class="social-button">Top inauthentic Profile (Instagram)</div>
                        </label>
                    </div>
                    <div class="flex btn7">
                       
                        <label>
                            <input type="checkbox" name="social_Presence_analyses_you_would_like_to_be_included[]" value="Bots identification (TOP25)">
                            <div class="social-button">Bots identification (TOP25)</div>
                        </label>
                    </div>
                </div>

            </div>

            <div style="overflow:auto;">
             <div class="control-btns">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">submit</button>
             </div>
           </div>
           </div>
           
           
              <!-- Circles which indicates the steps of the form: -->
           <div style="text-align:center;margin-top:40px; visibility: hidden;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
           </div>
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
  <script>
        var inputt = document.querySelector("#phone");
        window.intlTelInput(inputt, {
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        var currentTab = 0; 
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByClassName("input-v");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>



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