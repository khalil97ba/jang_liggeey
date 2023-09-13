 @extends('layout')

@section('content')
    <h3>donnees de l'etudiant</h3>

    <table style="border: 0px;">
        <tr>
            <td>
            <p><b class="lbl">Id :</b>{{ $student->id }}</p>
            <p><b class="lbl">Name :</b>{{ $student->name }}</p>
            <p><b class="lbl">Phone :</b>{{ $student->phone }}</p>
            <p><b class="lbl">Email :</b>{{ $student->email }}</p>
            <p><b class="lbl">Section :</b>{{ $student->section }}</p>
            </td>

            <td style="padding-left: 100px;">
                <img src="/image/{{ $student->image}}" alt="image" width="80" height="80">
                
            </td>          

            <td>
            <form method="POST" action="{{ route('student.destroy', $student->id) }}" onsubmit="return confirm('Are you sure you want to delete this student?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger m-5">Delete</button>
            </form>

            </td>
        </tr>
    </table>
@endsection