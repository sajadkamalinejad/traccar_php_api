<?php
function getPosition()
{
  $url = 'http://traccar_server/api/positions';

  $username = 'admin';

  $password = 'admin';

  $ch = curl_init($url);

  curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);

  if(curl_errno($ch))
  {
      throw new Exception(curl_error($ch));
  }

  $data = json_decode($response);

  $lat = $data[0]->latitude;
  $long =  $data[0]->longitude;
  return array($lat, $long);
}
