@extends('layout')

@section('content')
<h3>Listes des etudiants</h3>

<div class="table-wrapper">
    <table class="fl-table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Section</td>
                <td>Image</td>
                <td>Show</td>
                <td>Update</td>
                
            </tr>
        </thead>

        <tbody>

            @php
                $ide=1;
            @endphp

        @foreach ($student as $students )
            <tr>
                <td>{{ $ide }}</td>
                <td>{{ $students->name }}</td>
                <td>{{ $students->email }}</td>
                <td>{{ $students->phone }}</td>
                <td>{{ $students->section }}</td>
                <td><img src="/image/{{ $students->image }}" width="80" height="80" alt="image"></td>
                <td>
                        <a class="btn btn-info" href="{{route('student.show', $students->id)}}">Show</a>
             
                </td>

                <td>
                        <a class="btn btn-primary" href="{{route('student.edit', $students->id)}}">Edit</a>
                </td>
            </tr>

                @php
                    $ide+=1;
                @endphp

            @endforeach

        </tbody>
        
    </table>

</div>

<div class="pagination">
     {{ $student->links() }}
 </div>
@endsection