@extends('app')


@section('title','Service Page')

@section('body')

    <h1>Service Page</h1>

    <ul>
        @forelse($services as $service )
            <li>{{$service }}</li>

        @empty
            <li>No Service</li>
        @endforelse

    </ul>

@endsection
