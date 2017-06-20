<?php

/**
 * Class UserSQL
 */
class UserSQL {
    protected $db = null;

    public function __construct($db){
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
     * with imitation null pattern.
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
            $nullAccount = new stdClass();

            $nullAccount->id = 0;
            $nullAccount->login = 'guest';
            $nullAccount->email = '';
            $nullAccount->password = '';
            $nullAccount->firstname = '';
            $nullAccount->lastname = '';
            $nullAccount->date_created = date('c');

            return $nullAccount;
        }

        $data = $result->fetch_object();

        $query->close();

        return $data;
    }

}
