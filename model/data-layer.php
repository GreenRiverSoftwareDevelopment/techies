<?php
/**
 * This file handles db interactions
 *
 * This file is used for interections with the db.
 * Whether it be inserting, updating or deleting this file will handle
 * final data validation on the back-end and data-massaging prior to
 * returning to the controller
 *
 * PHP version 7
 *
 * LICENSE: Infomation here.
 *
 * @author     Jacob Laqua <jlaqua@mail.greenriver.edu>
 * @author     Dmitriy Drkhipchuk <Darkhipchuk@mail.greenriver.edu>
 * @author     Angelo Blanchard <ablanchard3@mail.greenriver.edu>
 * @version    1.0 GitHub: <https://github.com/GreenRiverSoftwareDevelopment/techies>
 * @link       http://techies.greenrivertech.net
 */

    require_once('db/connection.php');
    require_once('db/password.php');
    /**
     * This class creates a DataLayer object
     *
     * @author     Jacob Laqua <jlaqua@mail.greenriver.edu>
     * @author     Dmitriy Drkhipchuk <Darkhipchuk@mail.greenriver.edu>
     * @author     Angelo Blanchard <ablanchard3@mail.greenriver.edu>
     * @version    @version Release: 1.0
     */
    class DataLayer
    {
        private $_pdo; //pdo object

        /**
         * Creates a new PDO object
         *
         * @access public
         * The PDO object has the connection to the db
         */
        public function __construct()
        {
            $this->_pdo = getConnection();
        }

        //methods
        public function logUser($fname, $lname, $school_email, $prime_email, $bio, $veteran, $twitter, $linkedin, $facebook, $portfolio, $github, $degree, $graduation, $technologies)
        {

          //$technologies = implode(", ", $technologies);

          $insert = 'INSERT INTO profiles (fname, lname, school_email, prime_email, bio, veteran, twitter, linkedin, facebook, portfolio, github, degree, graduation, technologies)
                     VALUES (:fname, :lname, :school_email, :prime_email, :bio, :veteren, :twitter, :linkedin, :facebook, :portfolio, :github, :degree, :graduation, :technologies)';

          $statement = $this->_pdo->prepare($insert);
          $statement->bindValue(':fname', $fname, PDO::PARAM_STR);
          $statement->bindValue(':lname', $lname, PDO::PARAM_STR);
          $statement->bindValue(':school_email', $school_email, PDO::PARAM_STR);
          $statement->bindValue(':prime_email', $prime_email, PDO::PARAM_STR);
          $statement->bindValue(':bio', $bio, PDO::PARAM_STR);
          $statement->bindValue(':veteren', $veteran, PDO::PARAM_STR);
          $statement->bindValue(':twitter', $twitter, PDO::PARAM_STR);
          $statement->bindValue(':linkedin', $linkedin, PDO::PARAM_STR);
          $statement->bindValue(':facebook', $facebook, PDO::PARAM_STR);
          $statement->bindValue(':portfolio', $portfolio, PDO::PARAM_STR);
          $statement->bindValue(':github', $github, PDO::PARAM_STR);
          $statement->bindValue(':degree', $degree, PDO::PARAM_STR);
          $statement->bindValue(':graduation', $graduation, PDO::PARAM_STR);
          $statement->bindValue(':technologies', $technologies, PDO::PARAM_STR);

          return $statement->execute();
        }

        public function addAdmin($email, $password)
        {

          //convert my password to a hash
          $digest = password_hash($password, PASSWORD_DEFAULT);

          $insert = 'INSERT INTO admins (email, password)
                               VALUES(:email, :password)';

          //compile a prepared statement on the server
          $statement = $this->_pdo->prepare($insert);

          //bind inputes to the prepared statement
          $statement->bindValue(':email',$email, PDO::PARAM_STR);
          $statement->bindValue(':password',$digest, PDO::PARAM_STR);

          //exec() is used for INSERT, UPDATE & DELETE
          //returns the number of records that were altered or false (if none)
          $result = $statement->execute();

          return $result;
        }

        public function verifyUser($email, $password)
        {

            //query() for select
            $select = "SELECT password FROM admins WHERE email=:email";
            $statement = $this->_pdo->prepare($select);

            //bind inputs
            $statement->bindValue(':email', $email, PDO::PARAM_STR);

            //execute query
            $statement->execute();

            //retrieve a single row
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            if($row == null){
              return false; // no username is found
            } else {
              $hash = $row['password'];

              //this will verify whether the password given matches
              //the hash in the database
              return password_verify($password, $hash);
            }
          }

          function getUserByEmail($school_email)
          {
              $pdo = getConnection();

              $select = 'SELECT * FROM profiles WHERE school_email=:school_email';

              $statement = $pdo->prepare($select);

              $statement->bindValue(':school_email', $school_email, PDO::PARAM_STR);

              $statement->execute();

              $row = $statement->fetchAll(PDO::FETCH_ASSOC);

              return $row;
          }

          public function getDisplayableUsers()
          {

              $select = "SELECT id, fname, lname, image_path, DATE_FORMAT(graduation,'%b %Y') AS grad_date FROM profiles WHERE visibility = 1 AND queued = 0";

              $results = $this->_pdo->query($select);

              $rows = $results->fetchAll(PDO::FETCH_ASSOC);

              return $rows;
          }

          public function getAllActiveUsers()
          {

              $select = "SELECT * FROM profiles WHERE visibility = 1 AND queued = 0";

              $results = $this->_pdo->query($select);

              $rows = $results->fetchAll(PDO::FETCH_ASSOC);

              return $rows;
          }

          public function getAllPendingUsers()
          {

              $select = "SELECT * FROM profiles WHERE visibility = 0 AND queued = 1";
              $results = $this->_pdo->query($select);

              $rows = $results->fetchAll(PDO::FETCH_ASSOC);

              return $rows;
          }

          public function getAllPArchivedUsers()
          {

              $select = "SELECT * FROM profiles WHERE visibility = 0 AND queued = 0";
              $results = $this->_pdo->query($select);

              $rows = $results->fetchAll(PDO::FETCH_ASSOC);

              return $rows;
          }

          public function getSingleUser($id)
          {

              $select = "SELECT id, fname, lname, image_path, degree, technologies, bio, veteran, twitter, linkedin, facebook, github, portfolio, DATE_FORMAT(graduation,'%b %Y') AS grad_date FROM profiles
                               WHERE id=:id";

              $statement = $this->_pdo->prepare($select);

              $statement->bindValue(':id', $id, PDO::PARAM_INT);
              $statement->execute();

              $row = $statement->fetch(PDO::FETCH_ASSOC);
              $row['technologies'] = explode(', ', $row['technologies']);
              return $row;
          }

          public function updateUser($data)
          {
            if (!isset($data['image_path']) || $data['image_path'] = '') {
                $data['image_path'] = ''; // if there isn't a photo being uploaded leave the path blank
            } else {
                require_once('photo-upload.php');
                $data['image_path'] = handleImage();
            }
              $statement = 'UPDATE profiles SET image_path=:imagePath WHERE id=:id';

              $statement = $this->_pdo->prepare($statement);

              $statement->bindValue(':id', intval($data['id']), PDO::PARAM_INT);
              /*$statement->bindValue(':name', $fname, PDO::PARAM_STR);
              $statement->bindValue(':type', $lname, PDO::PARAM_STR);*/
              $statement->bindValue(':imagePath', $data['image_path'], PDO::PARAM_STR);
              /*$statement->bindValue(':schoolEmail', $schoolEmail, PDO::PARAM_STR);
              $statement->bindValue(':primaryEmail', $primaryEmail, PDO::PARAM_STR);
              $statement->bindValue(':bio', $bio, PDO::PARAM_STR);
              $statement->bindValue(':veteren', $veteren, PDO::PARAM_STR);
              $statement->bindValue(':twitter', $twitter, PDO::PARAM_STR);
              $statement->bindValue(':linkedIn', $linkedIn, PDO::PARAM_STR);
              $statement->bindValue(':facebook', $facebook, PDO::PARAM_STR);
              $statement->bindValue(':portfolio', $portfolio, PDO::PARAM_STR);
              $statement->bindValue(':github', $github, PDO::PARAM_STR);
              $statement->bindValue(':degree', $degree, PDO::PARAM_STR);
              $statement->bindValue(':graduation', $graduation, PDO::PARAM_STR);
              $statement->bindValue(':technologies', $technologies, PDO::PARAM_STR);*/

              return $statement->execute();
          }

          public function approveProfile($id)
          {

              $statement = 'UPDATE profiles SET visibility = 1, queued = 0 WHERE id=:id';

              $statement = $this->_pdo->prepare($statement);

              $statement->bindValue(':id', $id, PDO::PARAM_INT);

              return $statement->execute();
          }

          public function hideProfile($id)
          {

              $statement = 'UPDATE profiles SET visibility = 0, queued = 1 WHERE id=:id';

              $statement = $this->_pdo->prepare($statement);

              $statement->bindValue(':id', $id, PDO::PARAM_INT);

              return $statement->execute();
          }

        public function archiveProfile($id)
        {

            $statement = 'UPDATE profiles SET visibility = 0, queued = 0 WHERE id=:id';

            $statement = $this->_pdo->prepare($statement);

            $statement->bindValue(':id', $id, PDO::PARAM_INT);

            return $statement->execute();
        }
        
        /**
        * Method to login in a verified user
        *
        * This method calls getUser and verifyUser
        * to avoid redundancy
        *
        * @access public
        * @param  array $data The $_POST array with all contents from the login form
        * @return true if the insert was successful, otherwise false
        */
        public function login($data)
        {
            //errors array 
            $errors = array();
            
            //read in and validate the login email
            if(isset($_POST['username']) && strlen($_POST['username']) > 1 && strlen($_POST['username']) <= 40 ) {
                $username = $_POST['username'];
            } else {
                $errors['username-error'] = 'Please enter your username';
            }
            
            //read in and validate the login password
            if(isset($_POST['password']) && strlen($_POST['password']) >= 4 && strlen($_POST['password']) <= 20 ) {
                $password = $_POST['password'];
            } else {
                $errors['password-error'] = 'Please enter your password';
            }
            if (sizeof($errors) == 0) {
                $select = "SELECT username, password, admin FROM admins WHERE username=:username";
                $statement = $this->_pdo->prepare($select);
                
                //bind inputs
                $statement->bindValue(':username', $username, PDO::PARAM_STR);
                
                //execute query
                $statement->execute();
    
                //retrieve a single row
                $row = $statement->fetch(PDO::FETCH_ASSOC);                                  
                                
                if ($row == null) {
                    return false; //no username is found...
                } else {
                    if( strcmp($password, $row['password']) == 0) {
                        $user = array();
                        $user['username'] = $row['username'];
                        $user['admin'] = $row['admin'];
                        return $user;
                    } else {
                        $errors['login-error'] = 'There was an issue logging you in';
                        return $errors;
                    }
                }
            } else {
                return $errors;
            }
        }
    }
?>
