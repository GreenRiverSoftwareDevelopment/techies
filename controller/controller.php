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
             
            //load the view
            $this->_f3->set('title', 'Home');
            echo Template::instance()->render('view/home.php');
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
    }
?>