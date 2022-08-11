@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h6> Categories </h6>
    </div>
    <div class="card-body">
       <div class="table ">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Name </th>
                    <th> Descrition </th>
                    <th> Image</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                 <tr >
                      <td > {{$item->id}}</td>
                      <td> {{$item->name}}</td>
                      <td> {{$item->description}}</td>
                      <td>
                       <img src="{{ asset('assets/uploads/category/'.$item->image)}}" alt="image here" height="50px" width="50px"
                    />
                    <td>
                      <a href="{{ url ('edit/'.$item->id)}}" class="btn btn-primary"> Edit </a>
                      <a href="{{ url ('delete/'.$item->id)}}"  class="btn btn-danger"> Delete </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </div>
</div>
@endsection
