<?php

namespace App\Http\Controllers;

use App\Models\chat\Conversa;
use Exception;
use Illuminate\Http\Request;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class SocketController extends Controller implements MessageComponentInterface
{

    private $user;
    private $dest;

    protected $clients;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        $conn->send("CONECTOU");
        // echo "ALOUUU BR";
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        foreach ($this->clients as $client) {
            // $msgs = json_encode(ChatController::getMsg('msg'));
            // $client->send($client);

            echo $msg;
            $msgEnv = json_decode($msg);

            $conversa = new Conversa($msgEnv->msg, $msgEnv->hora, $msgEnv->destino, $msgEnv->origem, $msgEnv->status, $msgEnv->link);
            if ($msgEnv->protocolo == 1) {

                // $convHist =  SELECT * FROM MSG WHERE USER = $USER AND DESTINATARIO = $DEST
                $convHist = ChatController::getHisMsg($msgEnv->origem, $msgEnv->destino);
                $this->user[$from->resourceId] = $msgEnv->origem;
                $this->dest[$from->resourceId] = $msgEnv->destino;

                echo ($this->user[$from->resourceId] . ' - LOGOU');
                $client->send($convHist);
                continue;
            }
            // MSG ENVIADAS POR SI PROPRIO
            elseif ($from->resourceId == $client->resourceId) {


                ChatController::insertMsg($conversa);
                echo $msgEnv->msg;
                //Tratar de acordo com o css
                $client->send($conversa->print_env());

                continue;
            }
            // MSG RECEBIDA
            elseif ($this->user[$client->resourceId] == $msgEnv->destino) {
                echo $msgEnv->msg;
                //Tratar de acordo com o css
                $client->send($conversa->print_receb());
                continue;
            }

            echo ($this->user[$from->resourceId] . ' - ENVIOU:' . $msgEnv->msg . ' PARA:' . $this->dest[$from->resourceId]);
        }
    }

    public function onClose(ConnectionInterface $conn)
    {
        echo ($this->user[$conn->resourceId] . ' - DESLOGOU');

        unset($this->user[$conn->resourceId]);
        unset($this->dest[$conn->resourceId]);

        $this->clients->detach($conn);
    }
    public function onError(ConnectionInterface $conn, Exception $e)
    {
        echo "ERRO NA CONN {$e->getMessage()} \n";

        $conn->close();
    }
}
