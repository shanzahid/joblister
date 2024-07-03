<?php
    include_once 'config/init.php';
    include 'config/config.php';

    $job = new Job;
    $template = new Template('templates/frontpage.php');
    $category = isset($_GET['category']) ? $_GET['category'] : null;
    if($category){
        $template->jobs = $job->getByCategory($category);
        $template->title = 'Jobs in '.$job->getCategory($category)->name;
    }else{
        $template->title = "Latest Jobs";
        $template->jobs =   $job->getAllJobs();
    }
    $template->categories = $job->getCategories();
    $content = $template->toString();
    echo $content;

?>