<?php //_tbx_functions.php

#dumpDie() declared in common-inc.php
#makeLinks() declared in common-inc.php
function dumpster($str='', $lineNumber, $fileName){#improved var_dump()/dumpdie()
/*
 * PURPOSE: Troubleshooting
 *
 * <code>
 * dumpster($obj, __LINE__, __FILE__);
 * </code>
 *
 * @param object $myObj any object or data we wish to view internally
 * @return none
*/

    if($lineNumber > 0){
        echo '<br /><br />';
        echo 'Declared in: <b><font color="red">' . $fileName . '</font></b><br />';
        echo 'Line: <b><font color="red">#' . $lineNumber . '</font></b><br />';
        }

    echo '<pre>';
        var_dump($str);
    echo '</pre>';

    die;
}

