@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title">My Todo List</h1>
            </div>
        </div>
        <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <input class="form-control form-control-lg mt-2" type="text" placeholder="Enter Task" name="title">
                </div>
                <div class="col-lg-4">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </div>
        </form>
        <table class="table todotable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Task</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                {{-- Mehema $key ekak dala order eka hadaganna puluwan --}}
              @foreach ($tasks as $key=>$item)
              <tr>
                <th>{{ $key+1 }}</th>
                <td>{{ $item->title }}</td>
                <td>@if ($item->status==0)
                    <span class="badge text-bg-warning">Not Completed</span>
                @else
                <span class="badge text-bg-success">Completed</span>
                    
                @endif</td>
                <td><a href="{{ route('task-check',$item->id) }}"><i class="fa-solid fa-circle-check check-btn"></i></a> &nbsp; <a href="{{ route('del-task',$item->id) }}"><i class="fa-solid fa-trash-can del-btn"></i></a></td>
                
              </tr>
              @endforeach
              
            </tbody>
          </table>
    </div>

@endsection

@push('css')
    <style>
       .todotable {
    margin-top: 8vh;
    font-size: 20px;
}
.title{
    margin-top: 5vh;
    text-align: center;
    color: #6cd767;
}
.check-btn{
    color:#2ed625;
    
}
.del-btn{
    color:rgba(207, 48, 48, 0.904);
}
    </style>
@endpush