@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Roles</div>

                <div class="card-body">
                    @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif

                    <form action="{{ route('role.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="role_name">Add Role:</label>
                        <input type="text" name='name' class="form-control" id="role_name">
                        </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
