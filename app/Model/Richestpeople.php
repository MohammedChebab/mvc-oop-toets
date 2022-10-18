<?php

/**
 * Dit is de model voor de controller Countries
 */

class RichestPeople
{
    //properties
    private $db;

    // Dit is de constructor van de Country model class
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getRichestpeople()
    {
        $this->db->query('SELECT * FROM richestpeople ORDER BY Networth DESC;');
        $result = $this->db->resultSet();
        return $result;
    }


}