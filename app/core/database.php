<?php

/**
 * Database class
 */
class Database
{
    private function connect()
    {
        $dbConnect = DB_DRIVER . ":hostname=" . DB_HOST . ";dbname=" . DB_NAME;
        return new PDO($dbConnect, DB_USER, DB_PASS);
    }

    public function query($query, $data = [], $type = 'object')
    {
        $con = $this->connect();
        $statement = $con->prepare($query);
        if ($statement) {
            $check = $statement->execute($data);
            if ($check) {
                if ($type === 'object') {
                    $resultType = PDO::FETCH_OBJ;
                } else {
                    $resultType = PDO::FETCH_ASSOC;
                }

                $result = $statement->fetchAll($resultType);

                if (is_array($result) && count($result) > 0) {
                    return $result;
                }
            }
        }
        return false;
    }

    public function create_tables()
    {
        $query = "
            CREATE TABLE IF NOT EXISTS `users` (
            `id` int NOT NULL AUTO_INCREMENT,
            `email` varchar(100) NOT NULL,
            `password` varchar(255) NOT NULL,
            `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            KEY `email` (`email`),
            KEY `created_at` (`created_at`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
        ";

        $this->query($query);
    }
}
