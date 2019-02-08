<?php
require_once('abstractDAO.php');
require_once('./model/user.php');

/**
 * Description of userDAO
 *
 * @author Sizhe Chen
 */
class userDAO extends abstractDAO {
        
    function __construct() {
        try{
            parent::__construct();
        } catch(mysqli_sql_exception $e){
            throw $e;
        }
    }
    

    public function addUser($user){

        if(!$this->mysqli->connect_errno){
            $query = 'INSERT INTO user_master (first_name,last_name,phone_no,email_id,password,join_date,last_login_date,user_type) VALUES (?,?,?,?,?,?,?,?)';
            
            $stmt = $this->mysqli->prepare($query);
        
            $stmt->bind_param('ssssssss', 
                    $user->getFirstName(), 
                    $user->getLastName(),
                    $user->getPhoneNumber(), 
                    $user->getEmail(),
                    $user->getPassword(), 
                    $user->getJoinDate(), 
                    $user->getLastLoginDate(), 
                    $user->getUserType()
            );

            $stmt->execute();
            
            if($stmt->error){
                var_dump($stmt->error);
            } else {
                return $user->getFirstName() . ' ' . $user->getLastName() . ' added successfully!';
            }
        } else {
            return 'Could not connect to Database.';
        }
    }
    
    public function getUserByEmail($email){
        $query = 'SELECT * FROM user_master WHERE email_id = ?';

        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 1){
            $temp = $result->fetch_assoc();

            $user = new User($temp['user_id'], $temp['first_name'], $temp['last_name'], $temp['phone_no'], $temp['email_id'], $temp['password'], $temp['join_date'], $temp['last_login_date'], $temp['user_type'], $temp['picture'], $temp['birth_date'], $temp['address'],  $temp['city'],  $temp['postalcode'], $temp['schedule'], $temp['certificate'], $temp['experience'], $temp['experience_level'], $temp['bio'],$temp['cost'], $temp['services'], $temp['gender']);
            $result->free();
            return $user;
        }
        $result->free();
        return false;
    }

    public function getUserByID($id){
        $query = 'SELECT * FROM user_master WHERE user_id = ?';
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows == 1){
            $temp = $result->fetch_assoc();
            $user = new User($temp['user_id'], $temp['first_name'], $temp['last_name'], $temp['phone_no'], $temp['email_id'], $temp['password'], $temp['join_date'], $temp['last_login_date'], $temp['user_type'], $temp['picture'], $temp['birth_date'], $temp['address'],  $temp['city'],  $temp['postalcode'], $temp['schedule'], $temp['certificate'], $temp['experience'], $temp['experience_level'], $temp['bio'],$temp['cost'], $temp['services'], $temp['gender']);
            $result->free();
            return $user;
        }
        $result->free();
        return false;
    }

    public function updateUser($user){
        $query = 'UPDATE user_master SET birth_date = ?, address = ?, city = ?, postalcode = ?, cost = ?, bio = ?, experience = ?, services = ?, schedule = ?, picture = ?, certificate = ?, experience_level = ?, gender = ? where user_id = ?';
        $stmt = $this->mysqli->prepare($query);
        $dob = null;
        if ($user->getDob())
            $dob = date($user->getDob());
        
        $stmt->bind_param('ssssssssssssss', 
                $dob,
                $user->getAddress(), 
                $user->getCity(),  
                $user->getPostalCode(), 
                $user->getCost(), 
                $user->getBio(), 
                $user->getExperience(), 
                $user->getServices(), 
                $user->getSchedule(), 
                $user->getPicture(), 
                $user->getCertificate(), 
                $user->getLevelOfExperience(), 
                $user->getGender(), 
                $user->getUserId());
        $stmt->execute();
        if($stmt->error){
            var_dump($stmt->error);
        } else {
            return $stmt->affected_rows;
        }
    }

}

?>
