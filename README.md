## Number to Bangla Number, Word or Month Name in Laravel

![Packagist](https://img.shields.io/packagist/dt/lemonpatwari/number-to-bangla)
[![Packagist License](https://poser.pugx.org/lemonpatwari/number-to-bangla/license.png)](http://choosealicense.com/licenses/mit/)
[![Latest Stable Version](https://poser.pugx.org/lemonpatwari/number-to-bangla/version.png)](https://packagist.org/packages/lemonpatwari/number-to-bangla)
[![GitHub stars](https://img.shields.io/github/stars/lemonpatwari/number-to-bangla)](https://github.com/lemonpatwari/number-to-bangla/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/lemonpatwari/number-to-bangla)](https://github.com/lemonpatwari/number-to-bangla/network)

Laravel package to convert English numbers to Bangla number or Bangla text, Bangla month name and Bangla Money Format for Laravel. Maximum possible number to covert in Bangla word is 999999999999999
Example,
| Operation | English Input | Bangla Output |
| --- | --- | --- |
| Text (Integer) | 21424060 |দুই কোটি চৌদ্দ লক্ষ চব্বিশ হাজার ষাট|
| Text (Float) | 21424060.60 |দুই কোটি চৌদ্দ লক্ষ চব্বিশ হাজার ষাট দশমিক ছয়|
| Number | 21424060.6 |২১৪২৪০৬০.৬|
| Text Money Format | 21424060.6 |দুই কোটি চৌদ্দ লক্ষ চব্বিশ হাজার ষাট টাকা ষাট পয়সা|
| Month | 04 |এপ্রিল|
| Comma (Lakh) | 21424060 |২,১৪,২৪,০৬০|


## Installation

Install the package through [Composer](http://getcomposer.org).
On the command line:

```
composer require lemonpatwari/number-to-bangla

```
## Publish 

You can publish via single command:


```bash
php artisan banglaNumber:install
```

## Usage
Here you can see some example of just how simple this package is to use.

```php
use lemonpatwari\BanglaNumber\NumberToBangla;

$numberToBangla = new NumberToBangla();


$output = $numberToBangla->bnWord(21424060);    // Output:  দুই কোটি চৌদ্দ লক্ষ চব্বিশ হাজার ষাট
$output = $numberToBangla->bnWord(21424060.06);  // Output:  দুই কোটি চৌদ্দ লক্ষ চব্বিশ হাজার ষাট দশমিক শূন্য ছয়

$output = $numberToBangla->bnMoney(21424060);     // Output:  দুই কোটি চৌদ্দ লক্ষ চব্বিশ হাজার ষাট টাকা
$output = $numberToBangla->bnMoney(21424060.05);  // Output:  দুই কোটি চৌদ্দ লক্ষ চব্বিশ হাজার ষাট টাকা ছয় পয়সা

$output = $numberToBangla->bnNum(21424060);    // Output:  ২১৪২৪০৬০
$output = $numberToBangla->bnNum(21424060.987); // Output:  ২১৪২৪০৬০.৯৮৭

// Input Limit (1-12) Example
$output = $numberToBangla->bnMonth(4);    // Output:  এপ্রিল 
$output = $numberToBangla->bnMonth(12);    // Output:  ডিসেম্বর

$output = $numberToBangla->bnCommaLakh(21424060);    // Output:  ২,১৪,২৪,০৬০


```

### Security

If you discover any issues, please email lemonpatwari@gmail.com
/ hello@lemonpatwari.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

