<?php
//Alle Funktionen einbinden
include("./res/all.php");

//Diese Cronjob.php liegt auf dem Webserver
//Sie muss jede Minute aufgerufen werden.
//Sie ist Zust�ndig f�r die Verteilung der Cronjobs an die einzelnen C&C-Server
//!ACHTUNG! Cronjobs mit einer Verz�gerung von >=500ms (z.B. Alamierung Feuerwehr)
//m�ssen gesondert und direkt und f�r jeden C&C-Server einzeln eingerichtet werden


//Dieses Skript wird jede Minute ausgef�hrt
$cj = new cronjob();
$cj->get_data();
$cj->work_it_all_off();
exit;
?>