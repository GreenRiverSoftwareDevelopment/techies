<?php
/**
 * This file plays middle-man between user interaction and data requests
 *
 * This file is to handle requestions on the front-end and decide
 * what should happen next, whether it be forwarding the user to another page,
 * back to where they where previously, or pull/push data to/from the back-end.
 *
 * PHP version 7
 *
 * LICENSE: Infomation here.
 *
 * @author     Jacob Laqua <jlaqua@mail.greenriver.edu>
 * @author     Dmitriy Drkhipchuk <Darkhipchuk@mail.greenriver.edu>
 * @author     Angelo Blanchard <ablanchard3@mail.greenriver.edu>
 * @version    1.0 GitHub: <https://github.com/GreenRiverSoftwareDevelopment/techie>
 * @link       http://techies.greenrivertech.net/controller/controller.php
 */
    session_start();

    /**
     * This class creates a Controller object
     *
     * @author     Jacob Laqua <jlaqua@mail.greenriver.edu>
     * @author     Dmitriy Drkhipchuk <Darkhipchuk@mail.greenriver.edu>
     * @author     Angelo Blanchard <ablanchard3@mail.greenriver.edu>
     * @version    @version Release: 1.0
     */
    class Controller
    {
        private $_f3; //router

        /**
         * Creates a new f3 object and sets the
         * nav bar location for use on view pages
         *
         * @access public
         * @param object $f3   The f3 router being passed
         */
        public function __construct($f3)
        {
            $this->_f3 = $f3;
            $this->_f3->set('nav', 'view/modules/nav.php');
            $this->_f3->set('head_title', 'view/modules/head.php');
            $this->_f3->set('footer', 'view/modules/footer.php');
        }

        //methods

        /**
         * Method for logic to grab the data needed to build the home/default page
         *
         * This method is used by default upon landing landing on the site
         * and also when the user click "home" in the nav bar
         *
         * @access public
         */
        public function home()
        {
            //retrieve users
            $data = new DataLayer();
            // if isset(post) {
            	//$user = $data->logUser($_POST);
            //}
            $users = $data->getDisplayableUsers();
            //load the view
            $this->_f3->set('title', 'Home');
			$this->_f3->set('users', $users);
            echo Template::instance()->render('view/home.php');
        }

        public function showSignup()
        {
          $this->_f3->set('title', "Sign up");
          //load the view
          echo Template::instance()->render('view/student-submit.php');
        }

        /**
         * Method for logic to grab the data needed to build the signup page
         *
         * When a singup form is submitted validation occurs with the model
         * otherwise when the request method is GET simply load the view
         *
         * @access public
         */
        public function signup()
        {
            $this->_f3->set('title', 'Signup');
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               $errors = array();
              //first name
              if (empty($_POST['fname'])) {
                  $errors[] = 'Please enter a first name';
              } else {
                  $fname = $_POST['fname'];
              }

              //last name
              if (empty($_POST['lname'])) {
                  $errors[] = 'Please enter a last name';
              } else {
                  $lname = $_POST['lname'];
              }

              //school email
              if (empty($_POST['school_email']) || !filter_var($_POST['school_email'], FILTER_VALIDATE_EMAIL)) {
                  $errors[] = 'Please enter a valid school email';
              } else {
                  $school_email = $_POST['school_email'];
              }

              //primary email
              if (empty($_POST['prime_email']) || !filter_var($_POST['prime_email'], FILTER_VALIDATE_EMAIL)) {
                  $errors[] = 'Please enter a valid primary email';
              } else {
                  $prime_email = $_POST['prime_email'];
              }

              //bio
              if (empty($_POST['bio']) || strlen($_POST['bio']) > 1000) {
                  $errors[] = 'There is something wrong with your bio';
              } else {
                  $bio = $_POST['bio'];
              }

              //veteran
              if (!isset($_POST['veteran'])) {
                  $errors[] = 'You have not selected your veteran status';
              } else {
                  $veteran = $_POST['veteran'];
              }

              //degree
              if (!isset($_POST['degree'])) {
                  $errors[] = 'You have not selected your degree';
              } else {
                  $degree = $_POST['degree'];
              }

              //technologies
              if (!isset($_POST['technologies'])) {
                  $errors[] = 'You have not selected your technologies';
              } else {
                  $technologies = $_POST['technologies'];
                  $technologies = implode(", ", $technologies);
              }

            }

            if (sizeof($errors) > 0) {
              
            } else {
              $data = new DataLayer();
              //send post data to the model
              $data->logUser($fname, $lname, $school_email, $prime_email,
              $bio, $veteran, $_POST['twitter'], $_POST['linkedin'], $_POST['facebook'],
              $_POST['portfolio'], $_POST['github'], $degree, $_POST['graduation'], $technologies);

              $user = $data->getUserByEmail($school_email);

              $_SESSION['fname'] = $user[0]['fname'];
              $_SESSION['lname'] = $user[0]['lname'];
              $_SESSION['school_email'] = $user[0]['school_email'];
              $_SESSION['prime_email'] = $user[0]['prime_email'];
              $_SESSION['bio'] = $user[0]['bio'];
              $_SESSION['veteran'] = $user[0]['veteran'];
              $_SESSION['twitter'] = $user[0]['twitter'];
              $_SESSION['linkedin'] = $user[0]['linkedin'];
              $_SESSION['facebook'] = $user[0]['facebook'];
              $_SESSION['portfolio'] = $user[0]['portfolio'];
              $_SESSION['github'] = $user[0]['github'];
              $_SESSION['degree'] = $user[0]['degree'];
              $_SESSION['graduation'] = $user[0]['graduation'];
              $_SESSION['technologies'] = $user[0]['technologies'];

              header("Location: /confirmation");
            }
        }

    public function confirmation()
    {
      $this->_f3->set('title', "About");

      $this->_f3->set('fname', $_SESSION['fname']);
      $this->_f3->set('lname', $_SESSION['lname']);
      $this->_f3->set('school_email', $_SESSION['school_email']);
      $this->_f3->set('prime_email', $_SESSION['prime_email']);
      $this->_f3->set('bio', $_SESSION['bio']);
      $this->_f3->set('veteran', $_SESSION['veteran']);
      $this->_f3->set('twitter', $_SESSION['twitter']);
      $this->_f3->set('linkedin', $_SESSION['linkedin']);
      $this->_f3->set('facebook', $_SESSION['facebook']);
      $this->_f3->set('portfolio', $_SESSION['portfolio']);
      $this->_f3->set('github', $_SESSION['github']);
      $this->_f3->set('degree', $_SESSION['degree']);
      $this->_f3->set('graduation', $_SESSION['graduation']);
      $this->_f3->set('technologies', $_SESSION['technologies']);

      //load the view
      echo Template::instance()->render('view/confirmation.php');
    }

		public function login()
		{
			echo Template::instance()->render('view/login.php');
		}

        /**
         * Method for logic to log a user out.
         *
         * session is unset/destroyed and the user is sent home
         *
         * @access public
         */
        public function logout()
        {
            session_unset();
            session_destroy();
            header("Location: /dashboard");
        }

		public function about()
		{
			$data = new DataLayer();

			$this->_f3->set('title', "About");
			echo Template::instance()->render('view/about.php');
		}

		public function page($id)
		{
			$data = new DataLayer();

			//send post data to the model
            $user = $data->getSingleUser($id);

			$this->_f3->set('title', $user['fname'] . " " . $user['lname']);
			$this->_f3->set('user', $user);
			echo Template::instance()->render('view/profile.php');
		}

		public function show($id)
		{
			$data = new DataLayer();

			//send post data to the model
            $data->approveProfile($id);
			header("Location: /dashboard");
		}

		public function hide($id)
		{
			$data = new DataLayer();

			//send post data to the model
            $data->hideProfile($id);
			header("Location: /dashboard");
		}

		public function archive($id)
		{
			$data = new DataLayer();

			//send post data to the model
            $data->archiveProfile($id);
			header("Location: /dashboard");
		}

		public function dashboard()
		{
			$data = new DataLayer();
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
				//log the user in
				$user = $data->login($_POST);
				if ($user['admin'] == 1) {
					$_SESSION['logged'] = $user;
				}
			}
			if ($_SERVER['REQUEST_METHOD'] == 'POST') { // a form is being submitted (updated)
				$user = $data->updateUser($_POST);
			}
			if (isset($_SESSION['logged'])) { 
				$users = $data->getAllActiveUsers();
				$pendindUsers = $data->getAllPendingUsers();
				$this->_f3->set('users', $users);
				$this->_f3->set('pendingUsers', $pendindUsers);
			}
            //load the view
            $this->_f3->set('title', 'Admin Dashboard');
			echo Template::instance()->render('view/admin/dashboard.php');
		}
    }
?>
