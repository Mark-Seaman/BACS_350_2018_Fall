
<?php



    /*

        add_BearNotes_form -- Create an HTML form to add record.

    */



    function add_BearNotes_form() {

        

        echo '

            <div class="card">

                <h3>Add Note</h3>

            

                <form action="insert.php" method="post">

                    <p><label>Title:</label> &nbsp; <input type="text" name="title"></p>

                    <p><label>Date:</label> &nbsp; <input type="text" name="date"></p>
                    
                    <p><label>Body:</label> &nbsp; <input type="text" name="body"></p>

                    <p><input type="submit" value="Sign Up"/></p>

                </form>

            </div>

            ';

        

    }





    

    /*

        render_list -- Loop over all of the BearNotes to make a bullet list

    */

 

    function render_list($list) {



        echo '

            <div class="card">

                <h3>BearNotes in List</h3> 

                <ul>

            ';

        foreach ($list as $s) {

            echo '<li>' . $s['id'] . ', ' . $s['title'] . ', ' . $s['date']  . ', ' . $s['body'] . '</li>';

        }

        echo '

                </ul>

            </div>';

    

    }

    



?>