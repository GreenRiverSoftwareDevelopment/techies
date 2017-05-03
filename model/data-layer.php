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
          $pdo = getConnection();
          
          $technologies = implode(", ", $technologies);
          

          $insert = 'INSERT INTO profiles (fname, lname, school_email, prime_email, bio, veteran, twitter, linkedin, facebook, portfolio, github, degree, graduation, technologies)
                     VALUES (:fname, :lname, :school_email, :prime_email, :bio, :veteren, :twitter, :linkedin, :facebook, :portfolio, :github, :degree, :graduation, :technologies)';

          $statement = $pdo->prepare($insert);
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
          $pdo = getConnection();

          //convert my password to a hash
          $digest = password_hash($password, PASSWORD_DEFAULT);

          $insert = 'INSERT INTO admins (email, password)
                               VALUES(:email, :password)';

          //compile a prepared statement on the server
          $statement = $pdo->prepare($insert);

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
            $pdo = getConnection();

            //query() for select
            $select = "SELECT password FROM admins WHERE email=:email";
            $statement = $pdo->prepare($select);

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

          public function getAllUsers()
          {
              $pdo = getConnection();

              $select = "SELECT id, fname, lname, image_path, DATE_FORMAT(graduation,'%b %Y') AS grad_date FROM profiles WHERE visibility = 1";

              $results = $pdo->query($select);

              $rows = $results->fetchAll(PDO::FETCH_ASSOC);
                
              return $rows;
          }

          public function getSingleUser($id)
          {
              $pdo = getConnection();

              $select = 'SELECT * FROM profiles
                               WHERE id=:id';

              $statement = $pdo->prepare($select);

              $statement->bindValue(':is', $id, PDO::PARAM_STR);
              $statement->execute();

              $row = $statement->fetchAll(PDO::FETCH_ASSOC);

              return $row;
          }

          public function approveProfile($id)
          {
              $pdo = getConnection();

              $update = 'UPDATE profiles SET visibility = "1"  WHERE id=:id';

              $statement = $pdo->prepare($update);

              $statement->bindValue(':id', $id, PDO::PARAM_STR);

              return $statement->execute();
          }

          public function updateUser($id, $fname, $lname, $imagePath, $schoolEmail, $primaryEmail, $bio, $veteren, $twitter, $linkedIn, $facebook, $portfolio, $github, $degree, $graduation, $technologies)
          {
              $pdo = getConnection();

              $update = 'UPDATE profiles SET fname=:fname,
                         WHERE id=:id';

              $statement = $pdo->prepare($update);

              $statement->bindValue(':id', $id, PDO::PARAM_STR);
              $statement->bindValue(':name', $fname, PDO::PARAM_STR);
              $statement->bindValue(':type', $lname, PDO::PARAM_STR);
              $statement->bindValue(':imagePath', $imagePath, PDO::PARAM_STR);
              $statement->bindValue(':schoolEmail', $schoolEmail, PDO::PARAM_STR);
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
              $statement->bindValue(':technologies', $technologies, PDO::PARAM_STR);

              return $statement->execute();
          }

          public function deleteUser($id)
          {
              $pdo = getConnection();

              $delete = 'DELETE FROM profiles WHERE id=:id';

              $statement = $pdo->prepare($delete);

              $statement->bindValue(':id', $id, PDO::PARAM_STR);

              return $statement->execute();
          }



    }
?>
