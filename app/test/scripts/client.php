<?php
// Reverse Client Code
class Jobs
{
    function __construct()
    {
    }
    
    function __destruct()
    {
    }

    function addJob() {
        if(function_exists("gearman_version")) {
            echo "<pre>";
            $client = new GearmanClient();
            $client->addServer("app_gearman");
            for ($i=0; $i < 100000; $i++) { 
                $client->doBackground("test-reverse", "Hello World!");
            }
        }
    }
}
