<?php

class Worker
{
    function __construct()
    {
    }
    
    function __destruct()
    {
        
    }

    function startWork() {
        // Reverse Worker Code
        $worker = new GearmanWorker();
        $worker->addServer('app_gearman');
        $worker->addFunction("test-reverse", function ($job) {
            print(strrev($job->workload()));
            echo "\n";
        });
        while ($worker->work());
    }
}

