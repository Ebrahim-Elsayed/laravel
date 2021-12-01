<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register student</title>
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


        <h2>Register student</h2>


        <form action="{{url('student/store')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" id="exampleInputName"
                    aria-describedby="" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                    placeholder="Password">
            </div>


            <div class="form-group">
                <label for="exampleInputName">Address</label>
                <input type="text" class="form-control" name="address" value="{{old('address')}}" id="exampleInputName"
                    aria-describedby="" placeholder="Enter Address">
            </div>

            <div class="form-group btn-group" data-toggle="buttons">
                <label class="btn btn-default btn-lg"> 
                    <input type="radio" name="gender" value="Female"><i class="fa fa-female"></i> Female
                </label>
                <label class="btn btn-default btn-lg">
                    <input type="radio" name="gender" value="Male"><i class="fa fa-male"></i> Male
                </label>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">LinkedIn Url</label>
                <input type="url" class="form-control" name="linkedIn" value="{{old('linkedIn')}}"
                    id="exampleInputPassword1" placeholder="LinkedIn Url">
            </div>

            <div class="form-group">
                <label>Image</label> <br>
                <input class="form-control" type="file" name="image" value="{{old('image')}}">
            </div>


            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

</body>

</html>
