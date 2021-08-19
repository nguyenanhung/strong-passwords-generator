# Strong Passwords Generator

Script Generator Strong Passwords with PHP

## Installation

### **Install with composer**

Step 1: Install package

```shell
composer require nguyenanhung/strong-passwords-generator
```

Step 2: Init to Project

```php
<?php 
require_once '/your/to/path/vendor/autoload.php';
use nguyenanhung\Library\Password\StrongPassword;

```

### **How to Use**

#### Use Class

Example Code

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use nguyenanhung\Library\Password\StrongPassword;

echo StrongPassword::generateStrongPassword('20'); // Printer: vu6QsYz@466V?FxRv*Z4
echo "\n";
echo StrongPassword::generateStrongPassword('20', TRUE); // Printer: msd!-EVbh-gd#y-v*v8-Xwdx
echo "\n";
echo StrongPassword::generateStrongPassword('20', TRUE, 'h'); // Printer: ksrg-yshs-ffdy-hyqa-heyy
echo "\n";
echo StrongPassword::generateStrongPassword('20', TRUE, 'u'); // Printer: DESS-WEHY-JPNF-HBPJ-HCYN
echo "\n";
echo StrongPassword::generateStrongPassword('20', TRUE, 'n'); // Printer: 3939-6257-5463-7739-8658
echo "\n";
echo StrongPassword::generateStrongPassword('20', TRUE, 'g'); // Printer: %@#?-?$??-*%@&-?@%#-!%!@
echo "\n";
echo StrongPassword::validStrongPassword('vu6QsYz@466V?FxRv*Z4'); // Printer: true
echo "\n";
echo StrongPassword::generateRandomPassword(36); // Printer: 3m8GRR-E!bqFz-j%P8dW-sC*h2Q-9fnY88-3Dg%8%

```

See: https://github.com/nguyenanhung/strong-passwords-generator/blob/master/test/example_with_class.php

#### Quick Helper

Example Code

```php
<?php
require_once '/your/to/path/vendor/autoload.php';

echo generateStrongPassword('20'); // Printer: vu6QsYz@466V?FxRv*Z4
echo "\n";
echo generateStrongPassword('20', TRUE); // Printer: msd!-EVbh-gd#y-v*v8-Xwdx
echo "\n";
echo generateStrongPassword('20', TRUE, 'h'); // Printer: ksrg-yshs-ffdy-hyqa-heyy
echo "\n";
echo generateStrongPassword('20', TRUE, 'u'); // Printer: DESS-WEHY-JPNF-HBPJ-HCYN
echo "\n";
echo generateStrongPassword('20', TRUE, 'n'); // Printer: 3939-6257-5463-7739-8658
echo "\n";
echo generateStrongPassword('20', TRUE, 'g'); // Printer: %@#?-?$??-*%@&-?@%#-!%!@
echo "\n";
echo validStrongPassword('vu6QsYz@466V?FxRv*Z4'); // Printer: true
echo "\n";
echo generateRandomPassword(36); // Printer: 3m8GRR-E!bqFz-j%P8dW-sC*h2Q-9fnY88-3Dg%8%

```

See: https://github.com/nguyenanhung/strong-passwords-generator/blob/master/test/example_with_helper.php

Very easy and simple

## Contact

If any question & request, please contact following information

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Hanoi with Love <3