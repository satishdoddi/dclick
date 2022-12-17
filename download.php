<?php

$url = "https://ssyoutube.com/api/convert";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "authority: ssyoutube.com",
   "accept: application/json, text/plain, */*",
   'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7',
   "content-type: application/json",
   'cookie: uid=aec107bdf9b65d5b; _ga=GA1.2.1659770661.1671104122; _gid=GA1.2.2058974347.1671104122; push=86; outputStats=31; clickAds=32; _gat_gtag_UA_125802910_4=1; laravel_session=eyJpdiI6IlJhanNaNVFNa0h1UlZLVjdTSzBIYnc9PSIsInZhbHVlIjoiTjF5RUhnMGtnbUV1QUM1bEV5cEJnRHplL0xwaFI1MkdaZUc0cFE5M0NUS1ZaUW8wckdHWjU2eFN5R0pxNlNWUHFJb0pGRU54dHU0Tkg2STN2WmU3emVTa29yWFAyeUMzZTJ0OXZyMmhNYWpzamZWZ29TVDhLbi94UFA4OFhNNWMiLCJtYWMiOiJmNTNjOTgxYjNhNmU5YmU2ODZhYTU2M2UzYWUzMjJkZWJiNGNlZDQ2NTE4NzFkOGI3MmYyYzQ5ZWQ4NTA0MGFjIiwidGFnIjoiIn0%3D',
   "origin: https://ssyoutube.com",
   "referer: https://ssyoutube.com/en373/",
   'sec-ch-ua: "Chromium";v="107", "Not=A?Brand";v="24"',
   "sec-ch-ua-mobile: ?1",
   'sec-ch-ua-platform: "Android"',
   "sec-fetch-dest: empty",
   "sec-fetch-mode: cors",
   "sec-fetch-site: same-origin",
   "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi 8A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36",
   "x-requested-with: XMLHttpRequest",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"url":"'.$_GET[url].'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo ($resp);

?>
