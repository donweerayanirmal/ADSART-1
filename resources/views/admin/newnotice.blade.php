<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>newcustomer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="public/css/style" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="row">
            @include('admin.background.header')
        </div>
        <div class="row">
            @include('admin.background.sidebar')

            <div class="container mt-3 col">
                <div class="container">

                    <h2 class="row justify-content-center mt-3">Create a new notice</h2>


                    <div class="row justify-content-center mt-3">
                        <textarea class="form-control" rows="10" cols="5"></textarea>
                    </div>
                    <div class="text-center">
                        <a href="" class="btn btn-primary mt-3 ml-3">Publish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>