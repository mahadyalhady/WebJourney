<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">

        {{-- error message --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('formvalidation') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name </label>
                <input type="text" name="name" class="form-control" >
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" >
              @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" >
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    
      
</body>
</html>