DirectoryLister 5.4.1 With Login
--------

ไฟล์ที่ต้องใส่ Password ที่ต้องตั้ง
------------

  - **login.php** 
  บรรทัดที่ 6 ตรง `$cookie_value =`
  - **protect-this.php** 
  บรรทัดที่ 3 ตรง `$password =`
  - **.htaccess**
  บรรทัดที่ 12 ตรง `password=`
--------
ตำแหน่งที่ใส่ไฟล์สำหรับอัปโหลด
------------
แฟ้ม `private-files`


Files requiring a password (which you must set):
------------
- **login.php**
Line 6, at `$cookie_value =`
- **protect-this.php**
Line 3, at `$password =`
- **.htaccess**
Line 12, at `password=`
--------
Location for files to be uploaded
------------
folder `private-files`
  
Requirements
------------

  - Directory Lister requires [PHP](https://www.php.net/) >= 8.2
    - The [Zip](https://www.php.net/manual/en/book.zip.php) extension is required for zip downloads
    - The [DOM](https://www.php.net/en/dom) and [Fileinfo](https://www.php.net/manual/en/book.fileinfo.php) extensions are required for README rendering



Thank
---------
[DirectoryLister 5.4.1](https://github.com/DirectoryLister/DirectoryLister/)

Copyright
---------

This project is licensed under the [MIT License](https://github.com/DirectoryLister/DirectoryLister/blob/master/LICENSE).
