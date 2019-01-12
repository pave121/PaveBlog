@extends('layouts.app')

@section('content')
    
    @include('admin.includes.errors')

    <div class="panel panel-info">
        <div class="panel-heading">
            <center><b><h4>Update Category: {{ $category->name }}</h4></b></center>
        </div>
        
        <div class="panel-body">
            
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
                
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                </div>
                <div class="text-center">
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update category</button>
                    </div>

                </div>
            </form>
            
        </div>
        
    </div>

@stop
