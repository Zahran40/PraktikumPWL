@extends('layouts.layouts')


@section('ToDoList')
<div class="container mt-4">
    <!-- Search Bar -->
   <!-- Search Bar -->
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="{{ route('create') }}" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Type here" aria-label="Task input">
                <button class="btn btn-success" type="submit">Add</button>
            </div>
        </form>
    </div>
</div>
    
    <!-- Task List -->
    @foreach ( $task as $tasks  )
        
    
    
    <div class="mt-4">
        <div class="container">
            <div class="col">
                
                <!-- Task 1 -->
                <form action="{{ route('delete', $tasks->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                <div class="alert alert-light d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-1">{{$tasks->task}}</h5>
                        <pc class ="mb-1">{{$tasks->tanggal}}</p>
                    </div>
                    <div>
                        <button class="btn btn-sm btn-secondary" title="Detail">View</button>
                        <button class="btn btn-sm btn-warning" title="Edit">Edit</button>
                        
                        
                    <button class="btn btn-sm btn-success" title="Done" onclick="return confirm('Anda yakin menghapus data')" >Done</button>
                    </form>
                    </div>
                </div>

                
        </div>
    </div>
</div>
@endforeach



@endsection