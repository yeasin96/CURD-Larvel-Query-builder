<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name"  name="name" >
                    </div>
                    <div class="mb-3">
                        <label for="City" class="form-label">City</label>
                        <input type="text" class="form-control" id="City"  name="city">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" 
                            name="marks">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @if(session()->has('sts'))
                <div class="alert alert-success">
                    {{session('sts')}}

                </div>
                @endif
            </div>
            <div class="col-sm-6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID </th>
                            <th scope="col">name </th>
                            <th scope="col">City </th>
                            <th scope="col">Marks </th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($std as $stu)
                        <tr>
                            <th>{{$stu->id}}</th>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->city}}</td>
                            <td>{{$stu->marks}}</td>
                            <td>
                                <a href="{{url('/edit',$stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>