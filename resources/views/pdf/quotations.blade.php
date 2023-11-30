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
        @foreach($quotations as $quotation)
          <tr style="height:250px;">
            <td class="full" style="width: 100% !important;text-align: start;justify-content: start;padding: 10px;">
                <div class='form-field'>
                    <p class="keywords" style="font-size:40px;color:red;">{{$quotation->name}} :</p>
                    @foreach($quotation->list as $item)
                    <p>
                        <input name='checkbox1' type="checkbox" @if(in_array($item->id,$quotationSelectList)) checked @endif class="filled-in" id="checkbox1"
                            value='checkbox1' />
                        <label for="checkbox1" class="checkbox1"> {{$item->title}}</label>
                        @if($quotationForm->from_details->where('quotation_list_id',$item->id)->first() !=null && $quotationForm->from_details->where('quotation_list_id',$item->id)->first()->value != null && $quotationForm->from_details->where('quotation_list_id',$item->id)->first()->value != '')
                            <br>
                            <span style="color: red" class="filled-in">Answer:</span>{{$quotationForm->from_details->where('quotation_list_id',$item->id)->first()->value}}</p></label></span>
                        @endif
                        
                    </p>
                    @endforeach
                </div>
            </td>
          </tr>
          @endforeach

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