<?php
/**
 * Persistence: Connection
 */

namespace Persistence;

class Connection {

    public static function Connect() {
        try {
            /** 
             * Ler o arquivo de configuração contendo os parâmetros
             * de conexão com o banco de dados.
             */
            $ini = \parse_ini_file("../../config/config.ini", true);

            $dsn = $ini["DATABASE"]["dsn"];
            $dbuser = $ini["DATABASE"]["dbuser"];
            $dbpass = $ini["DATABASE"]["dbpass"];

            $options = [\PDO::ATTR_PERSISTENT => true];
            
            if (! self::$conn) {
                self::$conn = new PDO($dsn, $dbuser, $dbpass, $options);
            }
        } catch (\Exception $ex) {
            printf("Erro ao conectar o SGBD: " . $ex->getMessage());
            die();
        }
        return self::$conn;
    }
}