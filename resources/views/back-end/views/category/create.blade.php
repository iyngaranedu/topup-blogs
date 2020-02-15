@extends('back-end.layouts.default')
@section('content')
    <h1 class="mt-4">Categories</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">Categories</li>
        <li class="breadcrumb-item active">Add New Category</li>
    </ol>

    <div class="row">
        <div class="col-sm-12">
            <div class="float-right mb-4">
                <a class="btn btn-secondary go_back_button" href="#"><i class="fas fa-backward"></i> Go Back</a>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>The form title</div>
        <div class="card-body">

            <form class="pb-3">

                <div class="form-group">
                    <label for="input-name">Input Name</label>
                    <input type="text" class="form-control" id="input-name" name="input-name" placeholder="Input Name">
                </div>

                <div class="form-group">
                    <label for="input-name">Input Name</label>
                    <input type="text" class="form-control" id="input-name" name="input-name" placeholder="Input Name">
                </div>

                <div class="form-group">
                    <label for="input-name">Input Name</label>
                    <input type="text" class="form-control" id="input-name" name="input-name" placeholder="Input Name">
                </div>



                <div class="form-group">
                    <label for="message">Text area</label>
                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>


        </div>
    </div>

@endsection
