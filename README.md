# phpMortgagePayment
======

Simple PHP Function to calculate the mortgage payments.

## Setup

**Step 1** Include the class

```php
require('phpMortgagePayment.php');
```

**Step 2** Create a new instance of the class

```php
$phpMortgagePayment = new phpMortgagePayment();
```

**Step 3** Just pass the parameters

```php
$amount = 50000;
$interest = 6.5;
$months = 360;

echo "Amount: $$amount <br />Interest: $interest <br />Months: $months <hr>";
echo "The monthly payment is: $".$phpMortgagePayment->calculatePayment($amount,$interest,$months);
```

## Class or Function

I have it as a Class but it can also be used as a simple function

## Tags (keywords)

* php mortgage payments
* calculate mortgage payments with php
* php mortgage payments class
* php mortgage payments function
