@extends('layouts.sidebar')

@section('title', 'Main')


@section('content')

<div>
    <h1>OLA MUNDO</h1>
</div>


<script>

    conn = new WebSocket('ws://127.0.0.1:8086/');

    conn.onopen = function(e){
        console.log("deu BoA");
    }

    conn.onmessage = function(e){
        console.log("recebeu");
    }
</script>

@endsection
