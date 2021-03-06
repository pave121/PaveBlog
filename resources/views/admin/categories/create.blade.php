@extends('layouts.app')

@section('content')
    
    @include('admin.includes.errors')

    <div class="panel panel-info">
        <div class="panel-heading naslov">
            <h4>Create a new Category</h4>
        </div>
        
        <div class="panel-body">
            
            <form action="{{ route('category.store') }}" method="post">
                
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="text-center">
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Store category</button>
                    </div>

                </div>
            </form>
            
        </div>
        
    </div>

@stop
