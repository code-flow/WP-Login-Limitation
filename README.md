WP-Login-Limitation
===================

Produces an error 404 when accessing wp-login.php without a parameter.

1. Add these lines to your .htaccess file.

    <IfModule mod_rewrite.c>	 	 
      RewriteEngine On	 	
      RewriteCond %{REQUEST_FILENAME} wp-login.php	 	 
      RewriteCond %{QUERY_STRING} !(access=yes)|(action=logout)	 
      RewriteRule . - [R=404,L,NS]	 	 
    </ifModule>
  
2. Install and activate the plugin.
3. Call your wp-login.php like this: http://example.com/wp-login.php?access=yes


Read more about this here (German language only): http://hinterland.florian-simeth.de/wp-login-php-umleiten-falls-kein-php-parameter-angegeben-wurde/
