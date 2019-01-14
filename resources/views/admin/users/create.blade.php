@extends('layouts.app')

@section('content')
    
    @include('admin.includes.errors')

    <div class="panel panel-info">
        <div class="panel-heading naslov">
            <h4>Create a new User</h4>
        </div>
        
        <div class="panel-body">
            
            <form action="{{ route('user.store') }}" method="post">
                
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="name">User</label>
                    <input type="text" name="name" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                
                <div class="text-center">
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Add User</button>
                    </div>

                </div>
            </form>
            
        </div>
        
    </div>

@stop
