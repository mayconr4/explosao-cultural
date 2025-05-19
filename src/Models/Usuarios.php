<?php 

namespace ExplosaoCultural\Models;
use ExplosaoCultural\Enums\TipoGenero; 


final class Usuarios 
{ 
    private ?int $id;
    private string $nome;
    private string $dataNascimento;
    private string $email;
    private string $senha;
    private TipoGenero $tipoDoUser; 



    public function __construct(
        string $nome,
        string $dataNascimento,
        string $email,
        string $senha,
        TipoGenero $tipoDoUser,
        ?int $id = null
    ) {
        $this->setNome($nome);
        $this->setDataNascimento($dataNascimento);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setTipoDoUser($tipoDoUser);
        $this->setID($id); 
    } 

    //getters 
    public function getId(): ?int 
    { 
        return $this->id;
    }

    public function getNome(): string
    { 
        return $this->nome;
    } 

    public function getDataNascimento(): string
    { 
        return $this->dataNascimento;
    }
    
    
    public function getEmail(): string
    { 
        return $this->email;
    }

    public function getSenha(): string
    { 
        return $this->senha;
    }

    public function getTipoDoUser(): TipoGenero
    { 
        return $this->tipoDoUser;
    } 

    //setters 
    public function setId(?int $id): void
    { 
        $this->id = $id;
    }

    public function setNome(string $nome): void
    { 
        $this->nome = $nome;
    }

    public function setDataNascimento(string $dataNascimento): void
    { 
        $this->dataNascimento = $dataNascimento;
    }

    public function setEmail(string $email): void
    { 
        $this->email = $email;
    }

    public function setSenha(string $senha): void
    { 
        $this->senha = $senha;
    }

    public function setTipoDoUser(TipoGenero $tipoDoUser): void
    { 
        $this->tipoDoUser = $tipoDoUser;
    }

}