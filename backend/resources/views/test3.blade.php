

<!DOCTYPE html>
<html lang="en">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>

    </head>
    <body class="main">
        <button id ="test">111111111</button>
        <button id ="test2">2222222222</button>
        <div id = "container">
            {{ __('index.hello')}}
            <br/>
            {{$res}}

        </div>
    </body>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script>


            $('#test').on('click', function(e) {
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'POST',
                    url:  '{{url('kr/login')}}',
                    dataType: 'json',
                    data: {
                        test : '33333'
                    },
                    success: function(data, status, xhr) {
                        $.ajaxSetup({
                            global : true,
                            headers : {
                                Authorization : xhr.getResponseHeader('Authorization'),
                            }
                        })
                        /*
                        $('#container').empty();
                        $('#container').html(data.html)
                        $('#container').show();*/
                        window.location.href = '{{url('kr/test4')}}';

                    },
                    error: function(request, status, error) {
                        //alert("\n"+"error:"+error);
                    }
                });
            })

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

        window.onbeforeunload = function () {
            let token = new Headers().get("Authorization");

            if()

            if(token) {
                localStorage.setItem('Authorization', token);
            }
        }

        window.onload = function () {
            if(localStorage.getItem('Authorization')) {
                $.ajaxSetup({
                    global : true,
                    headers : {
                        Authorization : xhr.getResponseHeader('Authorization'),
                    }
                })
                localStorage.removeItem('Authorization');
            }
        }

    </script>

</html>
