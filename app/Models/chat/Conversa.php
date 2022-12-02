<?php

namespace App\Models\chat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversa extends Model
{
    public $msg;
    public $hora;
    public $destinatario;
    public $origem;
    public $status;
    public $link;


    function __construct($msg, $hora, $destinatario, $origem, $status, $link)
    {
        $this->msg = $msg;
        $this->hora = $hora;
        $this->destinatario = $destinatario;
        $this->origem = $origem;
        $this->status = $status;
        $this->link = $link;
    }


    // GETS___________
    public function get_msg()
    {
        return $this->msg;
    }

    public function get_hora()
    {
        return $this->hora;
    }

    public function get_destinatario()
    {
        return $this->destinatario;
    }

    public function get_origem()
    {
        return $this->origem;
    }

    public function get_status()
    {
        return $this->status;
    }

    public function get_link()
    {
        return $this->link;
    }



    // SETS__________
    public function set_msg($e)
    {
        $this->msg = $e;
    }

    public function set_hora($e)
    {
        $this->hora = $e;
    }

    public function set_destinatario($e)
    {
        $this->destinatario = $e;
    }

    public function set_origem($e)
    {
        $this->origem = $e;
    }

    public function set_status($e)
    {
        $this->status = $e;
    }

    public function set_link($e)
    {
        $this->link = $e;
    }



    // PRINTS INI ----------------------------------

    public function print_receb()
    {

        return '
        <p>
            <span > USER - ' . $this->origem . ' </span>
            ' . $this->msg . '
        </p>';
    }

    public function print_env()
    {

        return '
        <p >
            ' . $this->msg . '
        </p>';
    }
}
