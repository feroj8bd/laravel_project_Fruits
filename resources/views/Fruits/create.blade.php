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
            {{-- link for button --}}
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

        <h4 class="text-center pt-3 mt-5">Add Fruits</h4>

        <form action="{{ route('fruits.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- frutis name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="fruits_name">Name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="fruits_name" id="fruits_name" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('fruits_name')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- fruits type --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="fruits_type">Fruit Type :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="fruits_type" id="fruits_type" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('fruits_type')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- fruits price --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="fruits_price">Price :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="fruits_price" id="fruits_price" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('fruits_price')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- furits expiry date --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="expiry_date">Expiry Date :</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="expiry_date" id="expiry_date" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('expiry_date')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            {{-- fruits image --}}
            <input type="file" accept="image/*" id="uploadInput" >
            <div id="imagePreview"></div>

            <div class="row mt-3">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>

        </form>
    </div>


    {{-- biotstarp js cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        // Function to display image preview
        function displayImagePreview(file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var imagePreview = document.getElementById('imagePreview');
                imagePreview.innerHTML = ''; // Clear previous preview

                var imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '200px'; // Set maximum width for preview
                imgElement.style.maxHeight = '200px'; // Set maximum width for preview

                imagePreview.appendChild(imgElement);
            };

            reader.readAsDataURL(file); // Read the file as a data URL
        }

        // Event listener for file input change
        var uploadInput = document.getElementById('uploadInput');
        uploadInput.addEventListener('change', function() {
            var file = this.files[0]; // Get the selected file

            if (file) {
                displayImagePreview(file); // Display image preview
            }
        });
    </script>
</body>

</html>
