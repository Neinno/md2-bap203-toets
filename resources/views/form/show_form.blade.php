@extends('layouts.master')

@section('content')

    <div class="form_links">
        <h1>Link toevoegen</h1>
        <form action="{{ route('form.link_opslaan') }}" method="post">

            @csrf
            @method('PUT')

            @if($errors->count())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{ $error }}<br/>
                    @endforeach
                </div>
            @endif

            <input type="text" name="title" placeholder="title"><br>
            <input type="text" name="url" placeholder="url"><br>
            <input type="text" name="description" placeholder="description"><hr>
            <button type="submit"> Submit </button>

        </form>
    </div>

@endsection