<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>user data</title>
</head>
<body>

@foreach ($userdata as $key => $value)
    {!! "* " . $key . " : " . $value . "<br>" !!}
@endforeach

  {{-- <img src="/images/{{Session::get('path')}}" width ="200px"/> --}}
</body>
</html>