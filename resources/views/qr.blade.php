<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>QR Code Generator</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.css') }}">
    <script src="{{ asset('semantic/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{asset('semantic/dist/semantic.js')}}"></script>

    <style type="text/css">
        body {
            background-color: #DADADA;
        }
        body > .grid {
            height: 100%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
    </style>
    <script>
        $(document)
                .ready(function() {
                    $('.ui.form')
                            .form({
                                fields: {
                                    stringasal: {
                                        identifier  : 'stringasal',
                                        rules: [
                                            {
                                                type   : 'empty',
                                                prompt : 'Please enter your text, add http:// for link'
                                            }
                                        ]
                                    },
                                }
                            })
                    ;
                })
        ;
    </script>
</head>
<body>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            {{--<img src="img/logo.png" class="image">--}}

            <div class="content">
                Generate your QR
            </div>
        </h2>
        <form class="ui large form" method="POST" action="{{url('qr')}}">
            {{ csrf_field() }}
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="pointing right icon"></i>
                        <input type="text" name="stringasal" placeholder="Enter your text, add http:// for link">
                    </div>
                </div>
                <div class="ui error message"></div>
                <div class="ui animated fade fluid large teal submit button">
                    <div class="visible content">Click me!</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>Create now
                    </div>
                </div>
            </div>
        </form>
        </div>
</div>
@if(old('stringasal'))
    <div class="ui modal">
        <div class="header">This is it, Your QR Code</div>
        <div class="content">
            <div class="ui grid">
                <div class="six wide column">
                    <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->encoding('UTF-8')->size(300)->generate(old('stringasal'))) }} ">
                </div>
                <div class="ten wide column">
                    <div class="ui segment">
                        <a class="ui ribbon label">Detail QR</a>
                        <div class="ui divided very relaxed list">
                            <div class="item">
                                <i class="star icon"></i>
                                <div class="content">
                                    <div class="header">Text</div>
                                    {{old('stringasal')}}
                                </div>
                            </div>
                            <div class="item">
                                <i class="star icon"></i>
                                <div class="content">
                                    <div class="header">Encoding</div>
                                    UTF-8
                                </div>
                            </div>
                            <div class="item">
                                <i class="star icon"></i>
                                <div class="content">
                                    <div class="header">Date Creation</div>
                                    {{ Carbon\Carbon::now()->formatLocalized('%A %d %B %Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="ui positive right labeled icon button">
                Oke
                <i class="checkmark icon"></i>
            </div>
        </div>
    </div>
@endif
<script>
    $('.ui.checkbox')
            .checkbox()
    ;
    $('.ui.modal')
            .modal('show')
    ;
</script>
</body>
</html>