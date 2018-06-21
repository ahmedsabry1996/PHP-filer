<?php 


/*-------------------------/
                        
GOOD LUCK

/-------------------------*/    
require_once 'filer.php';

$Filer  = new Filer;

$Filer->setSize(7);

$Filer->setType("image/jpeg","image/jpg","image/png");  

$Filer->saveTo("ll");

$Filer->upload();





  




?>