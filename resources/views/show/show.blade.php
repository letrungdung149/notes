@extends('layouts.app')
@section('content')
    <h2>{{ $note->name }}</h2>
    <p>{{ $note->description }}</p>
@endsection
