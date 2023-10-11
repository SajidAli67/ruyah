<?php
// Controller file (e.g., ExportController.php)
class ExportController extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load_global();
    }
    
    public function exportDatabase() {
        // $data=$this->data;
        // print_r($this->session->userdata['store_name']);exit();
        // Load necessary libraries/helpers
        $this->load->library('zip');
        $this->load->helper('file');

        // Get the current user's id from session
        $userId = $this->session->userdata('store_id');

        // Set the path for storing temporary SQL files
        $tempSqlPath = FCPATH . 'temp_sql/';
        if (!is_dir($tempSqlPath)) {
            mkdir($tempSqlPath, 0777, true);
        }

        // Database configuration
        $dbConfig = $this->load->database('default', TRUE); // 'default' is the database group name in your database.php configuration

        // Get a list of all tables in the database
        $tables = $dbConfig->list_tables();

        // Iterate through each table
        foreach ($tables as $table) {
            // Check if the table has an "store_id" column
            $tableColumns = $dbConfig->list_fields($table);
            if (in_array('store_id', $tableColumns)) {
                // Create a temporary SQL file for each table
                $tempSqlFile = $tempSqlPath . $table . '.sql';
                
                // Generate the SQL query to export data based on the condition
                $sql = "SELECT * FROM $table WHERE store_id = ?";
                $query = $dbConfig->query($sql, array($userId));
                
                // Get the query result as an array of associative arrays
                $resultArray = $query->result_array();

                // Convert each row to a string representation
                $rows = array();
                foreach ($resultArray as $row) {
                    $rowValues = array();
                    foreach ($row as $value) {
                        $rowValues[] = "'" . $dbConfig->escape_str($value) . "'";
                    }
                    $rows[] = '(' . implode(',', $rowValues) . ')';
                }
                
                if (!empty($rows)) {
                     // Replace empty values with NULL
        foreach ($rows as &$row) {
            $row = str_replace("''", 'NULL', $row);
        }
                    // Combine rows into a multi-row insert statement
                    $insertStatement = "INSERT IGNORE INTO $table VALUES " . implode(',', $rows) . ";";

                    // Write the SQL insert statement to the temporary SQL file
                    file_put_contents($tempSqlFile, $insertStatement);

                    // Add the temporary SQL file to the zip archive
                    $this->zip->add_data("$table.sql", file_get_contents($tempSqlFile));
                }
            }
        }

        // Generate and force download the zip archive
        $zipFileName = $this->session->userdata['store_name'].'_' . date('Y-m-d-H:i:s') . '.zip';
        $this->zip->download($zipFileName);
        
        // Clean up - delete temporary SQL files
        delete_files($tempSqlPath, true);
         

         $this->load->model('dashboard_model');//Model

        $data=array_merge($this->data,$this->dashboard_model->get_bar_chart(),$this->dashboard_model->get_pie_chart());

        if(is_admin()){

            $data = array_merge($data,$this->dashboard_model->get_subscription_chart());

        }

        $data['page_title']=$this->lang->line('dashboard');

        if(isset($_POST['store_id'])){

            $data['store_id'] =$_POST['store_id'];

        }

        if(!$this->permissions('dashboard_view')){
            function_alert("Store Backup Exported Successfully. . ."); 
            $this->load->view('role/dashboard_empty',$data);

        }

        else{
            function_alert("Store Backup Exported Successfully. . ."); 
            $this->load->view('dashboard',$data);

        }
       

    }

}
function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
} 
