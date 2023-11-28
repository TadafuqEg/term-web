<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .in-pt{
            padding:10px
        }
        .checkbox1{
            margin-top:-20px !important;
        }
    </style>

</head>
<body>
    <table style="border-collapse: collapse;margin: 0;padding: 0;width:90%;margin: auto;table-layout: fixed;">
        <h2 class="search" style="font-size:60px;color:red">Search</h2>
        
        <tbody>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">Keywords :</p>

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
            </td>
          </tr>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;" >Duration :</p>

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
                                    <label for="checkbox11" class="checkbox1">more years  <p style="color:red;"><span style="font-weight:bold;">Answer:</span>10 years</p></label>
                                    
                                    
                            </p>
                        </div>
                    </div>
                </div>
            </td>
          </tr>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">Geolocation :</p>
                   
                    <p class="seconed-flex">
                                
                                
                        <div class="custom-select" style="width:200px;">
                            <input name='checkbox12' type="checkbox" class="filled-in" id="checkbox12"
                            value='checkbox12' />
                            <label for="checkbox12" class="checkbox1">Country <p style="color:red;"><span style="font-weight:bold;">Answer:</span>country name</p></label>
                             
                    </div>
                    </p>
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
            </td>
          </tr>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">Sources :</p>

                    <p>
                        <div class="all-flex">
                        <div class="input-l">
                        </div>
                        <div class="custom-select" style="width:200px;">
                            <input name='checkbox15' type="checkbox" class="filled-in" id="checkbox15"
                            value='checkbox15' />
                        <label for="checkbox15" class="checkbox1">Social Media <p style="color:red;"><span style="font-weight:bold;">Answer:</span>social media icon</p></label>
                                
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
                        <input class="input-plus" for="specific" placeholder="manual input URL + above select" />
                    </p>
                </div>
            </td>
          </tr>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">Language :</p>

                    <p style="color:red;"><span style="font-weight:bold;">Answer:</span>choose language</p>
                    
                </div>
            </td>
          </tr>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">Type of Data :</p>

                    <p>
                        <input name='checkbox19' type="checkbox" class="filled-in" id="checkbox19"
                            value='checkbox19' />
                        <label for="checkbox19" class="checkbox1">Branding speaking</label>
                        
                    </p>
                    <input class="input-plus" for="Branding" placeholder="" />
                    <p>
                        <input name='checkbox20' type="checkbox" class="filled-in" id="checkbox20"
                            value='checkbox20' />
                        <label for="checkbox20" class="checkbox1">Branding speaking + Comment</label>

                    </p>
                    <input class="input-plus" for="Branding-speaking" placeholder="" />
                    <p>
                        <input name='checkbox21' type="checkbox" class="filled-in" id="checkbox21"
                            value='checkbox21' />
                        <label for="checkbox21" class="checkbox1">Branding & Web speaking</label>
                        
                    </p>
                    <input class="input-plus" for="Web-speaking" placeholder="" />
                    <p>
                        <input name='checkbox22' type="checkbox" class="filled-in" id="checkbox22"
                            value='checkbox22' />
                        <label for="checkbox22" class="checkbox1">Web speaking + comments</label>
                        
                    </p>
                    <input class="input-plus" for="comments" placeholder="" />
                </div>
            </td>
          </tr>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">Analysis + :</p>

                    <p>
                        <input name='checkbox23' type="checkbox" class="filled-in" id="checkbox23"
                            value='checkbox23' />
                        <label for="checkbox23" class="checkbox1">Sentiment Analysis</label>
                    </p>
                    <input class="input-plus" for="Sentiment" placeholder="" />
                    <p>
                        <input name='checkbox24' type="checkbox" class="filled-in" id="checkbox24"
                            value='checkbox24' />
                        <label for="checkbox24" class="checkbox1">Semantic Analysis</label>
                        
                    </p>
                    <input class="input-plus" for="Semantic" placeholder="" />
                    <p>
                        <input name='checkbox25' type="checkbox" class="filled-in" id="checkbox25"
                            value='checkbox25' />
                        <label for="checkbox25" class="checkbox1">Authors / Influence Analysis</label>
                    </p>
                    <input class="input-plus" for="Authors" placeholder="" />
                    <p>
                        <input name='checkbox26' type="checkbox" class="filled-in" id="checkbox26"
                            value='checkbox26' />
                        <label for="checkbox26" class="checkbox1">Categorization by themes</label>
                    </p>
                    <input class="input-plus" for="themes" placeholder="" />
                    <p>
                        <input name='checkbox27' type="checkbox" class="filled-in" id="checkbox27"
                            value='checkbox27' />
                        <label for="checkbox27" class="checkbox1">Categorization by types</label>
                    </p>
                    <input class="input-plus" for="types" placeholder="" />
                    
                </div>
            </td>
          </tr>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">Reports :</p>

                    <p>
                        <input name='checkbox28' type="checkbox" class="filled-in" id="checkbox28"
                            value='checkbox28' />
                        <label for="checkbox28" class="checkbox1">Real time alerts</label>
                    </p>
                    <input class="input-plus" for="Real" placeholder="" />
                    <p>
                        <input name='checkbox29' type="checkbox" class="filled-in" id="checkbox29"
                            value='checkbox29' />
                        <label for="checkbox29" class="checkbox1">Automatic Report</label>
                    </p>
                    <input class="input-plus" for="Automatic" placeholder="" />
                    <p>
                        <input name='checkbox30' type="checkbox" class="filled-in" id="checkbox30"
                            value='checkbox30' />
                        <label for="checkbox30" class="checkbox1">Personalised Report</label>
                    </p>
                    <input class="input-plus" for="Personalised" placeholder="" />
                    <p>
                        <input name='checkbox31' type="checkbox" class="filled-in" id="checkbox31"
                            value='checkbox31' />
                        <label for="checkbox31" class="checkbox1">Personalised Comparative report</label>
                    </p>
                    <input class="input-plus" for="Comparative" placeholder="" />
                    <p>
                        <input name='checkbox32' type="checkbox" class="filled-in" id="checkbox32"
                            value='checkbox32' />
                        <label for="checkbox32" class="checkbox1">Consulting review</label>
                    </p>
                    <input class="input-plus" for="Consulting" placeholder="" />
                </div>
            </td>
          </tr>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">Interval / frequency :</p>

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
            </td>
          </tr>
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">Social Engineering :</p>
                    <p>
                        <input name='checkbox38' type="checkbox" class="filled-in" id="checkbox38"
                            value='checkbox38' />
                        <label for="checkbox38" class="checkbox1">on demand (<a href="{{route('web.contact-us')}}">please contact us</a>)</label>
                    </p>
                    
                </div>
            </td>
          </tr>


          
        </tbody>
      </table>

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
</body>
</html>