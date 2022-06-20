<?php
class User{
    public $fname;
    public $lname;
    public $telephone;
    public $gender;
    public $nationality;
    public $username;
    public $email;
    public $password;
    public $cpassword;

    public function __construct($fname,$lname,$telephone,$gender,$nationality,$username,$email,$password,$cpassword){
    $this->fname=$fname;
    $this->lname=$lname;
    $this->telephone=$telephone;
    $this->gender=$gender;
    $this->nationality=$nationality;
    $this->username=$username;
    $this->email=$email;
    $this->password=$password;
    $this->cpassword=$cpassword;
    }
    public function registerUser($connection){
        if($this->password != $this->cpassword)
        {
            echo "Password don't match";
            return false;
        }
        $sql = "INSERT INTO users(firstName, lastName,telephone, gender, nationality,username,email,password) VALUES(:fname,:lname,:telephone,:gender,:nationality,:username,:email ,:password)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':fname', $this->fname);
        $statement->bindParam(':lname', $this->lname);
        $statement->bindParam(':telephone', $this->telephone);
        $statement->bindParam(':gender', $this->gender);
        $statement->bindParam(':nationality', $this->nationality);
        $statement->bindParam(':username', $this->username);
        $statement->bindParam(':email', $this->email);
        $statement->bindParam(':password', $this->password);

        try {
            $statement->execute();
            echo "User registered successfully";
        } catch (PDOException $err) {
            echo "Error ". $err->getMessage();
        }
    }
}
?>