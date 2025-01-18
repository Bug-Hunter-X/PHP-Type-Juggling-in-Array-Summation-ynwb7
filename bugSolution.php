```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    // Explicit type checking
    if (is_numeric($number)) {
      $sum += (float)$number; // Ensure addition is performed with floats
    } else {
      //Handle non-numeric values appropriately, e.g., throw an exception
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Correct Sum
```