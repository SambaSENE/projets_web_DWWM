<?php

/**
 * Retoune true si le mot de passe  est superieur a 9 caracteres
 *
 * @param [type] $password
 * @return boolean
 */
function stringLength($password): bool
{
    if (strlen($password) < 9) {
        return false;
    } else {
        return true;
    }
}

var_dump(stringLength('pocoyo&pato'));
var_dump(stringLength('m_patate'));
echo '<hr>';

/**
 * Verification mot de passe
 *
 * @param string $password
 * @return boolean
 */
function passwordCheck(string $password): bool
{
    // $regex = "/([^a-zA-Z0-9$])/";

    if (stringLength($password)) {

        if (preg_match('/[a-zA-Z]/', $password) && preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password)) {
            return true;
        } else {
            return false;
        }
    }
}

var_dump(passwordCheck('senesene9'));
echo '<hr>';



/**
 * Undocumented function
 *
 * @param string $name
 * @param string $password
 * @param array $arrayUser
 * @return void
 */
function UserLogin(string $name, string $password, array $arrayUser)
{
    if (passwordCheck($password)) {

        foreach ($arrayUser as $key => $value) {
            if ($name === $key && $password === $value) {
                return true;
            }
        }
        return false;
    }
}

$users = [
    'joe' => 'Azer1234!',
    'jack' => 'Azer-4321',
    'admin' => '1234_Azer',
];

var_dump(UserLogin('joe', 'Azer1234!', $users));
echo '<hr>';

