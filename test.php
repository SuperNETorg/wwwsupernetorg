<?php

echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo dirname($_SERVER['SCRIPT_FILENAME']);
echo "<br>";
// echo $sprnt = "http://" . $_SERVER['SERVER_NAME'] . "/sprnt.org";
echo "<br>";
echo "http://" . $_SERVER['SERVER_NAME'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']));
echo "<br>";

echo "<br>";

// Dummy change
echo "test3";

echo "Deploy Tag First";
