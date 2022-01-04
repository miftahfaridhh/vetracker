@extends('layouts.master')
@section('content')

<div class="pt-5 success"></div>
<div class="pt-5 success"></div>
<div class="pt-5 success"></div>

<div class='container'>

     <div class="row">
          <div class="col-md-12">

               @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
               @endif
               <div class="card">
                    <div class="card-header">
                         <h4> Add Cars
                              <a href="{{ url('cars') }}" class="btn btn-danger float-end">Back</a>
                         <h4>
                    </div>
                    <div class="card-body">
                    
                         <form action="{{ url('add-cars') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <div class="form-group mb-3">
                                   <label for="">Owner</label>
                                   <input type="text" name="owner" class="form-control">
                              </div>
                              <div class="form-group mb-3">
                                   <label for="">img</label>
                                   <input type="file" name="img" class="form-control">
                              </div>
                              <div class="form-group mb-3">
                                   <label for="">model</label>
                                   <input type="text" name="model" class="form-control">
                              </div>
                              <div class="form-group mb-3">
                                   <label for="">seats</label>
                                   <input type="text" name="seats" class="form-control">
                              </div>
                              <div class="form-group mb-3">
                                   <label for="">transmission</label>
                                   <input type="text" name="transmission" class="form-control">
                              </div>
                              <div class="form-group mb-3">
                                   <label for="">vendor</label>
                                   <input type="text" name="vendor" class="form-control">
                              </div>
                              <div class="form-group mb-3">
                                   <label for="">location</label>
                                   <input type="text" name="location" class="form-control">
                              </div>
                              <div class="form-group mb-3">
                                   <label for="">price</label>
                                   <input type="text" name="price" class="form-control">
                              </div>
                              <div class="form-group mb-3">
                                   <button type="submit" class="btn btn-primary">Save Cars</button>
                              </div>
                         </form>

                    </div>
               </div>
          </div>
     </div>
</div>

<div class="pt-5 success"></div>
<div class="pt-5 success"></div>
<div class="pt-5 success"></div>

@stop