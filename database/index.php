<?
require './database.class.php';
$config = [
  'host' => 'localhost',
  'user' => 'root',
  'pass' => '',
  'name' => 'post' // name database want to connect
];
$db = new database($config);
$users = $db->table('users')->updateRow(7, [
  'username' => 'tlos3r',
  'name' => 'Iam Fuu'
]);
?>