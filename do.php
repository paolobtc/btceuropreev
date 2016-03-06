
 $url = "http://preev.com/pulse/units:btc+eur/sources:kraken";		
 $c = curl_init();
 curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($c, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
 curl_setopt($c, CURLOPT_URL, $url);
 $data = curl_exec($c);
 curl_close($c);
 $obj = json_decode($data);
 $ret = $obj->{'btc'}->{'eur'}->{'kraken'}->{'last'};
 echo round(floatval($ret));
