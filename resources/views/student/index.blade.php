
<!DOCTYPE html>
<html>

<head>
    <title>students</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }
        
        .m-b-1em {
            margin-bottom: 1em;
        }
        
        .m-l-1em {
            margin-left: 1em;
        }
        
        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">
 

        <div class="page-header">
            <h1>Read students</h1> 
            <br>
        </div>


    <a href="">+ student</a> 

        <!-- PHP code to read records will be here -->



        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>address</th>
                <th>gender</th>
                <th>linkedIn</th>
                <th>image</th>
                <th>action</th>         
            </tr>

            @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->linkedIn}}</td>
                {{-- <td>{{$item->image}}</td> --}}
                
                {{-- <td><img width="30%" class="img-circle" src="{{ $item->image }}"></td> --}}
                <td><img width="50%" height="50%" class="img-circle" src="http://localhost/NtiLaravel/{{$item->newimage}}"></td>
                <td>
                    <a href='' class='btn btn-danger m-r-1em'>Delete</a>
                    <a href='' class='btn btn-primary m-r-1em'>Edit</a>       
                </td>
            </tr> 
            @endforeach
       
            <!-- end table -->
        </table>

    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>









