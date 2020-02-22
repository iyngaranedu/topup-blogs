@extends('back-end.layouts.default')
@section('content')
    <h1 class="mt-4">Edit Tag #1233</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">Tags</li>
        <li class="breadcrumb-item active">Edit Tag</li>
    </ol>

    <div class="row">
        <div class="col-sm-12">
            <div class="float-right mb-4">
                <a class="btn btn-secondary go_back_button" href="#"><i class="fas fa-backward"></i> Go Back</a>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>The Tag Details</div>
        <div class="card-body">

            <form class="pb-3">

                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tag">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>


        </div>
    </div>

@endsection
