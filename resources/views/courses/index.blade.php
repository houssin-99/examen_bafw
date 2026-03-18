@extends('layout.master') {{-- Gebruik de basis layout --}}

@section('title', 'Alle Cursussen')

@section('content')
    <h2>Actieve Cursussen</h2>
    <table border="1" cellpadding="10" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Titel</th>
                <th>Beschrijving</th>
                <th>Status</th>
                <th>Actie</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td style="color: {{ $course->active ? 'green' : 'red' }}; font-weight: bold;">
                    {{ $course->active ? 'Actief' : 'Inactief' }}
                    </td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->active ? 'Actief' : 'Inactief' }}</td>
                    <td>
                        <form action="{{ route('courses.toggle', $course) }}" method="POST">
                            @csrf {{-- Beveiliging tegen CSRF aanvallen --}}
                            <button type="submit">Wissel Status</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection