<?php
class Order
{
    public $quantity;
    public $product_id;
    public $product_name;
    public function __construct($quantity, $product_id, $product_name)
    {
        $this->quantity = $quantity;
        $this->product_id = $product_id;
        $this->product_name = $product_name;
    }
    public function registerOutgoing($connection)
    {
        $sql = "INSERT INTO outgoing(productId,quantity, productName) VALUES(:product_id, :quantity,:product_name)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':product_id', $this->product_id);
        $statement->bindParam(':quantity', $this->quantity);
        $statement->bindParam(':product_name', $this->product_name);
        try {
            $statement->execute();
            echo "You have ordered successfully";
        } catch (PDOException $err) {
            echo "Error " . $err->getMessage();
        }
    }
}
