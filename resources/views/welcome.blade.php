<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .bio {
                margin-bottom: 80px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <!-- do not escape otherwise the HTML isn't parsed and it just prints the HTML -->
                    {!! $document->getStructuredText('welcome-page.title')->asHtml() !!}
                </div>

                <div class="bio">
                    {!! $document->getImage('welcome-page.picture')->asHtml() !!}
                    {!! $document->getStructuredText('welcome-page.bio')->asHtml() !!}
                </div>

                <div class="links">
                    @php ($twitter = $document->getLink('welcome-page.twitter'))
                    @php ($linkedin = $document->getLink('welcome-page.linkedin'))

                    <a href="{{ $twitter->getUrl() }}" target="{{ $twitter->getTarget() != null ? $twitter->getTarget() : '' }}">Twitter</a>
                    <a href="{{ $linkedin->getUrl() }}" target="{{ $linkedin->getTarget() != null ? $linkedin->getTarget() : '' }}">LinkedIn</a>
                    <a href="https://github.com/Serializator/experimenting-with-prismicio" target="_blank">Source</a>
                </div>
            </div>
        </div>
    </body>
</html>
