<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;


class SocketController extends Controller implements MessageComponentInterface
{

    protected $clients;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        echo "ALOUUU BR";
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
    }
    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
    }
    public function onError(ConnectionInterface $conn, Exception $e)
    {
        echo "ERRO NA CONN {$e->getMessage()} \n";
        $conn->close();
    }
}