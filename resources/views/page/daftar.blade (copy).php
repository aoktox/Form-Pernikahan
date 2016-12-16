@extends('page.master')
@section('head')
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('semantic/css/daterangepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('semantic/css/jquery.steps.min.css')}}"/>
    <script type="text/javascript" src="{{asset('semantic/js/jquery.steps.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('semantic/js/moment.js')}}"></script>
    <script type="text/javascript" src="{{asset('semantic/js/daterangepicker.js')}}"></script>
    <script>
        var onLoadH = function()
        {
            //Set the Semantic UI validation rules
            var formValidationRules =
            {
                //Below line is property name, and does not reflect the name or id of the target element to validate
                //It could be anything, as long as it's unique to other properties
                email: {
                    //identifier is the name of the target element to validate
                    identifier : 'email',
                    optional   : false,
                    rules: [
                        {
                            type   : 'email',
                            prompt : 'Please enter a valid e-mail'
                        }
                    ]
                },
                name: {
                    identifier : 'name',
                    //Below line sets it so that it only validates when input is entered, and won't validate on blank input
                    /*optional   : true,*/
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please enter a valid second e-mail'
                        }
                    ]
                },
                name2: {
                    identifier : 'name2',
                    //Below line sets it so that it only validates when input is entered, and won't validate on blank input
                    /*optional   : true,*/
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please enter a valid second e-mail'
                        }
                    ]
                },
                /*inline : true,*/
            }
            var aForm = $("#aFormWizard");
            aForm.children("div").steps({
                headerTag: "h3",
                bodyTag: "section",
                stepsOrientation: "vertical",
                transitionEffect: "fade",

                onStepChanging: function (event, currentIndex, newIndex)
                {
                    //Calls Semantic UI form validation
                    //Return false to cancel the advancement of the step/submission
                    console.log(currentIndex);
                    return $(".ui.form."+currentIndex).form('validate form');
                },
                onInit: function (event, currentIndex) {
                    /*
                     Need to Initialize the SemanticUI here
                     If initialize SemanticUI out of this function, it may not properly work.

                     Perhaps the problem is with JQuery steps moving the Semantic UI form HTML
                     out of the body tag which originally holds it, and in to a new container,
                     without copying the events properly when the wizard initialization is called

                     */

                    //Initialize Semantic UI dropdown
                    $('.ui.dropdown').dropdown();

                    //Initialize Semantic UI Form validations
                    $(".ui.form").form(formValidationRules);

                    $('.ui.accordion').accordion();
                },
                onFinished: function (event, currentIndex)
                {
                    alert("Will now submit form!");
                    $("#aFormWizard").submit();
                }
            });
        }

        $(document).ready(onLoadH);
    </script>
@stop
@section('content')
    <div class="ui two column stackable grid">
        {{--@include('page.sidebar')--}}
        <div class="sixteen wide column" style="margin-top: -1em;">
            {{--<div class="ui tall stacked segment" style="margin-top: -1em;">
                <div class="ui five steps">
                    <div class="ui active step">
                        Data Suami
                    </div>
                    <div class="ui disabled step">
                        Data Istri
                    </div>
                    <div class="ui disabled step">
                        Data Saksi
                    </div>
                    <div class="ui disabled step">
                        Data Perkawinan
                    </div>
                    <div class="ui disabled step">
                        Dokumen Persyaratan
                    </div>
                </div>--}}
            <div class="ui stackable menu">
                <div class="item">
                    <img src="img/logo.png">
                </div>
                <a class="item">Features</a>
                <a class="item">Testimonials</a>
                <a class="item">Sign-in</a>
            </div>
            <form id="aFormWizard" action="{{url('/submit-daftar')}}" method="POST">
                <div>
                    <h3>Data Suami</h3>
                    <section>
                        <div class="ui form 0">
                            <div class="ui segment">
                                <a class="ui ribbon label">Data Suami</a>
                                <hr>
                                <div class="fields">
                                    <div class="field">
                                        <label>NIK</label>
                                        <div class="ui icon input">
                                            <div class="ui corner labeled input">
                                                <input type="text" placeholder="NIK...">
                                                <div class="ui corner label">
                                                    <i class="asterisk icon"></i>
                                                </div>
                                            </div>
                                            &nbsp;
                                            <a class="ui button">
                                                Cek
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label>Nomor KK</label>
                                        {{--<input placeholder="First Name" name="name" type="text">--}}
                                        <div class="ui corner labeled input">
                                            <input type="text" placeholder="Search...">
                                            <div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Nomor Pasport</label>
                                        <input placeholder="First Name" name="name" type="text">
                                    </div>
                                    {{--<div class="field">
                                        <label>Gender</label>
                                        <div class="ui left icon input">
                                            <input type="text" name="birthday" id="birthday" value="" placeholder="Tanggal lahir" />
                                            <i class="calendar icon"></i>
                                        </div>
                                    </div>--}}
                                </div>
                                <div class="field">
                                    <label>Nama Lengkap</label>
                                    <div class="ui corner labeled input">
                                        <input type="text" placeholder="Search...">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label>Tempat Lahir</label>
                                        <div class="ui corner labeled input">
                                            <input type="text" placeholder="Search...">
                                            <div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Tanggal Lahir</label>
                                        <div class="ui corner labeled input">
                                            <input type="text" name="birthday" id="birthday" value="" placeholder="Tanggal lahir" />
                                            <div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <input name="password" type="password">
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <input name="password" type="password">
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <input name="password" type="password">
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <input name="password" type="password">
                                </div>
                            </div>
                            {{--<div class="ui reset button">Reset</div>
                            <div class="ui clear button">Clear</div>--}}
                            <!-- Below tag is the placeholder/container for the error messages -->
                            <div class="ui error message"></div>
                        </div>
                    </section>
                    <h3>Data Istri</h3>
                    <section>
                        <div class="ui form 1 segment">
                            <p>Your tickets are all ready to print. Where would you like to send a receipt?</p>
                            <div class="two fields">
                                <div class="field">
                                    <label>Name</label>
                                    <input placeholder="First Name" name="name2" type="text">
                                </div>
                                <div class="field">
                                    <label>Gender</label>

                                    <div class="ui selection dropdown">
                                        <input name="gender2" type="hidden">

                                        <div class="default text">Gender</div>
                                        <i class="dropdown icon"></i>

                                        <div class="menu">
                                            <div class="item" data-value="male">Male</div>
                                            <div class="item" data-value="female">Female</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h3>Data Saksi</h3>
                    <section>
                        <div class="ui accordion segment" style="margin-top: -1.3em;">
                            <div class="active title segment">
                                <i class="dropdown icon"></i>
                                What is a dog?
                            </div>
                            <div class="active content">
                                <p>A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
                            </div>
                            <div class="title">
                                <i class="dropdown icon"></i>
                                What kinds of dogs are there?
                            </div>
                            <div class="content">
                                <p>There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
                            </div>
                            <div class="title">
                                <i class="dropdown icon"></i>
                                How do you acquire a dog?
                            </div>
                            <div class="content">
                                <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
                                <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
                            </div>
                        </div>
                    </section>
                    <h3>Data Perkawinan</h3>
                    <section>
                        sjhfshf
                    </section>
                    <h3>Dokumen Persyaratan</h3>
                    <section>
                        sjhfshf
                    </section>
                    <h3>Finish</h3>
                    <section>
                        Confirm your submission by clicking on the finish button!
                    </section>
                </div>
            </form>
        </div>
    </div>
@stop
@section('footer')
    <script type="text/javascript">
        today = new Date();
        $(document).ready(function() {
            $('#birthday').daterangepicker({
                singleDatePicker: true,
                "buttonClasses": "ui button",
                "applyClass": "primary",
                "showDropdowns": true,
                "maxDate": new Date(today.getYear()-17, today.getMonth(), today.getDay()),
                "cancelClass": "red"
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
@stop
