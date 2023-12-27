Certainly! Here's another simple PHP script that displays text:

```php
<!DOCTYPE html>
<html>
<head>
    <title>Another PHP Text Sample</title>
</head>
<body>

<?php
// PHP code starts here

// Define some more text
$greeting = "Welcome to the PHP world!";
$description = "This is another example script demonstrating the use of PHP to display text.";

// Output the text
echo "<h2>$greeting</h2>";
echo "<p>$description</p>";

// PHP code ends here
?>

</body>
</html>
```

In this script, I've defined two variables, `$greeting` and `$description`, each containing different text. The script then uses the `echo` statement to output an `<h2>` (subheading) element with the greeting and a `<p>` (paragraph) element with the description. When you run this script, it will generate an HTML page with the specified text.