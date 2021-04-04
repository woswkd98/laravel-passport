<!DOCTYPE html>
<html lang="en">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body class="main">

        {{ __('index.hello')}}
        <br/>


        <button id ="test2">2222222222</button>
    </body>
    <script>
$('#test2').on('click', function(e) {
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'GET',
                    url:  'api/test',
                    dataType: 'json',
                    success: function(data, status, xhr) {
                        console.log(data);
                    },
                })
            })



    </script>

</html>
