@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header"><h5 class="card-title">Add categories</h5></div>
                <div class="card-body">
                    <form action="{{ route('category-store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control"
                                   aria-describedby="emailHelp" placeholder="Name" name="name">
                            @if ($errors->any())
                                <span class="text-danger">Cannot be left blank</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Note_id</label>
                            <select class="form-control select-search" data-fouc name="note_id">
                                <option value="" disabled selected>Select your option</option>
                                @foreach($notes as $note)
                                    <option value="{{ $note->id }}">{{ $note->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->any())
                                <span class="text-danger">Cannot be left blank</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="text-right">
                            <a href="{{ route('category-index') }}" class="btn btn-danger">Back <i
                                    class="icon-paperplane ml-2"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
