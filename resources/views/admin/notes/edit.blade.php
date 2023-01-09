@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header"><h5 class="card-title">Edit note</h5></div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control"
                                   aria-describedby="emailHelp" placeholder="Name" value="{{ $note->name }}" name="name">
                            @if ($errors->any())
                                <span class="text-danger">Cannot be left blank</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="open-source-plugins">
                                {{ $note->description }}
                            </textarea>
                            @if ($errors->any())
                                <span class="text-danger">Cannot be left blank</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="text-right">
                            <a href="{{ route('note-index') }}" class="btn btn-danger">Back <i class="icon-paperplane ml-2"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
