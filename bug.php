```php
$file = fopen("myfile.txt", "r+");
if ($file) {
    // ... process the file ...
    fclose($file);
} else {
    // Handle the error
    echo "Error opening file.";
}
```