@extends('admin.layouts.master')

@section('content')
    <!-- Main Content --> 
        <section class="section">
          <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Table</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Simple Table</h4>
                    <div class="card-header-action">
                        <a href="{{route('type.create')}}" class="btn btn-primary">+ Create New</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-striped table-bordered border-dark">
                        <thead style="background: #f2f2f2">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col" >Name</th>
                            <th scope="col" >Publish Date</th>
                            <th scope="col" >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $type)
                            <tr>
                                <th scope="row">{{$type->id}}</th>
                                <td>{{$type->name}}</td>
                                <td>{{date('d-m-Y', strtotime($type->created_at))}}</td>
                                <td>
                                    <div class="d-flex">
                                        {{-- <a href="{{route('parties.show', $party->id)}}" class="btn btn-success mx-1">Show</a> --}}
                                        <a href="{{ route('type.edit', $type->id) }}" class="btn btn-warning mx-1">Edit</a>
                                        {{-- <a href="" class="btn btn-danger">Delete</a> --}}
    
                                        {{-- <form action="{{route('parties.destroy', $party->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form> --}}
                                    </div>
                                </td>
                              </tr>
                            @endforeach                   
                        </tbody>
                      </table>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </section>
@endsection