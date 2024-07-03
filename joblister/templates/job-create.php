<?php
include 'inc/header.php';
?>
    <h2 class="page-header text-center mb-4">Create Job Listing</h2>
    <div class="pop_up mb-5">
        <div class="pop">
            <form action="insert_job.php" method="post">
                <select name="category" class="form-control">
                    <option value="0">Choose a category</option>
                    <?php foreach($categories as $category){ ?>
                        <option value="<?= $category->id ?>"><?= $category->name ?></option>
                    <?php } ?>
                </select><br>
                <input type="text" name="company" class="form-control" placeholder="Enter Company Name"><br>
                <input type="text" name="job_title" class="form-control" placeholder="Enter job title"><br>
                <input type="text" name="salary" class="form-control" placeholder="Monthly Salary"><br>
                <input type="text" name="location" class="form-control" placeholder="Enter job location"><br>
                <input type="text" name="contact_user" class="form-control" placeholder="Enter your number"><br>
                <input type="text" name="contact_email" class="form-control" placeholder="Enter your Email"><br>
                <textarea type="text" name="description" class="form-control" placeholder="Enter Job Description"></textarea><br>
                <input type="submit" name="submit" class="btn btn-success btn-lg border-0" value="Submit">
            </form>
        </div>
    </div>
<?php
include 'inc/footer.php';
?>