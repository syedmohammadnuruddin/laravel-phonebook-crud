<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(session('success'))
                    <li class="alert alert-danger">{{session('success')}}</li>
                @endif
                @include('error')
                <h2>Add contact</h2>
                <form class="form-control" action="{{route('createContact')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" name="name" class="form-control" placeholder="Name"><br>
                    <input type="email" name="email" class="form-control" placeholder="Email"><br>
                    <input type="number" name="contact" class="form-control" placeholder="Contact Number"><br>
                    <input type="submit" name="submit" value="Add Contact" class="form-control btn btn-primary"><br>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table table-dark table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($contacts as $key => $contact)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->contact }}</td>
                        <td>
                            <a href="{{route('showEdit',$contact->id)}}">Update</a>
                            <a onclick="return confirm('Are you sure?')" href="{{route('deleteContact',$contact->id)}}">Delete</a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="5">No Data</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
