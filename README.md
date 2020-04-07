Documentation start project 
- Linux 

- Windows 
- XAMPP Control Panel
- Config
- ------------------
    #<VirtualHost url ////.com:80> 
    # DocumentRoot cd path..to..you..comp\dev-custom\public
    # ServerName url ////.com
    # <Directory "cd path..to..you..comp\dev-custom\public">
    #  Options Indexes FollowSymLinks
    #  Allow from all
    #  Require all granted
    #  IndexIgnore /
    #  RewriteEngine on
    #  RewriteCond %{REQUEST_FILENAME} !-f
    #  RewriteCond %{REQUEST_FILENAME} !-d
    #  RewriteRule . index.php
    # </Directory>
    #</VirtualHost>
--------------------
- Hosts file
- 127.0.0.1 you url address
- Restart xampp (apache)
- Create database 'name'; --mysql
