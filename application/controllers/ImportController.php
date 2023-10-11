<?php

// Controller file (e.g., ImportController.php)
class ImportController extends My_Controller {
    public function __construct(){
        parent::__construct();
        $this->load_global();
    }
    public function index() {
       
        $data=$this->data;
        $data['page_title']=$this->lang->line('vat-list2');
        $this->load->view('vat-list2',$data);




    }

    public function importDatabase() {
        // Load necessary libraries/helpers
        $config['upload_path'] = 'uploads';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $this->load->helper('file');

        // Define upload and extract directory
        $uploadPath = FCPATH . 'uploads/';
        $extractPath = FCPATH . 'extracted_sql/';

        if (!is_dir($extractPath)) {
            mkdir($extractPath, 0777, true);
        }

        // Upload and extract the zip file
        if ($this->upload->do_upload('zip_file')) {
            $uploadedData = $this->upload->data();
            $zipFilePath = $uploadPath . $uploadedData['file_name'];

            // Extract the zip file using ZipArchive
            $zip = new ZipArchive;
            if ($zip->open($zipFilePath) === TRUE) {
                $zip->extractTo($extractPath);
                $zip->close();
                // exit();
                // Iterate through SQL files and execute queries
                $dbConfig = $this->load->database('default', TRUE);

                foreach (get_filenames($extractPath, TRUE) as $sqlFile) {
                  // echo "<pre>";  print_r(get_filenames($extractPath, TRUE));exit();
                    // Extract the table name from the SQL file's name
                    $tableName = pathinfo($sqlFile, PATHINFO_FILENAME);
                    // echo "<pre>";  print_r($tableName);
                    $sql = file_get_contents($sqlFile);
                    // echo "<pre>";  print_r($sql);
                    $queries = explode(';', $sql);
                    // print_r($queries[0]);
                    foreach ($queries as $query) {
                        // print_r($query);
                        if ($query !== '') {
    // Check if the query is an INSERT statement
    if (preg_match('/^INSERT\s+IGNORE\s+INTO\s+/i', $query)) {
        // Get the primary key value from the query
        // if (preg_match('/VALUES\s+\(\s*\'(.*?)\'\s*\)/i', $query, $matches)) {
        //     $primaryKeyValue = $matches[1];
        //     // print_r("expression");
           
        //   echo "<pre>";  print_r($matches);
        //    $dbConfig->query($query);

            
        // }
        $dbConfig->query($query);
    }
}

                    }
                }


                // Clean up - delete extracted files
                delete_files($extractPath, TRUE);

                // Delete the uploaded zip file
                unlink($zipFilePath);
$this->session->set_flashdata('success_import', 'Data restored Successfully. . .');
redirect('ImportController', 'refresh');
            } else {
                echo 'Error extracting the zip file.';
            } 
        } else {
            // Display file upload errors
            echo 'Error uploading the zip file: ' . $this->upload->display_errors();
        }
    }
}
