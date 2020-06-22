# traccar_php_api
Simple Traccar PHP API Example Code

With this web application you can get GPS device location from Traccar server using API, then show on index.php map.

1- you should sign up in https://www.maptiler.com/ and select street tile and get the API key.

2- in index.php you should place the API key here(in javascript section):
  L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=<your_api_key>', 

3- you should now connect the sever.php file to you traccar server by changing this section of the code:

  $url = 'http://traccar_server/api/positions';

  $username = 'admin';

  $password = 'admin';
  
Then you should upload these php file to a LAMP and browse it.

