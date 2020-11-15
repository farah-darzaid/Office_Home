@extends('todos.layouts.app')


@section('content')
    <div class="card">
        <div class="card-header text-center" >
           <h2 class="d-inline-block"> All Todo's </h2>
            <a href="{{ route('todo.create') }}" class="float-right mt-2">
                <i class="fas fa-plus-circle" style="font-size: 25px"></i>
            </a>
        </div>
        <x-alert/>

        <div class="card-body">
               <ul>
                   @foreach($todos as $todo)
                       <li class="d-flex justify-content-between">
                           <h3 class="{{ $todo->completed ? 'text-decoration-none': '' }}">{{ $todo->title }}</h3>
                           <div class="">
                               <a href="{{ route('todo.edit',$todo->id) }}">
                                   <i class="fas fa-edit" style="font-size: 20px"></i>
                               </a>
                               <form action="{{ route('complete-todo',$todo->id) }}" method="POST" class="d-inline-block text-light">
                                   @csrf
                                   <button type="submit" class="btn">
                                       @if($todo->completed == 0)
                                           <i class="fas fa-check text-success" style="font-size: 20px"></i>
                                       @else
                                           <i class="fas fa-times text-danger" style="font-size: 20px"></i>
                                        @endif
                                   </button>

                               </form>
                                   <a class="btn" data-toggle="modal" data-target="#deleteTodo{{$todo->id}}">
                                       <i class="far fa-trash-alt text-danger" style="font-size: 20px"></i>
                                   </a>

                                   <div class="modal fade" id="deleteTodo{{$todo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog" role="document" style="margin-top: 10%">
                                           <div class="modal-content">


                                               <h3 class="modal-body text-center">
                                                   Do you want to delete {{ $todo->title }} Todo?
                                               </h3>
                                               <div class="my-3 mx-auto">
                                                   <button type="button" class="btn text-danger" data-dismiss="modal">
                                                       <i class="far fa-times-circle" style="font-size: 50px"></i>
                                                   </button>
                                                   <form action="{{ route('todo.destroy',$todo->id) }}" method="POST" class="d-inline-block">
                                                       @csrf
                                                       @method('delete')
                                                       <button type="submit" class="btn text-success">
                                                           <i class="far fa-check-circle" style="font-size: 50px"></i>
                                                       </button>
                                                   </form>

                                               </div>
                                           </div>
                                       </div>
                                   </div>

                           </div>

                       </li>
                   @endforeach

               </ul>

        </div>
    </div>
@endsection
