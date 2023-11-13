<?php
//phpinfo();
class ConexaoBD
{
    private static $conexao;

    public static function conectar()
    {
        if (!isset(self::$conexao)) {
            $host = '127.0.0.1';
            $dbname = 'edcatalogo';
            $username = 'admin';
            $password = 'root';

            try {
                self::$conexao = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $username, $password);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Erro na conexão: " . $e->getMessage();
            }
        }

        return self::$conexao;
    }
}
