@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        
            <div class="col-12">

                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white">
                        <h4>Program List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Helpdesk</td>
                                        <td>
                                            <a class="btn btn-primary">View</a>
                                            <a class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

            </div>
       

    </div>
</div>
@endsection