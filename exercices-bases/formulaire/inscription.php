<?php



function getName(string $name, string $lastName): string
{
    if (!isset($_POST['submit'])) {
        return 'Erreur';
    } else {
        $name = $_POST["nameUser"];
        $lastName = $_POST["lastnameUser"];

        return $name . $lastName;
    }
}
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
