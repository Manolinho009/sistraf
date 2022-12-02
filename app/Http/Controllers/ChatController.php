<?php

namespace App\Http\Controllers;

use App\Models\chat\Conversa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use SleekDB\Store;

class ChatController extends Controller
{
    // INI ROTAS ------------------------------------------

    public function chat()
    {
        return view('chat.chatMain');
    }




    // END ROTA ----------------------------------------------


    public static function insertMsg(Conversa $conversa)
    {

        $chatStore = new Store("ChatMsgBase", public_path('storage'));
        // CAMPPOS DO BANCO DE DADOS 
        // protected $msg;
        // protected $hora;
        // protected $destinatario;
        // protected $origem;
        // protected $status;
        // protected $link;


        $msg = [
            'msg' => $conversa->get_msg(),
            'hora' => $conversa->get_hora(),
            'destinatario' => $conversa->get_destinatario(),
            'origem' => $conversa->get_origem(),
            'status' => $conversa->get_status(),
            'link' => $conversa->get_link()
        ];
        // Insert the data.
        $msgI = $chatStore->insert($msg);
        return $msgI;
    }


    public static function getHisMsg($orig, $dest)
    {
        $Store = new Store("ChatMsgBase", public_path('storage'));

        try {
            $conv = $Store->createQueryBuilder()
                ->where([[["origem", "=", $orig], "AND", ["destinatario", "=", $dest]], "OR", [["origem", "=", $dest], "AND", ["destinatario", "=", $orig]]])
                ->getQuery()
                ->fetch();

            $resultado = '';
            foreach ($conv as $key => $value) {
                # code...
                $convResult = new Conversa($value['msg'], $value['hora'], $value['destinatario'], $value['origem'], $value['status'], $value['link']);
                if ($orig == $value['origem']) {
                    $resultado = $resultado . ' ' . $convResult->print_env();
                } else {
                    $resultado = $resultado . ' ' . $convResult->print_receb();
                }
            }
            return $resultado;
        } catch (Exception $e) {
            return 'ERRO BANCO -' . $e->getMessage();
        }
    }
}
