<?php
require_once "./Db.php";

class Ingredient extends Db
{
    // Получение ингредиента
    public function getIngredient($name)
    {
        $stmt = $this->dbh->prepare("CALL getIngredient(?)");
        $stmt->bindParam(1, $name, PDO::PARAM_STR, 400);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}