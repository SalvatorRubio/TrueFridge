<?php
require_once "./Db.php";

class Recipe extends Db
{
    private $id;

    public function setId($id)
    {
        $this->id = $id;
    }

    // Список рецептов
    public function getListRecipes($ingredients = [], $cooking_time = [])
    {
        $stmt = $this->dbh->prepare("CALL getListRecipe(?,?)");
        $stmt->bindParam(1, $ingredients, PDO::PARAM_STR, 400);
        $stmt->bindParam(2, $cooking_time, PDO::PARAM_STR, 400);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Информация о блюде
    public function getRecipe()
    {
        $stmt = $this->dbh->prepare("CALL getRecipe(?)");
        $stmt->bindParam(1, $this->id, PDO::PARAM_INT, 400);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Пошаговое приготовление блюда
    public function getStepsRecipe()
    {
        $stmt = $this->dbh->prepare("CALL getStepsRecipe(?)");
        $stmt->bindParam(1, $this->id, PDO::PARAM_INT, 400);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ингредиенты рецепта
    public function getIngredientsRecipe()
    {
        $stmt = $this->dbh->prepare("CALL getIngredientsRecipe(?)");
        $stmt->bindParam(1, $this->id, PDO::PARAM_INT, 400);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
