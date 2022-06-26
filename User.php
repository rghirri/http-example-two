<?php
// CRUD (Create, Read, Update and Delete ) for json data
class user
{
    public function getUsers()
    {
        return json_decode(
            file_get_contents(__DIR__ . '/user/users.json'),
            true
        );
    }
    // public function getUsers()
    // {
    // }
    // public function getUsers()
    // {
    // }
    // public function getUsers()
    // {
    // }
    // public function getUsers()
    // {
    // }
    // public static function hello()
    // {
    //     echo 'hello world!!!';
    // }
}