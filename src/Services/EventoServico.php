<?php

namespace ExplosaoCultural\Services\EventoServico;

use Exception;
use ExplosaoCultural\DataBase\ConexaoDB;
use ExplosaoCultural\Models\Evento;
use ExplosaoCultural\Enums\TipoGenero;
use ExplosaoCultural\Helpers\Utils;
use PDO;
use Throwable;

final class EventoServico
{
    private PDO $conexao;
    
    //construct
    public function __construct()
    {
        $this->conexao =  ConexaoDB::getConexao();
    } 

    //listarTodos
    public function listarTodos(): array
    { 
        $sql = "SELECT * FROM eventos";
        
        try {
            $consulta = $this->conexao->prepare($sql); 
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch(Throwable $erro){
            Utils::registrarErro($erro);
            throw new Exception("erro ao listar eventos");
        }

    }  

    //inserir 
    /*public function inserir(Evento $evento): 
    { 
        $sql = "";
        
        
    }*/

}