<?php
    include_once 'config/init.php';
    include 'config/config.php';

    $job = new Job;
    $template = new Template('templates/job-single.php');
    $job_id = isset($_GET['id']) ? $_GET['id'] : null;
    
    $template->job = $job->getJob($job_id);
    
    $content = $template->toString();
    echo $content;

?>