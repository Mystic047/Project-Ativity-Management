@extends('admin.layouts.master')

@section('content')
    <!-- Main Content --> 
        <section class="section">
          <div class="section-header">
            <h1>Type</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Type</h4>                   
                  </div>
                  <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Type Name</label>
                            <input type="text" class="form-control" name="name" value="{{$type->name}}">
                        </div>   
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </section>
@endsection