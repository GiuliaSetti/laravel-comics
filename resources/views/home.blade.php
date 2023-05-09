@extends('layouts.layout')


@section('content')
    <div class="container">
    
        <!-- test -->
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <span>{{ $comic['title'] }}</span>    
                </li>        
            @endforeach
        </ul>
        
    </div>
@endsection