<nav>

    <ul>
       <?php

        if(!isset($_SESSION['role'])){
         echo
             "<li>
                <a href='?healthone=3'> > inloggen</a>
            </li>";
        }
        else{
          echo  "<li>
                <a href='?healthone=4'> > uitloggen</a>
            </li>";
        }
        ?>
       
    </ul>
<nav>