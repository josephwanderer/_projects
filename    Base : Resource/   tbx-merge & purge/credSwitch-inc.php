<?php //credentials.php


#sever variable

$serverChek = $_SERVER['HTTP_HOST'];//are we local?


if( $serverChek == 'localhost'){//if we are local use these...
    #use local credentials

    define('DB_NAME','itc240db');   #db name
    define('DB_USER','root');       #db user
    define('DB_PASSWORD','root');   #password
    define('DB_HOST','localhost');  #server

    #Ease-of-use: Paths defined here to make switching bewteen local/web easier

    # Virtual (web) 'root' of application for images, JS & CSS files
    define('VIRTUAL_PATH',
           'localhost/monkeework/itc240f/_ass/011a_list-display-pager/');

    # Physical (PHP) 'root' of application for file & upload reference
    define('PHYSICAL_PATH',
           '/Applications/AMPPS/www/monkeework/itc240f/_ass/011a_list-display-pager/');

    #test server $vars - see footer for signal
    define('SERVER_USED','localhost');   #where are we? - echo in footer.
}else{
    #if we aren't local use these...

    define('DB_NAME',       'itc240db');               #db name
    define('DB_USER',       'maxster');                #db user
    define('DB_PASSWORD',   '!Nd1go00');               #password
    define('DB_HOST',       'itc240.monkeework.com');  #server
    define('VIRTUAL_PATH',
           'http://monkeework.com/itc240f/_ass/011a_list-display-pager/');
    define('PHYSICAL_PATH', '/home/classes/horsey01/public_html/sprockets/');
    define('SERVER_USED','monkeework');   #where are we? - echo in footer.
}

#Current Page
define ('THIS_PAGE', basename($_SERVER['PHP_SELF'])); #CONSTANT/SUPERGLOBAL
define('INCLUDE_CLASS', PHYSICAL_PATH . '_class/');
define('INCLUDE_PATH', PHYSICAL_PATH . '_inc/');


/*
//test paths
echo $serverChek . '<br />';
echo VIRTUAL_PATH . '<br />';
echo PHYSICAL_PATH . '<br />';
echo INCLUDE_PATH . '<br />';
echo CLASS_PATH . '<br /><br />';
*/
