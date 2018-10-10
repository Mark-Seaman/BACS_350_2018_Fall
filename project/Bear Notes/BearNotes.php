
<?php



    // Bring in subscribers logic

    require_once 'BearNotes_db.php';

    require_once 'BearNotes_crud.php';

    require_once 'BearNotes_views.php';





    // My Note list

    class  Bear Notes {



        // Database connection

        private $db;



        

        // Automatically connect

        function __construct() {

            $this->db =  BearNotes_connect();

        }



        

        // CRUD

        

        function query() {

            return query_BearNotes($this->db);

        }

        

    

        function clear() {

            return clear_BearNotes($this->db);

        }

        

        

        function add($name, $email) {

            return add_BearNotes ($this->db, $title, $date, $body);

        }

        

        

        //Views

        

        function show_BearNotes() {

            render_list($this->query());

        }

        

        

        function add_form() {

            add_BearNotes_form();

        }

    }





    // Create a list object and connect to the database

    $BearNotes = new Bear Notes;



?>