@extends('layouts.app')

@section('content')
    
    @include('admin.includes.errors')

    <div class="panel panel-info">
        <div class="panel-heading naslov">
            <h4>Update Tag: {{ $tag->tag }}</h4>
        </div>
        
        <div class="panel-body">
            
            <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
                
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="tag" class="form-control" value="{{ $tag->tag }}">
                </div>
                <div class="text-center">
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update Tag</button>
                    </div>

                </div>
            </form>
            
        </div>
        
    </div>

@stop
