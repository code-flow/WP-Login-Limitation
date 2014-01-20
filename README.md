WP-Login-Limitation
===================

Redirects a call to wp-login.php if a PHP-Parameter is missing.

Add these lines to your .htaccess file.

  <IfModule mod_rewrite.c>	 	 
    RewriteEngine On	 	
    RewriteCond %{REQUEST_FILENAME} wp-login.php	 	 
    RewriteCond %{QUERY_STRING} !(access=yes)|(action=logout)	 
    RewriteRule . - [R=404,L,NS]	 	 
  </ifModule>
  
Read more about this here (German language only): http://hinterland.florian-simeth.de/wp-login-php-umleiten-falls-kein-php-parameter-angegeben-wurde/
