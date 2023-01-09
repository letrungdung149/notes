@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header"><h5 class="card-title">Edit categories</h5></div>
                <div class="card-body">
                    <form action="/admin/category-update/{{ $category->id }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control"
                                   aria-describedby="emailHelp" placeholder="Name" name="name" value="{{ $category->name }}">
                            @if ($errors->any())
                                <span class="text-danger">Cannot be left blank</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Note_id</label>
                            <select class="form-control select-search" data-fouc name="note_id">
                                @foreach($notes as $note)
                                    <option value="{{ $note->id }}" {{ ($note->id == $category->note_id) ? 'selected' : '' }}>{{ $note->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->any())
                                <span class="text-danger">Cannot be left blank</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="text-right">
                            <a href="{{ route('category-index') }}" class="btn btn-danger">Back <i class="icon-paperplane ml-2"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
