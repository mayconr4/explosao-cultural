<?php

namespace ExplosaoCultural\Services;

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
        $sql = "SELECT  
        eventos.id AS id,
        eventos.nome AS evento,
        DATE_FORMAT(eventos.datas, '%d/%m/%Y') AS data_evento,
        TIME_FORMAT(eventos.horario, '%Hh%i') AS horario,
        eventos.classificacao AS classificacao,
        eventos.telefone AS telefone,
        eventos.descricao AS descricao,
        eventos.imagem AS imagem,
        usuarios.nome AS criador,
        generos.nome AS genero,
        CONCAT(enderecos.rua, ', ', enderecos.numero, ' - ', enderecos.cidade) AS endereco
    FROM eventos
    JOIN usuarios ON eventos.usuario_id = usuarios.id
    JOIN generos ON eventos.genero_id = generos.id
    JOIN enderecos ON eventos.endereco_id = enderecos.id         
        ";
    // WHERE eventos.status = 1 
    // ORDER BY eventos.datas DESC, eventos.horario DESC Olhar com calma está relacionado a o metofo que você tem que desenvolver para o evento mais proximos terem preferenci a de exibição
        
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