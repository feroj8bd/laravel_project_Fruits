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

        <h4 class="text-center pt-3 mt-5">See Fruit Information</h4>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4"><img class="img-thumbnail" src="{{ asset('storage/'. $fruit->fruits_img) }}" alt=""></div>
            </div>

        <div class="row ">
            <div class="col-md-2">Fruit Name :</div>
            <div class="col-md-4">{{ $fruit->fruits_name }}</div>
        </div>

        <div class="row ">
            <div class="col-md-2">Fruit Type :</div>
            <div class="col-md-4">{{ $fruit->fruits_type }}</div>
        </div>

        <div class="row ">
            <div class="col-md-2">Fruit Price :</div>
            <div class="col-md-4">{{ $fruit->fruits_price }}</div>
        </div>
        <div class="row ">
            <div class="col-md-2">Expiry Date :</div>
            <div class="col-md-4">{{ $fruit->expiry_date }}</div>
        </div>
        <div class="row ">
            <div class="col-md-2">Fruit Image :</div>
            <div class="col-md-4">{{ $fruit->fruits_image }}</div>
        </div>
    </div>










    {{-- biotstarp js cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
