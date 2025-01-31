@extends('layout.main')

@section('content')
<div class="container-fluid">

    <a data-toggle="modal" href="#myModal" class="btn btn-primary">New Employee</a>
    <!-- New employee modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Employee Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>
                <!-- Modal body -->
                <div class="modal-body">
                    <!-- Employee details form -->


                    <!-- Employee name -->
                    <form role="form" method="post" action="addEmployee">
                        {{csrf_field()}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <lable>Employee Name</lable>
                            <input type="text" name="user_name" class="form-control">
                        </div>

                        <!-- Employee NIC -->
                        <div class="form-group">
                            <lable>NIC</lable>
                            <label for="quantity"></label>
                            <input type="text" min="9" max="9" class="form-control">
                        </div>


                        <!-- Employee Address -->
                        <div class="form-group">
                            <lable>Employee Address</lable>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <!-- Employee contact number -->
                        <div class="form-group">
                            <lable>Employee Contact number</lable>
                            <input type="tel" id="phone" name="phone_no" class="form-control"
                                pattern="[0-9]{3} [0-9]{7}">
                            <small>Format: 011 8645678</small>
                        </div>

                        <!-- Employee email -->
                        <div class="form-group">
                            <lable>Email</lable>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <!-- Employee status -->
                        <div class="form-group">
                            <lable>Employee Status</lable>
                            <select name="Select Status" class="form-control">
                                <option>Temporary</option>
                                <option>Permanent</option>

                            </select>
                        </div>
                        <!-- Employee positions -->
                        <div class="modal-body row">
                            @foreach($positions as $pos)
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" name="{{$pos->position_id}}" class="form-check-input"
                                        value="">{{$pos->description}}
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- modal footer  -->
                        <div class="modal-footer">
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main header  -->
    <div class="row justify-content-center m-3">
        <div>
            <h2 class="row justify-content-center">Employees</h2>
        </div>
    </div>

    <!-- content  -->
    <div class="wrap-table100">

        <!-- Employee details table  -->

        <table id="example" class="table100 ver1 m-b-110 table-striped">
            <!-- Table head  -->
            <div class="table100-head">

                <thead>
                    <tr class="row100 head">
                        <th class="cell100 column1">Employee No</th>
                        <th class="cell100 column2">Employee Name</th>
                        <th class="cell100 column3">Status</th>
                        <th class="cell100 column4">Contact Number</th>
                        <th class="cell100 column5">Positions</th>
                    </tr>
                </thead>
            </div>

            <!-- Table body  -->
            <div class="table100-body js-pscroll">

                <tbody>
                    @foreach($employees as $emp)
                    <tr class="row100 body">
                        <td class="cell100 column1">{{$emp->user_id}}</td>
                        <td class="cell100 column2">{{$emp->user_name}}</td>
                        <td class="cell100 column3"></td>
                        <td class="cell100 column4">{{$emp->phone_no}}</td>
                        <td class="cell100 column5">

                            <ul class="list-inline m-0">
                                <!-- Button trigger modal for edit-->
                                <li class="list-inline-item float-right" data-toggle="modal" data-placement="bottom"
                                    title="Edit" data-target="#exampleModal"><a id="edit"><i class="fa fa-edit"></i></a>
                                </li>
                                <!-- Employee edit modal -->
                                <div class="modal" id="exampleModal">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Employee Details</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="container"></div>
                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <!-- Employee level -->
                                                <div class="form-group">
                                                    <lable>User Level</lable>
                                                    <select name="Select Status" class="form-control">
                                                        <option>Manager</option>
                                                        <option>Employee</option>

                                                    </select>
                                                </div>

                                                <!-- Employee status -->
                                                <div class="form-group">
                                                    <lable>Employee Status</lable>
                                                    <select name="Select Status" class="form-control">
                                                        <option>Temporary</option>
                                                        <option>Permanent</option>

                                                    </select>
                                                </div>
                                                <!-- Employee positions -->
                                                <div class="modal-body row">
                                                    <!-- Employee position first col  -->
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Audio Operator
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Cameraman
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Camera
                                                            Assistant
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Camera Operator
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Customer
                                                            Officer
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Driver
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Editor
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Engineer
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Flow Manager
                                                        </div>
                                                    </div>

                                                    <!-- Employee position second col  -->
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Graphic
                                                            Operator
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Labor
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Manager
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Production
                                                            Manager
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Setup
                                                            Technician
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Slomo Operator
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Technical
                                                            Assistant
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Technician
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                value="">Vision Operator
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- modal footer  -->
                                                <div class="modal-footer">
                                                    <div class="form-group">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary"
                                                                data-dismiss="modal">Save
                                                                Changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button trigger modal for delete-->
                                <li class="list-inline-item float-right" data-toggle="modal" data-placement="bottom"
                                    title="Delete" data-target="#exampleModal1"><a id="delete"><i
                                            class="fa fa-trash"></i></a>
                                </li>

                                <!-- Modal for delete-->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Are you sure that you want to permanently delete this record
                                                ?
                                            </div>

                                            <div class="modal-footer">
                                                <a href="/deleteUser/{{$emp->user_id}}" type="button"
                                                    class="btn btn-primary btn-sm">Yes</a>
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    data-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </div>
        </table>
    </div>

</div>
@endsection('content')