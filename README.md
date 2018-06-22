# PHP Filer
simple and secure class to upload files using PHP

# PHP versions 7 and 5 

# installing
instance Filer class then call the methods to set the attribute of files to upload

# Example
```
$filer =new Filer;

$filer->setSize(4); //size is in MB so our maximum file size is 4MB

$filer->setType("application/pdf",""image/jpeg) //pass any mime types

$filer->saveTo("my_files");  //pass your folder to save the uploaded files

//finally upload

$filer->upload();

```
## licsence is MIT

# contact 
ahmedmahfouzjob@gmail.com
