@extends('layout')

@section('content')
    <h3>Editer Etudiant</h3>
    <form  method="POST" action="{{route('student.update', $student->id)}}"  enctype="multipart/form-data">
        @method('PUT')

        @csrf
        <div class="form-group">
            <label for="name">Id:{{ $student->id }} </label>
            <input style="display: none;" type="text" class="form-control" name="id" value="{{ $student->id }}">
        </div>

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" name="name" value="{{ $student->name }}" >
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control"  name="email" value="{{ $student->email }}">
        </div>

        <div class="form-group">
            <label for="phone">Phone: </label>
            <input type="text" class="form-control"  name="phone" value="{{ $student->phone }}">
        </div>

        <div class="form-group">
            <label for="section">Section: </label>
            <input type="text" class="form-control"  name="section" value="{{ $student->section }}">
        </div>

        <div class="form-group">

        <label for="image">Image Actuelle: </label>

        @if ($student->image)

        <img src="/image/{{ $student->image }}" width="80" height="80" alt="image Actuelle"></td>

        @else

            <p>Aucune image actuelle.</p>

        @endif

    </div>

    <div class="form-group">

        <label for="image">Nouvelle Image: </label>

        <input type="file" class="form-control" name="image">

    </div>
        <div>
        <button type="submit" class="btn btn-primary">Editer</button>
        </div>
    </form>
@endsection