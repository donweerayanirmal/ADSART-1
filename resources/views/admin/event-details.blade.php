@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="container mt-3 col">
        <div class="row row justify-content-center mt-3">
            <h2 class="mb-3"> Event:</h2>
        </div>
        <div class="row">
            <div class="col-6">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Event Date</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Stand-by Date</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>place</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Stand-by Time</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Starting Time</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Number of Cameras</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Time Created</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Special Requirements</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" data-dismiss="modal" class="btn btn-primary">View Calender</a>
                <a href="#" data-dismiss="modal" class="btn btn-primary">Confirm</a>
            </div>

            <div class="col-6">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Customer Name</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Contact Number</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection('content')