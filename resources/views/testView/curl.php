<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//
echo ">><br>";


$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,"http://localhost/booking/public/api/note");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "_token=QzNWZFuquFyFzcprJEphwkUYyNWBY0n3Pls4pnDb&note=value1&api_token=Z793Wiul7X7pi0pG6YQPuh11ZOd0R07WpBPrvlrlaQFOKm30itscGaHKXFTP");

$output=curl_exec($ch);

print_r($output);

curl_close($ch);
echo "<br>";
if(is_callable('curl_init')){
   echo "Enabled";
}
else
{
   echo "Not enabled";
}
?>