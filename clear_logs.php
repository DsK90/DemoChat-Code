<?php

//Clear Logs for later sessions & session entrys after 2 minutes
    if (time() - $_SESSION['LAST_ACTIVITY'] > 120) {

        $log_file = 'log.txt';

        file_put_contents($log_file, '');


    }


?>