<?php
include 'inc/header.php';
?>
    <div class="jumbotron">
        <h1>Find a job</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0">Choose a category</option>
                <?php foreach($categories as $category){ ?>
                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php } ?>
            </select><br>
            <input type="submit" class="btn btn-success btn-lg" value="FIND">
        </form> 
    </div>  

    <div class="main_title mb-4">
        <h3><?= $title ?></h3>
        <a href="insert_job.php" class="btn btn-success" >Create Job</a>
    </div>
    <?php 
    foreach($jobs as $job){ ?>
    <div class="row marketing">
        <div class="col-md-10">
            <h4><?=  $job->job_title  ?></h4>
            <p><?=  $job->description  ?>.</p>
        </div>
        <div class="col-md-2">
            <a href="job.php?id=<?= $job->id ?>" class="btn btn-secondary">View</a>
        </div>
    </div>
    <?php } ?>

<?php
include 'inc/footer.php';
?>