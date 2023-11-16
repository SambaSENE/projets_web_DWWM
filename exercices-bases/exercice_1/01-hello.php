<?php 
    /**
     * hello world
     */
    function helloWorld() : void
    {
        echo "Hello  world";
    }

    helloWorld();

    //
    function hello(string $name) : string
    {
        return 'Hello' . $name . '';
    }
    
    echo hello('samba');
    
    // Execice A_1
    
    function helloDeux( string $name):  string 
    {
        if($name !== ''){
            return 'Hello' . $name . '';
        }else {
            return 'Nobody';
        }
    }

    echo helloDeux('');

    