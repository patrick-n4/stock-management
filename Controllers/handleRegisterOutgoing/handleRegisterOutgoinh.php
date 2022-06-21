<?php
class Product
{
    public $quantity;
    public $product_id;
    public function __construct($quantity, $product_id)
    {
        $this->product = $quantity;
        $this->product_id = $product_id;
    }
    public function registerUser($connection)
    {
        $sql = "INSERT INTO products(quantity,productId) VALUES(:quantity, :product_id)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':product', $this->product);
        $statement->bindParam(':brand', $this->product_id);
        try {
            $statement->execute();
            echo "You have ordered successfully";
        } catch (PDOException $err) {
            echo "Error " . $err->getMessage();
        }
    }
}
