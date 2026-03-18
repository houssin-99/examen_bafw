@extends('layout.master')

@section('title', 'Nieuwe Cursus')

@section('content')
    <h2>Nieuwe cursus toevoegen</h2>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf {{-- Verplicht voor de veiligheid in Laravel! --}}
        
        <div>
            <label>Titel:</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title') 
                <div class="error" style="color: red;">{{ $message }}</div> 
            @enderror
        </div>

        <br>

        <div>
            <label>Beschrijving:</label><br>
            <textarea name="description">{{ old('description') }}</textarea>
            @error('description') 
                <div class="error" style="color: red;">{{ $message }}</div> 
            @enderror
        </div>

        <br>

        <div>
            <label>
                <input type="checkbox" name="active" value="1" {{ old('active') ? 'checked' : '' }}> Direct actief zetten
            </label>
        </div>

        <br>

        <button type="submit">Cursus Opslaan</button>
    </form>
@endsection