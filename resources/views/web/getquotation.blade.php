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
            <form method="post" action="{{route('web.quotation.store')}}">
                @csrf
                <ul class="stepper parallel horizontal">

                    @foreach($quotations as $index => $quotation)
                    <li class="step @if($index == 0 ) active @endif">
                        <div class="step-title waves-effect waves-dark">Step {{$index+1}}</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">{{$quotation->name}} :</p>
                                    <div class="flex-boxes">
                                        <div class="first-boxes">
                                            @foreach($quotation['list'] as $index2 =>  $list)
                                                @if($index2 <= 3)
                                                <div class="inputs">
                                                    <p>
                                                        <input  type="checkbox" name="quotation_list[{{$list['id']}}][id]" class="filled-in" id="checkbox{{$index2.'-'.$index}}"
                                                            value='{{$list['id']}}' />
                                                        <label for="checkbox{{$index2.'-'.$index}}" class="checkbox{{$index2.'-'.$index}}">{{$list['title']}}</label>
                                                    </p>
                                                    @if($list['type']  == 'dropdown_menu')
                                                    <div class="custom-select" style="width:200px;">
                                                        <select name="quotation_list[{{$list['id']}}][value]" class="select2" >
                                                            <option value="">Select language</option>
                                                            @if($list['title'] == 'Languages')
                                                            @foreach($languages as $language)
                                                                <option value="{{$language->name}}">{{$language->name}}</option>
                                                            @endforeach
                                                            <option value="Facebook">Facebook</option>
                                                            @elseif($list['title'] ==  'Social Media')
                                                                <option value="0">Select social media</option>
                                                                <option value="Facebook">Facebook</option>
                                                                <option value="instgram">instgram</option>
                                                                <option value="Tik Tok">Tik Tok</option>
                                                                <option value="Snapchat">Snapchat</option>
                                                                <option value="X">X</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    @endif
                                                    @if($list['type']  == 'country')
                                                    <div class="custom-select" style="width:200px;">
                                                        <select class="select2 selectCountry" name="quotation_list[{{$list['id']}}][value]" style="width: 200px;">
                                                            @foreach($countries as $country)
                                                                <option data-id="{{$country->id}}" value="{{$country->name}}">{{$country->name}}</option>
                                                            @endforeach
                                                        <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                    @endif
                                                    @if($list['type']  == 'region')
                                                    <div class="custom-select"  style="width:200px;" >
                                                        <select name="quotation_list[{{$list['id']}}][value]" id="mySelect2" class="selectRegion select2">
                                                            <option value="">Select region</option>
                                                        </select>
                                                       
                                                    </div>
                                                    @endif
                                                    @if($list['type']  == 'years')
                                                    <div class="custom-select" style="width:200px;">
                                                        <select name="quotation_list[{{$list['id']}}][value]" class="select2">
                                                            <option value="">Select years</option>
                                                            @for($i=1;$i<=10;$i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    @endif
                                                    @if($list['type']  == 'text')
                                                        <div class="inutts">
                                                            <input class="input2-plus" for="brand" placeholder="{{$list['title']}}" name="quotation_list[{{$list['id']}}][value]" />
                                                        </div>
                                                    @endif
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="second-box">
                                            @foreach($quotation['list'] as $index2 =>  $list)
                                                @if($index2 > 3)
                                                    <p>
                                                        <input  type="checkbox" name="quotation_list[{{$list['id']}}][id]" class="filled-in" id="checkbox{{$index2.'-'.$index}}"
                                                        value='{{$list['id']}}' />
                                                        <label for="checkbox{{$index2.'-'.$index}}" class="checkbox{{$index2.'-'.$index}}">{{$list['title']}}</label>
                                                    </p>
                                                    @if($list['type']  == 'dropdown_menu')
                                                    <div class="custom-select" style="width:200px;">
                                                        <select name="quotation_list[{{$list['id']}}][value]" class="select2" >
                                                            <option value="">Select {{$list['title']}}</option>
                                                            <option value="Facebook">Facebook</option>
                                                            <option value="instgram">instgram</option>
                                                            <option value="Tik Tok">Tik Tok</option>
                                                            <option value="X">X</option>
                                                        </select>
                                                    </div>
                                                    @endif
                                                    @if($list['type']  == 'country')
                                                    <div class="custom-select" style="width:200px;">
                                                        <select name="quotation_list[{{$list['id']}}][value]" class="selectCountry select2" >
                                                            <option value="">Select country</option>
                                                            @foreach($countries as $country)
                                                                <option data-id="{{$country->id}}" value="{{$country->name}}">{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @endif
                                                    @if($list['type']  == 'region')

                                                    <div class="custom-select" id="" style="width:200px;">
                                                        <select name="quotation_list[{{$list['id']}}][value]" class="selectRegion select2" >
                                                            <option value="">Select region</option>
                                                            
                                                        </select>
                                                    </div>
                                                    @endif
                                                    @if($list['type']  == 'years')
                                                    <div class="custom-select" style="width:200px;">
                                                        <select name="quotation_list[{{$list['id']}}][value]" class="select2" >
                                                            <option value="">Select years</option>
                                                            @for($i=1;$i<=10;$i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    @endif
                                                    @if($list['type']  == 'text')
                                                        <div class="inutts">
                                                            <input class="input2-plus" for="brand" placeholder="{{$list['title']}}" name="quotation_list[{{$list['id']}}][value]" />
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    {{-- <p>
                                        <input  type="checkbox" class="filled-in" id="checkbox1"
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
                                    </p> --}}
                                </div>
                            </div>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step"
                                    data-validator="validateStepOne">CONTINUE</button>
                                <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <li class="step">
                        <div class="step-title waves-effect waves-dark">Step 11</div>
                        <div class="step-content">
                            <div class="row">
                                <div class='form-field col s12'>
                                    <p class="keywords">Contact Information</p>
                                    <p class="f-flex">
                                        <label for="checkbox39">Name :</label>
                                        <input type="text" name="name" placeholder="Your Name" required /> 
                                    </p>
                                    <p class="f-flex">
                                        <label for="checkbox40">Email</label>
                                        <input type="text" name="email" placeholder="Your Email" required /> 
                                    </p>
                                    <p class="f-flex">
                                        <label for="checkbox40">Phone</label>
                                        <input type="tel" name="phone" id="phone" class="zip-code" />
                                        <!-- <input type="text" name="phone" placeholder="Your Phone" required />  -->
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