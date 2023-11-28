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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Materializecss compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <!-- jQueryValidation Plugin -->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <title>term</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <style> 
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
.step2{
    position: absolute;
    bottom: -80px !important;
}
.step3{
    position: absolute;
    bottom: -140px !important;
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
         }
         @media(max-width:767px){
            
            
            
         }
        
    </style>
</head>

<body>
    <div class="">

        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
              <div class="nav-title">
                <a href="../index.html"><img src="{{asset("assets/imgs/logo.png")}}" /></a>
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
            <form>
                <ul class="stepper parallel horizontal">

                    <li class="step active">
                        <div class="step-title waves-effect waves-dark">Step 1</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Keywords :</p>

                                    <p>
                                        <input name='checkbox1' type="checkbox" class="filled-in" id="checkbox1"
                                            value='checkbox1' />
                                        <label for="checkbox1" class="checkbox1"> Keyword / Engineering restructioning</label>
                                    </p>
                                    <p>
                                        <input name='checkbox2' type="checkbox" class="filled-in" id="checkbox2"
                                            value='checkbox2' />
                                        <label for="checkbox2" class="checkbox1">1-5</label>
                                    </p>
                                    <p>
                                        <input name='checkbox3' type="checkbox" class="filled-in" id="checkbox3"
                                            value='checkbox3' />
                                        <label for="checkbox3" class="checkbox1">6-10</label>
                                    </p>
                                    <p>
                                        <input name='checkbox4' type="checkbox" class="filled-in" id="checkbox4"
                                            value='checkbox4' />
                                        <label for="checkbox4" class="checkbox1">10+</label>
                                    </p>
                                </div>
                            </div>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step"
                                    data-validator="validateStepOne">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>

                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 2</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Duration :</p>

                                    <div class="flex-boxes">
                                        <div class="first-boxes">
                                            <p>
                                                <input name='checkbox5' type="checkbox" class="filled-in" id="checkbox5"
                                                    value='checkbox5' />
                                                <label for="checkbox5" class="checkbox1">1 day</label>
                                            </p>
                                            <p>
                                                <input name='checkbox6' type="checkbox" class="filled-in" id="checkbox6"
                                                    value='checkbox6' />
                                                <label for="checkbox6" class="checkbox1">1 week</label>
                                            </p>
                                            <p>
                                                <input name='checkbox7' type="checkbox" class="filled-in" id="checkbox7"
                                                    value='checkbox7' />
                                                <label for="checkbox7" class="checkbox1">1 month</label>
                                            </p>
                                            <p>
                                                <input name='checkbox8' type="checkbox" class="filled-in" id="checkbox8"
                                                    value='checkbox8' />
                                                <label for="checkbox8" class="checkbox1">3 month</label>
                                            </p>
                                         
                                        </div>
                                        <div class="second-box">
                                            <p>
                                                <input name='checkbox9' type="checkbox" class="filled-in" id="checkbox9"
                                                    value='checkbox9' />
                                                <label for="checkbox9" class="checkbox1">6 month</label>
                                            </p>
                                            <p>
                                                <input name='checkbox10' type="checkbox" class="filled-in" id="checkbox10"
                                                    value='checkbox10' />
                                                <label for="checkbox10" class="checkbox1">1 year</label>
                                            </p>
                                            <p class="seconed-flex">
                                                <input name='checkbox11' type="checkbox" class="filled-in" id="checkbox11"
                                                    value='checkbox11' />
                                                <label for="checkbox11" class="checkbox1">more years</label>
                                                <div class="custom-select" style="width:200px;">
                                                <select>
                                                    <option value="0">Select Year:</option>
                                                    <option value="1">1 year</option>
                                                    <option value="2">2 year</option>
                                                    <option value="3">3 year</option>
                                                    <option value="4">4 year</option>
                                                    <option value="5">5 year</option>
                                                    <option value="6">6 year</option>
                                                    <option value="7">7 year</option>
                                                    <option value="8">8 year</option>
                                                    <option value="9">9 year</option>
                                                    <option value="10">10 year</option>
                                                </select>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step" data-validator="validateStepOne">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>

                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 3</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Geolocation :</p>
                                    <div>
                                        <div class="all-flex">
                                       <div class="input-l">
                                       <input name='checkbox12' type="checkbox" class="filled-in" id="checkbox12"
                                            value='checkbox12' />
                                        <label for="checkbox12">Country</label></div>
                                        <div class="custom-select" style="width:200px;">
                                        <select id="selectCountry" name="selectCountry">
                                          <option value="">Choose Country</option>
                                        </select>
                                        </div>
                                        
                                    </div>
                                    <p>
                                        <input name='checkbox13' type="checkbox" class="filled-in" id="checkbox13"
                                            value='checkbox13' />
                                        <label for="checkbox13">Region</label>
                                    </p>
                                    <p>
                                        <input name='checkbox14' type="checkbox" class="filled-in" id="checkbox14"
                                            value='checkbox14' />
                                        <label for="checkbox14">WorldWide</label>
                                    </p>
                                </div>
                               
                            </div>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step"
                                    data-validator="validateStepOne">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>

                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 4</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Sources :</p>

                                    <p>
                                        <div class="all-flex">
                                        <div class="input-l">
                                        <input name='checkbox15' type="checkbox" class="filled-in" id="checkbox15"
                                            value='checkbox15' />
                                        <label for="checkbox15" class="checkbox1">Social Media</label></div>
                                        <div class="custom-select" style="width:200px;">
                                                <select>
                                                    <option value="0">Select social media</option>
                                                    <option value="1">Facebook</option>
                                                    <option value="2">instgram</option>
                                                    <option value="3">Tik Tok</option>
                                                    <option value="4">X</option>
                                                    
                                                </select>
                                        </div>
                                        </div>
                                    </p>
                                    <p>
                                        <input name='checkbox16' type="checkbox" class="filled-in" id="checkbox16"
                                            value='checkbox16' />
                                        <label for="checkbox16" class="checkbox1">Web </label>
                                    </p>
                                    <p>
                                        <input name='checkbox17' type="checkbox" class="filled-in" id="checkbox17"
                                            value='checkbox17' />
                                        <label for="checkbox17" class="checkbox1">Specific Sources</label>
                                        <input for="specific" placeholder="manual input URL + above select" />
                                    </p>
                                </div>
                            </div>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step"
                                    data-validator="validateStepOne">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>
            
                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 5</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Language :</p>

                                    <div class="custom-select" style="width:200px;">
                                                <select>
                                                    <option value="0">Select Language:</option>
                                                    <option value="1">Arabic</option>
                                                    <option value="2">English</option>
                                                    <option value="3">French</option>
                                                    <option value="4">spanish</option>
                                                    <option value="5">CHINESE</option>
                                                    <option value="6">BENGALI</option>
                                                    <option value="7">HINDI</option>
                                                    <option value="8">PORTUGUESE</option>
                                                    <option value="9">RUSSIAN</option>
                                                    <option value="10">JAPANESE</option> 
                                                </select>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step"
                                    data-validator="validateStepOne">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>

                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 6</div>
                        <div class="step-content">
                            <div class="row">

                                <div class='form-field col s12'>
                                    <p class="keywords">Type of Data :</p>

                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox19' type="checkbox" class="filled-in" id="checkbox19"
                                            value='checkbox19' />
                                        <label for="checkbox19" class="checkbox1">Branding speaking</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="brand" placeholder="Branding speaking" />
                                        </div>
                                        
                                    </div>
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox20' type="checkbox" class="filled-in" id="checkbox20"
                                            value='checkbox20' />
                                        <label for="checkbox20" class="checkbox1">Branding speaking + Comment</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="brand" placeholder="Branding speaking + Comment" />
                                        </div>
                                        
                                    </div>
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox21' type="checkbox" class="filled-in" id="checkbox21"
                                            value='checkbox21' />
                                        <label for="checkbox21" class="checkbox1">Branding & Web speaking</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="brand" placeholder="Branding & Web speaking" />
                                        </div>
                                        
                                    </div>

                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox22' type="checkbox" class="filled-in" id="checkbox22"
                                            value='checkbox22' />
                                        <label for="checkbox22" class="checkbox1">Web speaking + comments</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="brand" placeholder="Web speaking + comments" />
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <div class="step-actions step2">
                                <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>

                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 7</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Analysis + :</p>

                                    
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox23' type="checkbox" class="filled-in" id="checkbox23"
                                            value='checkbox23' />
                                        <label for="checkbox23" class="checkbox1">Sentiment Analysis</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="Sentiment" placeholder="Sentiment Analysis" />
                                        </div>
                                        
                                    </div>
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox24' type="checkbox" class="filled-in" id="checkbox24"
                                            value='checkbox24' />
                                        <label for="checkbox24" class="checkbox1">Semantic Analysis</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="Semantic" placeholder="Semantic Analysis" />
                                        </div>
                                        
                                    </div>
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox21' type="checkbox" class="filled-in" id="checkbox21"
                                            value='checkbox21' />
                                        <label for="checkbox21" class="checkbox1">Branding & Web speaking</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="speaking" placeholder="Branding & Web speaking" />
                                        </div>
                                        
                                    </div>

                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox26' type="checkbox" class="filled-in" id="checkbox26"
                                            value='checkbox26' />
                                        <label for="checkbox26" class="checkbox1">Categorization by themes</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="themes" placeholder="Categorization by themes" />
                                        </div>
                                        
                                    </div>
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox27' type="checkbox" class="filled-in" id="checkbox27"
                                            value='checkbox27' />
                                        <label for="checkbox27" class="checkbox1">Categorization by types</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="types" placeholder="Categorization by types" />
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="step-actions step3">
                                <button class="waves-effect waves-dark btn next-step"
                                    data-validator="validateStepOne">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>

                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 8</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Reports :</p>

                               
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox28' type="checkbox" class="filled-in" id="checkbox28"
                                            value='checkbox28' />
                                        <label for="checkbox28" class="checkbox1">Real time alerts</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="Real" placeholder="Real time alerts" />
                                        </div>
                                        
                                    </div>
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox29' type="checkbox" class="filled-in" id="checkbox29"
                                            value='checkbox29' />
                                        <label for="checkbox29" class="checkbox1">Automatic Report</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="Automatic" placeholder="Automatic Report" />
                                        </div>
                                        
                                    </div>
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox30' type="checkbox" class="filled-in" id="checkbox30"
                                            value='checkbox30' />
                                        <label for="checkbox30" class="checkbox1">Personalised Report</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="Personalised" placeholder="Personalised Report" />
                                        </div>
                                        
                                    </div>

                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox31' type="checkbox" class="filled-in" id="checkbox31"
                                            value='checkbox31' />
                                        <label for="checkbox31" class="checkbox1">Personalised Comparative report</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="Comparative" placeholder="Personalised Comparative report" />
                                        </div>
                                        
                                    </div>
                                    <div class="fflex">
                                        <div class="inputs">
                                        <input name='checkbox32' type="checkbox" class="filled-in" id="checkbox32"
                                            value='checkbox32' />
                                        <label for="checkbox32" class="checkbox1">Consulting review</label>
                                        </div>
                                        <div class="inutts">
                                        <input class="input2-plus" for="Consulting" placeholder="Consulting review" />
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="step-actions step3">
                                <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>

                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 9</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Interval / frequency :</p>

                                    <p>
                                        <input name='checkbox33' type="checkbox" class="filled-in" id="checkbox33"
                                            value='checkbox33' />
                                        <label for="checkbox33" class="checkbox1">one shot report</label>
                                    </p>
                                    <p>
                                        <input name='checkbox34' type="checkbox" class="filled-in" id="checkbox34"
                                            value='checkbox34' />
                                        <label for="checkbox34" class="checkbox1">weekly reports</label>
                                    </p>
                                    <p>
                                        <input name='checkbox35' type="checkbox" class="filled-in" id="checkbox35"
                                            value='checkbox35' />
                                        <label for="checkbox35" class="checkbox1">Every tow weeks</label>
                                    </p>
                                    <p>
                                        <input name='checkbox36' type="checkbox" class="filled-in" id="checkbox36"
                                            value='checkbox36' />
                                        <label for="checkbox36" class="checkbox1">Monthly</label>
                                    </p>
                                    <p>
                                        <input name='checkbox37' type="checkbox" class="filled-in" id="checkbox37"
                                            value='checkbox37' />
                                        <label for="checkbox37" class="checkbox1">Quarterly</label>
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step"
                                    data-validator="validateStepOne">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>

                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 10</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Social Engineering :</p>
                                    <p>
                                        <input name='checkbox38' type="checkbox" class="filled-in" id="checkbox38"
                                            value='checkbox38' />
                                        <label for="checkbox38" class="checkbox1">on demand (<a href="{{route('web.contact-us')}}">please contact us</a>)</label>
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="step-actions">
                                <input type="submit" class="waves-effect waves-dark btn" value="SUBMIT" />
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>

                </ul>
            </form>
        </div>
    </div> 
    </div>
    </div>
    
    <script>
    var select = document.getElementById("selectCountry");
    
    var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");
        
    //console.log(countries);
    //console.log(select);
        
    for (var i = 0; i < countries.length; i++) {
        
        var option = document.createElement("option"); 
      //for every turn of the loop create an option tag
        //console.log(option);
        var txt = document.createTextNode(countries[i]); 
      //for every turn of the loop create the inner text
        //console.log(txt);
        option.appendChild(txt); 
      //for every turn of the loop put the words from txt inside the <option> tags
        //console.log(option);
        option.setAttribute("value",countries[i]); //for every turn of the loop set the value attribute to corresponding country name
        //console.log(option);
        select.insertBefore(option,select.lastChild);
        //console.log(select);
        
    }
    
    document.addEventListener ('DOMContentLoaded', function() {
        //console.log('DOM fully loaded and parsed');
        document.querySelector('select[name="selectCountry"]').onchange = alertCountry;
         }, false);
        
    function alertCountry(event) {
        //console.log('DOM loaded');
        //use "this" to refer to selected element
        if(!event.target.value) alert('Please select a country');
        else alert('You chose ' + event.target.value + '. Yay, grab a beer!');
    }
    
    </script>
    
    <script>
        $(document).ready(function () {
            $('.stepper').activateStepper();
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
        var x, i, j, l, ll, selElmnt, a, b, c;
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;

            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < ll; j++) {
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function (e) {
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            yl = y.length;
                            for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function (e) {
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }
        function closeAllSelect(elmnt) {
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        document.addEventListener("click", closeAllSelect);
    </script>
 
</body>
</html>