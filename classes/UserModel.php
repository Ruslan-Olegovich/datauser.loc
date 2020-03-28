<?php
class UserModel
{
    private $name;
    private $surname;
    private $patronymic;
    private $age;
    private $phone;
    private $email;



   public function __construct($name) {

    $this->name = $name;

    $error = [];

        if($data['name']===null) {

              $error[]='Заполните поле!';
        }
        if($data['surname']===null) {

              $error[]='Заполните поле!';
        }
        if($data['phone']===null){

              $error[]='Заполните поле!';
              print_r($error);
        }

   }

}





// function clean($value = ""){
//   $value = trim($value);
//   $value = stripslashes($value);
//   $value = strips_tags($value);
//   $value = htmlspecialchars($value);
//
//   return $value;
// }
?>
