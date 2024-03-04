<?
require_once "./Db.php";

class User extends Db
{
    private $name;
    private $second_name;

    public function login($login, $password)
    {
        $stmt = $this->dbh->prepare("CALL login(?,?)");
        $stmt->bindParam(1, $login, PDO::PARAM_STR, 400);
        $stmt->bindParam(2, $password, PDO::PARAM_STR, 400);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}