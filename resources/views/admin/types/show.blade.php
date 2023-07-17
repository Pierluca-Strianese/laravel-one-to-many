@extends('admin.layouts.base')

@section('contents')
    <section>

        <h1 class="text-primary border-bottom border-primary p-2"> {{ $type->name }} </h1>

    </section>

    <section>

        <p class="p-3"> {{ $type->description }} </p>

    </section>

    <section>

        <h2> Project in {{ $type->name }}</h2>

    </section>

    <section>

        @foreach ($type->projects()->orderBy('created_at', 'DESC')->limit(3)->get() as $project)
            <li><a href="{{ route('admin.project.show', ['project' => $project]) }}">{{ $project->title }}</a></li>
        @endforeach

    </section>
@endsection
