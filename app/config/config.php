<?php
 
  define('DEBUG', true);

  define('DB_NAME', 'project'); // database name
  define('DB_USER', 'root'); // database user
  define('DB_PASSWORD', ''); // database password
  define('DB_HOST', '127.0.0.1'); // database host *** use IP address to avoid DNS lookup

  define('DEFAULT_CONTROLLER', 'Home'); // default controller if there isn't one defined in the url
  define('DEFAULT_LAYOUT', 'default'); // if no layout is set in the controller use this layout.

  define('PROOT', '/project/'); // set this to '/' for a live server.

  define('SITE_TITLE', 'Project'); // This will be used if no site title is set
  define('MENU_BRAND', 'MABU'); //This is the Brand text in the menu

  define('CURRENT_USER_SESSION_NAME', 'fEueuD2Z5fOknVeY6Qp1'); //session name for logged in user
  define('REMEMBER_ME_COOKIE_NAME', 'CKfKmnZ3bzxSeL5M9g1x'); // cookie name for logged in user remember me
  define('REMEMBER_ME_COOKIE_EXPIRY', 2592000); // time in seconds for remember me cookie to live (30 days)

  define('ACCESS_RESTRICTED', 'Restricted'); //controller name for the restricted redirect
