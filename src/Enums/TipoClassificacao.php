<?php 
namespace ExplosaoCultural\Enums; 

enum TipoClassificacao{ 
    case INFANTIL;  
    case  ADULTO; 

    public function getDescricao(): string
    {
        return match($this) {
            self::INFANTIL => 'Classificação Infantil',
            self::ADULTO => 'Classificação Adulto',
        };
    }
}


TipoClassificacao::INFANTIL->getDescricao(); // "Classificação Infantil"