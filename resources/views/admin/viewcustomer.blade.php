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
                <div class="row justify-content-center mt-3">
                    <div>
                        <h2 class="row justify-content-center">Customer Details</h2>
                    </div>
                    <div class="col-12">

                        <div class="row">
                            <div class="col-9">
                                Show <select>
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>75</option>
                                </select> entries
                            </div>
                            <div class="col justify-content-end">
                                Search <input type="search">
                            </div>
                        </div>
                    </div>



                </div>






                <div class="row justify-content-center mt-3">

                    <table class="table table-striped w-85 ml-3">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <ul class="list-inline m-0">

                                        <li class="list-inline-item">
                                            <button class="btn btn-success btn-sm rounded-0" type="button"
                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-edit"></i></button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                    class="fa fa-trash"></i></button>
                                        </li>
                                    </ul>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>

</html>