```php
$file = fopen("myfile.txt", "r+");
if ($file) {
    // ... process the file ...
    fclose($file);
} else {
    $error = error_get_last();
    echo "Error opening file: " . $error['message'];
}
```