<?php 


/*-------------------------/
                        
GOOD LUCK

/-------------------------*/    
require_once 'filer.php';

$Filer  = new Filer; //instance Filer class

$Filer->setSize(7); //size is in MB and the Default is 7MB

$Filer->setType("image/jpeg","image/jpg","image/png");  //set any mimetype 

$Filer->saveTo();//pass a sting and default is "Filer save"

$Filer->upload(); //execute uploading





  




?>