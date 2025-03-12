<?php
// See the password_hash() example to see where this came from.

$hash = password_hash('rassssmuslerdorf', PASSWORD_DEFAULT);
if (password_verify('rassssmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}