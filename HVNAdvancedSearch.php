<?php
/*
  HVNAdvancedSearch - Tìm kiếm nâng cao trên HentaiVN mà không cần tài khoản
  PHP Script by GitHub.com/LilShieru.
*/
$c = curl_init(); $domain = "https://hentaivn.tv";
curl_setopt($c, CURLOPT_URL, 'https://hentaivn.tv/forum/search-plus.php?' . $_SERVER["QUERY_STRING"]);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_HTTPHEADER, array(
    'Cookie: user_id=108808; user_pass=; user_name=Guest User;',
));
echo str_replace($domain . "/forum/search-plus.php", "/HVNAdvancedSearch.php", str_replace('href="/', 'href="' . $domain, curl_exec($cURLConnection)));
curl_close($cURLConnection);
?>
