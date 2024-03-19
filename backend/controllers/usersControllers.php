<?php 
require_once(__DIR__ . '/../models/date.php');
require_once(__DIR__ . '/../models/users.php');
class usersController {
    public function getAll_users() {

        $limit = intval($_GET['limit'] ?? '-1');

        $users = Users::getAll($limit);
        formatDataDates($users, ['created_at', 'updated_at']);
        
        sendJson($users);
    }
    public function add_user (){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
           
            $first_name= $_POST['first_name'] ?? null;
            $last_name = $_POST['last_name'] ?? null;
            $password= $_POST['password'] ?? null;
            $email = $_POST['email'] ?? null;
          $role_id= 2 ;
    
            if ($first_name && $last_name && $password && $email
          ) {
          
              
                $success = Users::add_users($first_name, $last_name, $password, $email, $role_id);
                header('Location: ../..//home-body.html');
                exit();
    
            } else {
                echo "veuillez remplir tous les champs du formulaire avec les donnés adéquate <br>";
           
                echo $first_name . "<br>";
                echo $last_name . "<br>";
                echo $email . "<br>";
                echo $password . "<br>";
                echo " Vous n'avez pas le status d'administateur <br>";
            }
        } else {
            echo "Invalid request method!";
        }
    }
}