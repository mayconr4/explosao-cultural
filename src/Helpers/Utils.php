<?php 

namespace ExplosaoCultural\Helpers;

use ExplosaoCultural\Enums\TipoClassificacao;
use ExplosaoCultural\Enums\TipoGenero;
use InvalidArgumentException;
use Throwable;

final class Utils 
{ 

    private function __construct()
    {
        
    }  
    

    public static function validarCamposEventos(string $nome,string $data, string $horario, TipoClassificacao $classificacao, string $telefone,  int $enderecoId, int $generoId, int $usuarioId) { 
        switch ($nome) {
            case empty($nome):
                throw new InvalidArgumentException("O campo nome está vazio");
                break; 
            case empty($data):
                throw new InvalidArgumentException("o campo de data está vazio");    
                break; 
            case empty($horario):
                throw new InvalidArgumentException("o campo de horario está vazio");    
                break; 
            case empty($classificacao):
                throw new InvalidArgumentException("o campo de classificacao está vazio");    
                break; 
            case empty($telefone):
                throw new InvalidArgumentException("o campo de telefone está vazio");    
                break; 
            case empty($enderecoId):
                throw new InvalidArgumentException("o campo de endereco está vazio");    
                break; 
            case empty($generoId):
                throw new InvalidArgumentException("o campo de genero está vazio");    
                break; 
             case empty($usuarioId):
                throw new InvalidArgumentException("o campo de usuario está vazio");    
                break;                                                    
            default:
                
                break;
        }

    }
    
     public static function registrarErro(Throwable $e): void
    {
        date_default_timezone_set('America/Sao_Paulo');

        $mensagem = "[" . date("Y-m-d H:i:s") . "]\n" .
            "Arquivo: " . $e->getFile() . "\n" .
            "Linha: " . $e->getLine() . "\n" .
            "Mensagem: " . $e->getMessage() . "\n\n";


        file_put_contents(__DIR__ . '/../../logs/erros.log', $mensagem, FILE_APPEND);
    }

     
}