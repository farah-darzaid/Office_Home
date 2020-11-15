@extends('todos.layouts.app')


@section('content')
    <div class="card">
        <div class="card-header text-center" >
            <a href="{{ URL::previous() }}" class="float-left mt-2">
                <i class="fas fa-chevron-circle-left" style="font-size: 25px"></i>
            </a>

            <h2 class="d-inline-block"> Edit {{ $todo->title }} </h2>
        </div>

        <div class="card-body">
            <form action="{{ route('todo.update',$todo->id) }}" method="POST" class="form-group">
                @csrf
                @method('put')
                <label for="title">todo title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title',$todo->title) }}">

                <button type="submit" class="btn btn-primary float-right mt-3">Save</button>
            </form>

        </div>
    </div>

@endsection
