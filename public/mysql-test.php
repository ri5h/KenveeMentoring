<?php
set_time_limit(0);

$conn = mysql_connect('localhost', 'rishi', '123');
$db   = mysql_select_db('hgce');



/* Make sure the connection is still alive, if not, try to reconnect */
if (!mysql_ping($conn)) {
    echo 'Lost connection, exiting after query #1';
    exit;
}

?>