<?php 

class PersonView {

    function updateForm($person) {
        echo "<html>\r\n<head>\r\n<meta charset='utf-8'>\r\n<link rel='stylesheet' href='http://cdn.cloudcache.dk/toolkit/2.1.0/css/toolkit.min.css'>\r\n<link rel='stylesheet' href='css/style.css'>\r\n</head>\r\n<body>\r\n<div class='grid'>\r\n<div class='col span-1'></div>\r\n<div class='col span-3'>\r\n<div class='block'>\r\n
            <form action='' method='post'>
              <fieldset>
                <legend>Opdat&eacute;r bruger</legend>
                <div class='field'>
                  <label for='name' class='col span-2'>Navn</label>
                  <input class='input' type='text' name='name' value='$person->userName'>
                </div>
                <div class='field'>
                  <label for='email' class='col span-2'>E-mail</label>
                  <input class='input' type='email' name='email' value='$person->userEmail'>
                  <input type='hidden' name='id' value='$person->id'>
                </div>
                <div class='field'>
                  <button class='button is-info' type='submit' name='update' value='Update'>Update</button>
                </div>
              </fieldset>
            </form>
        </div>\r\n</div>\r\n</div>\r\n<script src='http://cdn.cloudcache.dk/jquery/jquery-1.11.2.min.js'></script>\r\n<script src='http://cdn.cloudcache.dk/toolkit/2.1.0/js/toolkit.min.js'></script>\r\n</body>\r\n</html>";
    }

    function showTable($persons) {
        print ("<FORM method='post'><table class=\"table\">");
        print ("<thead><tr><th>Navn</th><th>E-mail</th><th>Edit</th><th>Delete</th></tr></thead><tbody>");
        foreach ($persons as $person) {
            print("<tr>");
            print("<td>$person->name</td>");
            print("<td>$person->email</td>");
            print("<td><button class=\"button is-success\" type='submit' name='edit' value='$person->id'>Edit</button></td>");
            print("<td><button class=\"button is-error\" type='submit' name='delete' value='$person->id'>Delete</button></td>");
            print("</tr>");
        }
        print("</tbody></table></form>");
    }


    
}

?>