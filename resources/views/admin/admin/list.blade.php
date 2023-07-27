@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{ url('admin/admin/add')}}" class="btn btn-sm btn-primary">Add New Admin</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          
          <div class="col-md-12">
           
            @include('_message')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Admin List</h3>
              </div>
              
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Date Created</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getRecord as $key => $value)
                     <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->created_at }}</td>


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
    
  </div>
@endsection
