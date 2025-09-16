<?php

namespace App\Services;

use App\Models\Personagem;
use App\Models\Criatura;
use App\Models\Ficha;
Use App\Models\Valquiria;
use stdClass;

class RPGService
{
    // Example method: calculate character level based on experience points
    public static function getCriatura($item)
    {
        $data = new stdClass();
        $criatura = Criatura::where('id', $item->id_criatura)->first();
        if(!$criatura){
            return [
                'status' => 'sucesso',
                'mensagem' => 'Criatura não encontrado',
            ];
        } 
        return [
                'status' => 'sucesso',
                'mensagem' => 'Criatura encontrado',
                'data' => $data,
            ];

    }

    public static function getFicha($item)
    {
        $data = new stdClass();
        $ficha = Ficha::where('id',$item->id_ficha)->first();
        $data->ficha = $ficha;

        if(!$ficha){
            return response()->json(
                [
                    'status'=>'erro',
                    'mensagem'=>'Ficha inexistente',
                    // 'data'=> "Ficha inexistente";
                ]
                );
        }
        $criatura = Criatura::where('ficha_id',$ficha->id)->first();
        if(!$criatura){
            $data->criatura = "Criatura não encontrada";
        }else{
            $data->criatura = $criatura;
        }
        $personagem = Personagem::where('criatura_id', $criatura->id)->first();
        if(!$personagem){
            $data->personagem = "Personagem não encontrado.";
        }else{
            $data->personagem = $personagem;
        }
        $valquiria = Valquiria::where('criatura_id', $criatura->id)->first();
        if(!$valquiria){
            $data->valquiria ="Valquiria não encontrada";
        }else{
            $data->valquiria = $valquiria;
        }
        // $data->monstro =  Monstro::where('criatura_id', $criatura->id)->first();
        // if(!$monstro){
        //     $data->monstro = "Monstro não encontrado";
        // }else{
        //     $data->monstro = $monstro;
        // }

        return 
        [
        'status' => 'sucesso',
        'mensagem' => "Ficha encontrada com sucesso!",
        'data' => $data,
        ];
    }
    
}