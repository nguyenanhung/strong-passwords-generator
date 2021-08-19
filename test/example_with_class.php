<?php
/**
 * Project strong-passwords-generator
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/19/2021
 * Time: 16:26
 */
require_once __DIR__ . '/../vendor/autoload.php';

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