<?php
require_once('./scripts/client.php');
require_once('./scripts/worker.php');

function addJob() {
    echo "<pre>";
    $job = new Jobs();
    $job->addJob();
    header('http://test.box');
}

function startWork() {
    echo "<pre>";
    $worker = new Worker();
    $worker->startWork();
    header('http://test.box');
}

startWork();
// addJob();