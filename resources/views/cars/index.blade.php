@extends('layouts.master')
@section('content')

<div class="pt-5 success"></div>
<div class="pt-5 success"></div>
<div class="pt-5 success"></div>

<div class='container'>

     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                         <h4> Cars
                              <a href="{{ url('add-cars') }}" class="btn btn-primary float-end">Add Cars</a>
                         <h4>
                    </div>
                    <div class="card-body">

                         <table class="table table-bordered table-striped">
                              <thead>
                                   <tr>
                                        <th>ID</th>
                                        <th>Owner</th>
                                        <th>Car</th>
                                        <th>Model</th>
                                        <th>Seats</th>
                                        <th>Transmission</th>
                                        <th>Vendor</th>
                                        <th>Location</th>
                                        <th>Price</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach ($cars as $item)
                                   <tr>
                                        <td>{{ $item-> id}}</td>
                                        <td>{{ $item-> owner}}</td>
                                        <td>
                                             <img src="{{ asset('uploads/cars/'.$item->img) }}" width="70px" height="70px" alt="image">
                                        </td>
                                        <td>{{ $item-> model}}</td>
                                        <td>{{ $item-> seats}}</td>
                                        <td>{{ $item-> transmission}}</td>
                                        <td>{{ $item-> vendor}}</td>
                                        <td>{{ $item-> location}}</td>
                                        <td>{{ $item-> price}}</td>
                                        <td>
                                             <a href="{{ url('edit-cars/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                             <a href="{{ url('delete-cars/'.$item->id) }}" class="btn btn-primary btn-sm">Delete</a>
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

<div class="pt-5 success"></div>
<div class="pt-5 success"></div>
<div class="pt-5 success"></div>

@stop