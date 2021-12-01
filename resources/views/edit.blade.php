<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        
        <h2>Edit Blog</h2>


        <form action="{{url('/update')}}" method="post" >

            @csrf
        
                
        <div class="form-group">
            <label for="exampleInputName">title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}" id="exampleInputName"
                aria-describedby="" placeholder="Enter title">
        </div>
        
        <div class="form-group">
            <label for="exampleInputName">content</label>
            <input type="text" class="form-control" name="content" value="{{old('content')}}" id="exampleInputName"
            aria-describedby="" placeholder="Enter content">
        </div>

        <div class="form-group">
            <label for="exampleInputName">code</label>
            <input type="text" class="form-control" name="code" value="{{old('code')}}" id="exampleInputName"
                aria-describedby="" placeholder="Enter code">
        </div>

        <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>

</body>

</html>
