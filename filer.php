<?php

class Filer{
     
        
    public  $input_file_name = null,
            $uploaded_file_name,
            $uploaded_file_size,        
            $uploaded_file_type,
            $uploaded_file_path,
            $uploaded_file_maximum_size,
            $allowed_files,
            $save_to;
            
    
    
    
    public function upload(float $size=1000000,$allowed_files=array("image/png","image/jpeg","image/jpg"),$save_to="imager_save"){
        
       
           
         if(!file_exists($this->save_to)){
             mkdir($this->save_to);
         }  

           
           if(isset($_FILES)){
            
               //upload files
               $this->input_file_name = array_keys($_FILES)[0]; 
               
               $this->uploaded_file_path = $_FILES[$this->input_file_name]['tmp_name'];
               $this->uploaded_file_type = $_FILES[$this->input_file_name]['type'];
               $this->uploaded_file_name = $_FILES[$this->input_file_name]['name'];
               $this->uploaded_file_size = $_FILES[$this->input_file_name]['size'];

           }
           else {
            
            $this->input_file_name = "";
            die("no uploaded files!");
        }
        
           
           
           //verify allowed types
           if(in_array($this->uploaded_file_type,$this->allowed_files)){
               
                //verify file size
            if($this->uploaded_file_size <= $this->uploaded_file_maximum_size){
           
                chdir($this->save_to);
               if(move_uploaded_file($this->uploaded_file_path,$this->uploaded_file_name)){
                   
                  echo "successful uploading";
                   
               }
                else{
                    die ("error in the final");
                }
        
            }   
            
               else{
                 die("maximum file is ". $this->uploaded_file_maximum_size);
             }
               
           }
           
           else{
               echo"allowed extntions : ".$this->uploaded_file_type; 
               $allowed_type = "";
            foreach($allowed_files as $allowed_file){
                $allowed_type .= explode("/",($allowed_file))[1].",";
            }
                echo $allowed_type;
               die();  
           
           }
           
       
    }
    
    
    
    public function setSize(float $size=1){
        return $this->uploaded_file_maximum_size = $size * 1000000 ;
    }
    
    public function setType(){
    
        if(func_num_args() >= 1){
             $this->allowed_files = func_get_args();
        }
        
        
        else{
            die("please add at least one mime type to setType()");
        }
        
    }
    
    public function saveTo(string $save_to="Filer save"){
        
        $this->save_to = trim($save_to);
    }
    
}

?>