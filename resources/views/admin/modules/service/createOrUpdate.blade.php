@extends('layouts.admin.app')
@section('title', @$edit ? 'Service Update' : 'Service Create')
@section('css')
@endsection

@section('admin_content')

    <div class="pagetitle">
        <h1>Service {{ @$edit ? 'Update' : 'Create' }} Form</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Service</li>
                <li class="breadcrumb-item active">Service {{ @$edit ? 'Update' : 'Create' }} Form</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Multi Columns Form</h5>

            <!-- Multi Columns Form -->
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="inputName5" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="inputName5">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail5">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword5">
                </div>
                <div class="col-12">
                    <label for="inputAddress5" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>

    <div class="quill-editor-full">

    </div>



@section('js')
@endsection
@endsection
