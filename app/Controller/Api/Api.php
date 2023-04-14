<?php

namespace App\Controller\Api;

/**
 * Método responsável por retornar os detalhes da API
 * @param Request $request
 * @return Array
 */
class Api{
    public static function getDetails($request){
        return[
            'nome' =>'API - Projeto Integrador',
            'versao' => 'v1.0.0',
            'autor' => 'André Luiz',
            'email' => 'andre.rameck@gmail.com'
        ];
    }
}