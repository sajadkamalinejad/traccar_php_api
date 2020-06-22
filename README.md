# traccar_php_api
Simple Traccar PHP API Example Code

With this web application you can get GPS device location from Traccar server using API, then show on index.php map.

First you should sign up in https://www.maptiler.com/ and select street tile and get the API key.

then you should connect the sever.php file to you traccar server by changing this section of the code:

  $url = 'http://traccar_server/api/positions';

  $username = 'admin';

  $password = 'admin';
  
Then you should upload these php file to a LAMP and browse it.

