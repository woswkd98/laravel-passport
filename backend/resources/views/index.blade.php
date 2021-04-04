<!DOCTYPE html>
<html lang="en">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body class="main">
        {{ __('index.hello')}}
        <br/>
        {{$res}}
        <button id = "changeLang" >lang</button>
        <a href="{{ url('/index/2') }}">Visit
    </body>
    <script>
        window.onbeforeunload = function () {
            let token = new Headers().get("Authorization");
            if(!token) {
                localStorage.setItem('Authorization', token);
            }
        }

    </script>

</html>
