<title>PHP Redirect</title>
<?php
$prefix = 'redirect_';
$txts = dns_get_record($_SERVER['HTTP_HOST'], DNS_TXT);
foreach($txts as $txt) {
        foreach($txt['entries'] as $txtValue) {
        if (strpos($txtValue, $prefix) !== false) {
            $explode_txtValue = explode($prefix, $txtValue);
            $url = filter_var($explode_txtValue[1], FILTER_SANITIZE_URL);
            if (filter_var($url, FILTER_VALIDATE_URL)) {
                header('Location: ' . $url, true, 302);
                exit;
            } else {
                echo 'Invalid URL: ' . $url;
                exit;
            }
        }
    }
}
?>
<?php include ("banner"); ?>
