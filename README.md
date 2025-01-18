# PHP Type Juggling Bug

This repository demonstrates a common error in PHP: unexpected behavior due to type juggling when working with arrays containing mixed data types (integers and strings).

The `bug.php` file contains code that calculates the sum of an array.  However, the presence of a string within the array leads to incorrect results because PHP implicitly converts the string to an integer in a way that might not be expected.

The `bugSolution.php` file provides a corrected version that explicitly handles type checking to prevent this issue.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter. Observe the incorrect sum.
3. Run `bugSolution.php`. Observe the corrected sum.

## Discussion

This bug highlights the importance of strict type handling in PHP to avoid subtle errors.  While type juggling can sometimes be convenient, it's crucial to be aware of its potential pitfalls, especially in calculations.