<?php
require_once 'user.php';

$user = new User();
$users = $user->getAllUsers();

echo "<h2>User List</h2>";
echo "<ul>";
foreach ($users as $u) {
    echo "<li><strong>{$u['name']}</strong> ({$u['email']})</li>";
}
echo "</ul>";
?>
