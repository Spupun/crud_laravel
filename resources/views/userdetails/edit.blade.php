<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Form</title>
</head>

<body>

    <div class="container mt-5">
        <form method="put" action="{{ url('userdetails/'.$userdetails->id.'/edit') }}">
            @csrf
            <!-- @method('PUT') -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{$userdetails->name}}" placeholder="Enter your name">
                @error('name') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="{{$userdetails->email}}" placeholder="name@example.com">
                @error('email') <span class="text-danger">{{$message}}</span>@enderror

            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="tel" class="form-control" name="mobile"value="{{$userdetails->mobile}}" placeholder="Enter your mobile number">
                @error('mobile') <span class="text-danger">{{$message}}</span> @enderror

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>