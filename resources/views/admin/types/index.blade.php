@extends('admin.layouts.base')

@section('contents')
    {{-- @if (session('delete_success'))
        @php $project = session('delete_success') @endphp
        <div class="alert alert-danger">
            The project "{{ $project->title }}" has been Deleted
            <form action="{{ route('admin.project.restore', ['project' => $project]) }}" method="post" class="d-inline-block">
                @csrf
                <button class="btn btn-warning">Cancel</button>
            </form>
        </div>
    @endif --}}

    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th scope="row" class="text-center">{{ $type->id }}</th>
                    <td class="text-center">{{ $type->name }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary m-1"
                            href="{{ route('admin.types.show', ['type' => $type->id]) }}">View</a>
                        <a class="btn btn-warning m-1"
                            href="{{ route('admin.types.edit', ['type' => $type->id]) }}">Edit</a>
                        <form class="d-inline-block" method="POST"
                            action="{{ route('admin.types.destroy', ['type' => $type->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="d-flex justify-content-end p-2">
        <button class="btn btn-outline-danger"><a class="dropdown-item"
                href="{{ route('admin.types.trashed') }}">Trash</a></button>
    </div> --}}
@endsection
