@extends('layouts.sidebar')

@section('title', 'Chat')


@section('content')


<h1>Chat</h1>

<p>
    

</p>


<script>
conn.onmessage = function(e){
    console.log("recebeu");
    console.log(e);
}
</script>

@endsection
