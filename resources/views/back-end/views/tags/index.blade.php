@extends('back-end.layouts.default')
@section('content')
    <h1 class="mt-4">Posts</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Tags</li>
    </ol>

    <div class="row">
        <div class="col-sm-12">
            <div class="float-right mb-4">
                <a class="btn btn-secondary" href="{{route('backend.tags.add')}}"><i class="fa fa-plus"></i> Add New Tag</a>
                <a class="btn btn-secondary go_back_button" href="#"><i class="fas fa-backward"></i> Go Back</a>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Tags</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th width="140px">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>
                            <a class="btn btn-secondary btn-sm edit"> Edit</a>
                            <button type="button" class="btn btn-danger btn-sm"> Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>
                            <a class="btn btn-secondary btn-sm edit"> Edit</a>
                            <button type="button" class="btn btn-danger btn-sm"> Delete</button>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
