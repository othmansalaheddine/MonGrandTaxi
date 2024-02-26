<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<<<<<<< HEAD
    <body class="font-sans antialiased" style="background-image: linear-gradient(to left, rgb(22, 22, 22), rgb(0, 0, 0));">
=======
    <body class="font-sans antialiased" style="background-image: linear-gradient(to left, rgb(210, 210, 210), rgb(171, 87, 199));">
        @include('layouts.navigation')
>>>>>>> 52ea81c8b3720ecd5be6ec7ab26ac67758154993

        <div class="max-w-7xl mx-auto py-6 px-4 " >
            <form action="{{ route('driver.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <div>
                    <label class="form-label" style="font-family: 'bernard MT Condensed';color: rgb(229, 229, 229)">Profile Picture</label>
                    @if($user->profilepicture)
                        <img src="{{ asset($user->profilepicture) }}" alt="Profile Picture" width="200" height="200" style="margin-left: 9rem" >
                    @else
                        <p style="color: ">No image available</p>
                    @endif
                </div>
                <div>
                    <label class="form-label" style="font-family: 'FORCED SQUARE';color: rgb(229, 229, 229)">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Name" value="{{ $user->name }}">
                </div>
                <div>
                    <label class="form-label" style="font-family: 'FORCED SQUARE';color: rgb(229, 229, 229)">Email</label>
                    <input class="form-control" type="text" name="email" placeholder="Email" value="{{ $user->email }}">
                </div>
                <div>
                    <label class="form-label" style="font-family: 'FORCED SQUARE';color: rgb(229, 229, 229)">Phone</label>
                    <input class="form-control" type="text" name="phone" placeholder="Phone" value="{{ $user->phone }}">
                </div>
                <div>
                    <label class="form-label" style="font-family: 'FORCED SQUARE';color: rgb(229, 229, 229)">Description</label>
                    <input class="form-control" type="text" name="description" placeholder="Description" value="{{ $user->description }}">
                </div>
                <div>
                    <label class="form-label" style="font-family: 'FORCED SQUARE';color: rgb(229, 229, 229)">immatriculation</label>
                    <input class="form-control" type="text" name="immatriculation" placeholder="immatriculation" value="{{ $user->immatriculation }}">
                </div>
                <div>
                    <label class="form-label" style="font-family: 'FORCED SQUARE';color: rgb(229, 229, 229)">car_type</label>
                    <input class="form-control" type="text" name="car_type" placeholder="car_type" value="{{ $user->car_type }}">
                </div>
                <div>
                    <label class="form-label" style="font-family: 'FORCED SQUARE';color: rgb(229, 229, 229)">payment</label>
                    <input class="form-control" type="text" name="payment" placeholder="payment" value="{{ $user->payment }}">
                </div>
                <div>
                    <label class="form-label" style="font-family: 'FORCED SQUARE';color: rgb(229, 229, 229)">New Image for profile</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <div style="font-family: 'FORCED SQUARE';color: rgb(229, 229, 229) margin-top: 20px">
                    <input class="btn btn-primary" type="submit" value="Done" />
                </div>
            </form>
        </div>
    
        @include('layouts.footer')

        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>