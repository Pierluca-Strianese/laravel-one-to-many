@extends('admin.layouts.base')

@section('contents')
    <section>

        <h1 class="text-primary border-bottom border-primary p-2"> {{ $project->title }} </h1>
        <h2> Type: {{ $project->type->name }}</h2>

        <h2 class="font-size-4"> {{ $project->author }} </h2>
        <h3>Collaborators: {{ $project->collaborators }}</h3>
        <h3 class="text-primary border-bottom border-primary"> {{ $project->languages }} </h3>

    </section>

    <section>

        <p class="p-3"> {{ $project->description }} </p>

    </section>

    <section>

        <p class="border-top"> Date creation:{{ $project->creation_date }} </p>
        <p> Last Update:{{ $project->last_update }} </p>

    </section>
@endsection
