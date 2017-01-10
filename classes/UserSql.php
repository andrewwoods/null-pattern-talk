<?php

class UserSQL {
    protected $db = null;

    public function __construct(){
    }

    public function setDbHandle($db){
        $this->db = $db;
    }

    /**
     * The traditional way of getting user information
     *
     * @param int $userId
     * @return StdClass|null
     */
    public function getUserById($userId){
        $result = null;

        $sql = 'SELECT * FROM user WHERE id = ? ';

        $query = $this->db->prepare($sql);
        if (! $query){
            die('ZOMG! IM DEAD');
        }
        $query->bind_param('i', $userId);
        $query->execute();

        $result = $query->get_result();
        if (0 === $result->num_rows){
            return null;
        }
        $data = $result->fetch_object();

        $query->close();
        return $data;
    }

    /**
     * The traditional way of getting user information
     *
     * @param int $userId
     * @return StdClass|null
     */
    public function getUserByIdAlternate($userId){
        $result = null;

        $sql = 'SELECT * FROM user WHERE id = ? ';

        $query = $this->db->prepare($sql);
        if (! $query){
            die('ZOMG! IM DEAD');
        }
        $query->bind_param('i', $userId);
        $query->execute();

        $result = $query->get_result();
        if (0 === $result->num_rows){
            return new NullUser();
        }
        $data = $result->fetch_object('User');

        $query->close();
        return $data;
    }

}
