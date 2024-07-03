<?php
    class Job{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }
        // Get Jobs
        public function getAllJobs(){
            $this->db->query("
                SELECT jobs.*, categories.name as cname
                FROM jobs
                INNER JOIN categories ON jobs.category_id = categories.id
                ORDER BY post_date DESC
            ");

            $results = $this->db->resultSet();
            return $results;
        }
        // Get Categories
        public function getCategories(){
            $this->db->query("
            SELECT * FROM categories");

            $results = $this->db->resultSet();
            return $results;
        }
        // Get jobs by Category
        public function getByCategory($category){
            $this->db->query("
                SELECT jobs.*, categories.name as cname
                FROM jobs
                INNER JOIN categories ON jobs.category_id = categories.id
                WHERE jobs.category_id = $category
                ORDER BY post_date DESC
            ");

            $results = $this->db->resultSet();
            return $results;
        }
        // Get a single category
        public function getCategory($category_id){
            $this->db->query("
            SELECT * FROM categories WHERE id=:category_id");
            $this->db->bind(':category_id', $category_id);

            $row = $this->db->single();
            return $row;
        }
        // Get a single job
        public function getJob($job_id){
            $this->db->query("
            SELECT * FROM jobs WHERE id=:job_id");
            $this->db->bind(':job_id', $job_id);
            $row = $this->db->single();
            return $row;
        }
        // Add a new job
        public function create($job_data){
        //     echo"<pre>";
        // echo $job_data['category'];
        // exit("this->data");
            $this->db->query("
            INSERT INTO jobs (`category_id`, `company`, `job_title`, `description`, 
            `salary`, `location`, `contact_user`, `contact_email`) VALUES ('$job_data[category]',
            '$job_data[company]','$job_data[job_title]','$job_data[salary]','$job_data[location]','$job_data[contact_user]','$job_data[contact_email]',
            '$job_data[description]')");
            
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    }
?>