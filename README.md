# PHP Filer
simplest , safe PHP file uploader 

## Getting Started
Download it as a zip file or colne it

## installing 

* instance Filer class
* call methods setSize(),setType,savaTo(),upload();
# Note
```
*This code is wriiten in PHP 7 and 5

```
## Usage example
```
$filer = Filer;

//size in MB ,  default is = 1 MB 
$Filer->setSize(7);

//type must be mimetype
$Filer->setType("image/jpeg","image/jpg","image/png","application/pdf");  

//where to save after uploading , default is "Filer save"
$Filer->saveTo("my_folder");

//then upload , 
$Filer->upload();

```

## Contributing
Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.
contribute to make it better for the world . :)

## Author
* **Ahmed Sabry** - *Back end* - [ahmedsabry1996](https://github.com/ahmedsabry1996)

## License
This project is licensed under the MIT Licensesee the LICENSE.md file for details
 see the [LICENSE.md](LICENSE.md) file for details
 
## Contact
i'please to contact me via ahmedmahfouzjob@gmail.com