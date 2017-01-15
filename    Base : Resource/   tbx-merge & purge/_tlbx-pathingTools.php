<?php //002e_01-conditionals.php

echo '<h3>Pathing Tidbits</h3>';
echo '<br /><br />';

echo 'SEE: <a href="http://stackoverflow.com/questions/4645082/get-absolute-path-of-current-script" target="_blank">Operators</a>';
echo '<br /><br />';


#/home/user/www
$_SERVER["DOCUMENT_ROOT"]

#143.34.112.23
$_SERVER["SERVER_ADDR"]

#example.com (or with WWW)
$_SERVER['HTTP_HOST']

#/folder1/folder2/yourfile.php?var=blabla#123$_SERVER["REQUEST_URI"]
__FILE__

#/home/user/www/folder1/folder2/yourfile.php
#ON WINDOWS SERVERS, instead of / is \
basename(__FILE__)

#yourfile.php
__DIR__

#/home/user/www/folder1/folder2 [same: dirname(__FILE__)]
$_SERVER["QUERY_STRING"]

#var=blabla#123
$_SERVER["REQUEST_URI"]   #/folder1/folder2/yourfile.php?var=blabla#123
parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)  # /folder1/folder2/yourfile.php
$_SERVER["PHP_SELF"]      #/folder1/folder2/yourfile.php

//if "parentfile.php" includes this "yourfile.php"(and inside it are the codes written), and "parentfile.php?a=123" is opened, then
$_SERVER["PHP_SELF"]       #/parentfile.php
$_SERVER["REQUEST_URI"]    #/parentfile.php?a=123
$_SERVER["SCRIPT_FILENAME"]#/home/user/www/parentfile.php
str_replace($_SERVER["DOCUMENT_ROOT"],'', str_replace('\\','/',__FILE__ ) )  #/folder1/folder2/yourfile.php

