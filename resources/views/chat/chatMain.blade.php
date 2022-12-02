@extends('layouts.sidebar')

@section('title', 'Chat')


@section('content')


<h1>Chat</h1>

<div>

    <label id="user" for="orig">ORIGEM</label>
    <input aria-label="orig" id="orig" name="orig" type="text">
    <label id="destinatario" for="dest">DESTINO</label>
    <input aria-label="dest" id="dest" name="dest" type="text">
    
    <button onclick="send(0)" id="envi">ENVIAR</button>
    <button onclick="send(1)" id="envi">SET</button>
    
    <div id="conversa">
        
    </div>
    <textarea aria-label="dest" id="msg" type="text"></textarea>

</div>

<script>

conn = new WebSocket('ws://localhost:8086/');

conn.onmessage = function(e){
    console.log("recebeu");
    console.log(e.data);
    document.getElementById('conversa').innerHTML += e.data;
}

function transmitMessage(msg) {
	conn.send( msg );
}



function send(protocolo){

    var origem = $("#orig").val();//$('#destinatario').val();
    var destinatario = $("#dest").val();//$('#destinatario').val();
    var mensagem = $('#msg').val();

	document.getElementById('user').innerText = origem;
	document.getElementById('destinatario').innerText = destinatario;


    var data = {"protocolo":protocolo ,"hora":'','status':'','link':'' , 'msg': mensagem , 'destino':destinatario, 'origem':origem}

	transmitMessage(JSON.stringify(data));
}

</script>

@endsection
