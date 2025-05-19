<?php 

namespace ExplosaoCultural\Helpers;

use ExplosaoCultural\Enums\TipoClassificacao;
use ExplosaoCultural\Enums\TipoGenero;
use InvalidArgumentException;

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

     public static function parseTipoGenero(string $valor): TipoGenero
    {
        foreach (TipoGenero::cases() as $case) {
            if (strcasecmp($case->value, $valor) === 0) {
                return $case;
            }
        }

        throw new InvalidArgumentException("Gênero inválido: '$valor'");
    }

    public static function parseTipoClassificacao(string $valor): TipoClassificacao
    {
        foreach (TipoClassificacao::cases() as $case) {
            if (strcasecmp($case->value, $valor) === 0) {
                return $case;
            }
        }

        throw new InvalidArgumentException("Classificação inválida: '$valor'");
    }
}