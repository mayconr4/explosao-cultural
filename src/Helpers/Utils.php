<?php 

namespace ExplosaoCultural\Helpers;

use Exception;
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

    public static function upload(?array $arquivo): void
    {
        // Se não houver arquivo, ou se o arquivo não for válido
        // (ou seja, não for um upload feito via $_FILES), aborta a execução
        if (
            !$arquivo ||
            !isset($arquivo["tmp_name"]) ||
            !is_uploaded_file($arquivo["tmp_name"])
        ) {
            self::alertaErro("Nenhum arquivo válido foi enviado.");
            return;
        }

        // Variáveis de configuração para o upload
        // (pasta de destino, formatos permitidos e tamanho máximo)
        $pastaDeDestino = "../images/";
        $formatosPermitidos = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'];
        $tamanhoMaximo = 2 * 1024 * 1024; // 2MB

        // Captura o mime type do arquivo enviado
        $formatoDoArquivoEnviado = mime_content_type($arquivo["tmp_name"]);

        // Se o arquivo não for do tipo permitido, aborta a execução
        if (!in_array($formatoDoArquivoEnviado, $formatosPermitidos)) {
            self::alertaErro("Apenas arquivos JPG, PNG, GIF e SVG são permitidos.");
            return;
        }

        // Se o arquivo for maior que o tamanho máximo, aborta a execução
        if ($arquivo["size"] > $tamanhoMaximo) {
            self::alertaErro("O arquivo é muito grande. Tamanho máximo: 2MB.");
            return;
        }

        // Define o nome do arquivo de destino
        // (pasta de destino + nome original do arquivo)
        $nomeDoArquivo = $pastaDeDestino . basename($arquivo["name"]);

        // Se o processo de upload falhar, aborta a execução
        if (!move_uploaded_file($arquivo["tmp_name"], $nomeDoArquivo)) {
            throw new Exception("Erro ao mover o arquivo. Código de erro: " . $arquivo["error"]);
        }
    }

      public static function alertaErro(string $mensagem): void
    {
        $mensagemSanitizada = filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
        die("<script>alert('$mensagemSanitizada'); history.back(); </script>");
    }


     
}