@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <table class="table table-bordered mt-5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Deleted at</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
            <td>{{ $product->deleted_at }}</td>
        </tr>
        @endforeach
    </table>
      
@endsection