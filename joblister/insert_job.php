<?php
    include_once 'config/init.php';
    include 'config/config.php';
    $job = new Job;
    
    if(isset($_POST['submit'])){
        $data = array();
        $data['category'] = $_POST['category'];
        $data['company'] = $_POST['company'];
        $data['job_title'] = $_POST['job_title'];
        $data['salary'] = $_POST['salary'];
        $data['location'] = $_POST['location'];
        $data['contact_user'] = $_POST['contact_user'];
        $data['contact_email'] = $_POST['contact_email'];
        $data['description'] = $_POST['description'];

        if($job->create($data)){
            header('Location: index.php');
            ?>
            <script>
                alert("Your data is stored successfully");
            </script>
            <?php
        }else{
            header('Location: index.php');
            ?>
            <script>
                alert("Your data is stored successfully");
            </script>
            <?php
        }
    }
    
    $template = new Template('templates/job-create.php');
    $template->categories = $job->getCategories();
    
    $content = $template->toString();
    echo $content;

?>