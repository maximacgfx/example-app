<!DOCTYPE html>
<html>
<head>
    <title>Mess from {{ $data['email'] }}</title>
</head>
<body>
    <h1>{{ $data['name'] }}</h1>
    <p>{{ $data['message'] }}</p>
   
    <p>Thank you</p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['title']}}</title>
    
</head>
<body>    
    
    <p></p>
    <p>{{$data['name'] }} </p>
    <p>{{$data['email'] }} </p>
    <p>{{$data['message'] }} </p>
    <br>
    <p>With respect</p>
    {{-- {{$data['sender_name'] }}  --}}
</body>
</html>