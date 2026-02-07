@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    @section('title', 'notes')
</head>

<body>

    @section('content')
        <h1>Liste Des Notes</h1>
        @isset($notes)
            <form action="{{ route('rechercher') }}" method="post">
                @csrf
                <input type="text" name="txtRech" value="{{ old('txtRech') }}" placeholder="Entrez un nom" />
                <button type="submit">Rechercher</button>
            </form>
            <ul>
                <table border="1">
                    <tr>
                        <th>Nom</th>
                        <th>Note</th>
                    </tr>
                    @php arsort($notes) @endphp

                    @foreach($notes as $nom => $note)

                        <tr>
                            @php
                                if ($note > 10) {
                                    $style = "background-color: green";
                                } elseif ($note >= 8 && $note <= 10) {
                                    $style = "background-color: orange";
                                } else {
                                    $style = "background-color: red";
                                }
                            @endphp
                            <td style="{{ $style }}">{{ $nom }}</td>
                            <td style="{{ $style }}">{{ $note }}</td>
                        </tr>

                    @endforeach
                </table>
            </ul>
        @endisset
    @endsection
</body>

</html>