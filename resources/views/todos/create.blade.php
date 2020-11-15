@extends('todos.layouts.app')


@section('content')
    <div class="card">
        <div class="card-header text-center" >
            <a href="{{ URL::previous() }}" class="float-left mt-2">
                <i class="fas fa-chevron-circle-left" style="font-size: 25px"></i>
            </a>

            <h2 class="d-inline-block"> Add Todo </h2>
        </div>
        <x-alert/>

        <div class="card-body">
            <form action="{{ route('todo.store') }}" method="POST" class="form-group">
                @csrf

                <label for="title">title</label>
                <input type="text" name="title" class="form-control">

                <button type="submit" class="btn btn-primary float-right mt-3">Save</button>

            </form>

        </div>
    </div>

@endsection
