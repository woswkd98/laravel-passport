api 통신은 ajax로 

로그인 
ajax api -> success -> window.location.href = "main";
            fail    -> window.location.reload();

// html을 날릴 때 방식임 
back
view('html view') 
    ->with('a', 1)
    ->with('body', 3)
    ->with('input', $request->test)
    ->render();
return response()
    ->json(['html'=>$view], 200, [
        'Authorization' => 'Bearer '.$accessToken
    ]);;

front
$('#container').empty();
$('#container').html(data.html)
$('#container').show();

div에 연결해서 쓰면 컴포넌트 처럼 이용가능 (쓸일 있을 듯)


