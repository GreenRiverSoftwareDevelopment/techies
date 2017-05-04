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
            $users = $data->getAllUsers();
            //load the view
            $this->_f3->set('title', 'Home');
			$this->_f3->set('users', $users);
            echo Template::instance()->render('view/home.php');
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
                $data = new DataLayer();
                //send post data to the model
                $user = $data->logUser($_POST['fname'], $_POST['lname'], $_POST['school_email'], $_POST['prime_email'],
                $_POST['bio'], $_POST['veteran'], $_POST['twitter'], $_POST['linkedin'], $_POST['facebook'],
                $_POST['portfolio'], $_POST['github'], $_POST['degree'], $_POST['graduation'], $_POST['technologies']);

                if (isset($user['email'])) {
                    //set session variables for the user
                    $_SESSION['logged'] = $user;
                    $this->_f3->set('logged', $_SESSION['logged']);

                    //When logged in, send the user to their profile
                    header("Location: /myDashboard");

                } else {
                    $this->_f3->set('errors', $user);
                }
            } else {
                $this->_f3->clear('errors');
            }

            //load the view
            echo Template::instance()->render('view/student-submit.php');
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
            header("Location: /home");
        }

		public function about()
		{
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

		public function dashboard()
		{
			echo Template::instance()->render('view/dashboard.php');
		}
    }
?>
