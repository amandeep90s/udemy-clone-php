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
                $resultType = PDO::FETCH_OBJ;
                if($type !== 'object') {
                    $resultType = PDO::FETCH_ASSOC;
                }

                $result = $statement->fetchAll($resultType);

                if(is_array($result) && count($result) > 0) {
                    return $result;
                }
            }
        }
        return false;
    }
}
