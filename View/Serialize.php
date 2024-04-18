<?php
require "./Config/Database.php";

class Serialize
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    /**
     * Collects data of user with admin role from db and serialize that object
     * 
     * @return object
     */
    public function serializeUser(): object
    {
        $this->db->query('SELECT * FROM user WHERE role = :admin');
        $this->db->bind(':admin', "user");
        $row = $this->db->single();
        $row = serialize($row);
        return $row;
    }

    /**
     * Unserialize object and return that object
     * 
     * @return object
     * @param object $row
     */
    public function unserializeUser($row)
    {
        return unserialize($row);
    }
}
$init = new Serialize();
$obj = $init->serializeUser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searlization</title>
    <style>
        p {
            max-width: 50%;
        }
    </style>
</head>
<body>


<h1>Serialized Object</h1>
<p><?php var_dump($obj);?></p>

<h1>unSerialized Object</h1>
<p><?php var_dump($init->unserializeUser($obj));?></p>


</body>
</html>