<?php

/*
 * $dbconn = new DatabaseConnection('localhost','user','password');
 * $userRepository = new UserRepository($dbconn);
 * $userRepository->getUserList();
 */

class UserRepository
{
    const SQL_USER_LIST = "select name from user";
    
    protected $connection;
    
    public function UserRepository($connection)
    {
        $this->connection = $connection;
    }
    
    public function getUserList()
    {   
        $results = $this->connection->query(SQL_USER_LIST);

        sort($results);

        return $results;
    }

}
