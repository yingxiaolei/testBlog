<?php
class Datebase
{
    /**
     * 数据库连接对象
     * @var PDO
     */
    private $connect;

    /**
     * 建立好数据库连接
     */
    public function __construct()
    {
        $dns = sprintf('mysql:host=%s;port=%s;dbname=%s;unix_socket=%s;charset=%s',
                $GLOBALS['settings']['dbHost'],
                $GLOBALS['settings']['dbPort'],
                $GLOBALS['settings']['dbName'],
                $GLOBALS['settings']['dbSocket'],
                $GLOBALS['settings']['dbCharset']
            );
        try {
            $this->connect = new PDO($dns, $GLOBALS['settings']['dbUser'], $GLOBALS['settings']['dbPass']);
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            exit;
        }
    }

}