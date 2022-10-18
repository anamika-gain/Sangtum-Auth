<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            @if (Session::get('success'))
            <div class="alert alert-primary" role="alert">
                <p>  {{Session::get('success')}}</p>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            import
                        </div>
                        <div class="card-body">
                            <form action="{{route('employee.import')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group m-2">
                                    <label for="title">Choose CSV/Excel</label>
                                    <input type="file" name="file" class="form-contro"/>
                                </div>
                                
                                <button type="submit" class="btn btn-primary m-2">Import Employee Data</button>
                            </form>
                        </div>
                    </div>
                    <br>

                        <div class="card">
                            <div class="card-header">
                                list of Users
                                <a class="btn btn-danger float-end mx-2" href="{{url('/export-excle')}}" >Export Excle Data</a>
                                <a class="btn btn-danger float-end" href="{{url('/export-csv')}}" >Export CSV Data</a>
                            </div>
                            <div class="card-body">
                                 
                            <table class="table table-bordered mt-3">
                                
                                <thead>
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">age</th> 
                                    <th scope="col">Designation</th>  
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($employee as $row)
                                  <tr>
                                    <th scope="row">{{$row->id}}</th>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->age}}</td>
                                    <td>{{$row->designation}}</td>
                                  </tr>
                                  @endforeach
                             
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>