<?php
class Product{
    public $product;
    public $brand;
    public $telephone;
    public $supplier_name;
    public function __construct($product,$brand,$telephone,$supplier_name){
    $this->product=$product;
    $this->brand=$brand;
    $this->telephone=$telephone;
    $this->supplier_name=$supplier_name;
    }
    public function registerUser($connection){
        $sql = "INSERT INTO products(product_Name, brand,supplier_phone, supplier) VALUES(:product,:brand,:telephone,:supplier_name)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':product', $this->product);
        $statement->bindParam(':brand', $this->brand);
        $statement->bindParam(':telephone', $this->telephone);
        $statement->bindParam(':supplier_name', $this->supplier_name);
        try {
            $statement->execute();
            echo "Product registered successfully";
        } catch (PDOException $err) {
            echo "Error ". $err->getMessage();
        }
    }
    
}
?>