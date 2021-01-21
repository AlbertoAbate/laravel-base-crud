@extends('layout.main')

@section('content')
    <div class="container mb-5">
        <h1>Our classrooms</h1>

        <table class="table mt-5 table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $classroom)
                    <tr>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->name }}</td>
                        <td class="text-center" width="100">
                            <a href="{{ route('classrooms.show', $classroom->id) }}" class="btn btn-success">show</a>
                        </td>
                        <td class="text-center" width="100">
                            <a href="#" class="btn btn-primary">edit</a>
                        </td>
                        <td class="text-center" width="100">
                            <a href="#" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection