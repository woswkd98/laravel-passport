<!DOCTYPE html>
<html lang="en">

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

        $(document).ready(function() {
            $('#changeLang').on("click",function() {
                $.ajax({
                    type: "GET",
                    url: '/api/lang/en',
                    dataType : 'json',
                    success : function(res) {
                        console.log(res);
                        alert(res.msg);
                        window.location.reload();
                    },
                });
            })
        });



    </script>

</html>
