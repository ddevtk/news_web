@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add photo</h4>
                <form class="forms-sample" method="POST" action="{{ route('photo.store') }}"
                    enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label for="title">Photo title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>




                    <div class="form-group">
                        <label for="exampleFormControlFile1">
                            <h4>Image Upload</h4>
                        </label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                    </div>



                    <div class="form-group">
                        <label for="type">
                            <h4>Photo type</h4>
                        </label>
                        <select name="type" id="type" class="form-control">
                            <option value="1">Big photo</option>
                            <option value="0">Small photo</option>
                        </select>
                    </div>

                    <div class="row" style="justify-content: center">
                        <button type="submit" class="btn btn-primary mr-2" style="padding: 10px 15px">Submit</button>

                    </div>

                </form>
            </div>
        </div>
    </div>

</div>


@endsection
