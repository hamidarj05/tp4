@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 15%;
            border-radius: 15px;
            padding: 0 0 15px 0;
            margin-top: 30px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }
    </style>
</head>

<body>
    @section('content')
        <div
            style="background-image: url('{{ asset('images/back.jpg') }}') ; background-repeat: no-repeat ; background-size: cover; width: 100% ; height: 50vh;">
            <h1 style="color: black; font-size: 48px; font-weight: bold; text-align : center">Le chemin vers l'exilence</h1>
        </div>
        <div class="cards">
            <x-card text="hello" title="hello" image="{{ asset('images/act2.jpeg') }}" />
        </div> 
    @endsection
</body>

</html>