<!DOCTYPE html>
<html>

<head>
    <title>Frutis</title>

    <!-- bootstarp cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="mt-3">
            <a href="{{ url('/') }}" class="btn btn-success">Home</a>
            <a href="{{ route('fruits.create') }}" class="btn btn-success">Add Fruits</a>

            <a href="{{ route('fruits.index') }}" class="btn btn-warning">See All Fruits</a>
        </div>

        @if (Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h4 class="text-center pt-3 mt-5">See All Fruits</h4>

        <table class="table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Fruits Name</th>
                    <th>Fruits Type</th>
                    <th>Fruits Price</th>
                    <th>Expiry Date</th>
                    <th>Fruits Image</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($fruits as $fruit)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $fruit->fruits_name }}</td>
                        <td>{{ $fruit->fruits_type }}</td>
                        <td>{{ $fruit->fruits_price }}</td>
                        <td>{{ $fruit->expiry_date }}</td>
                        <td>
                            {{ $fruit->fruits_img }}
                        </td>
                        <td>
                            <a href="{{ route('fruits.show', $fruit->id) }}" class="btn btn-success">Show</a>

                            <a href="{{ route('fruits.edit', $fruit->id) }}" class="btn btn-warning">Edit</a>
                            
                            <a href="{{ route('fruits.delete', $fruit->id) }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this item?')">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




    {{-- biotstarp js cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
