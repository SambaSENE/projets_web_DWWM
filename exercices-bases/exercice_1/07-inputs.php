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

function passwordCheck(string $password): bool
{
    // $regex = "/([^a-zA-Z0-9$])/";

    if(stringLength($password)){
        
        if (  preg_match('/[a-z]/', $password) && preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password)) {
            return true;
        } else {
            return false;
        }
    }
}

var_dump(passwordCheck('ssenesene9'));
