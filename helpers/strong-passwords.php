<?php
/**
 * Project strong-passwords-generator
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/19/2021
 * Time: 16:17
 */
if (!function_exists('generateStrongPassword')) {
    /**
     * Function generateStrongPassword -
     *
     * @param int    $length
     * @param false  $addDashes
     * @param string $availableSets
     *
     * @return string
     * @author    : 713uk13m <dev@nguyenanhung.com>
     * @copyright : 713uk13m <dev@nguyenanhung.com>
     * @time      : 08/19/2021 18:06
     * @link      https://github.com/nguyenanhung/strong-passwords-generator
     * @see       https://github.com/nguyenanhung/strong-passwords-generator/blob/master/test/example_with_helper.php
     */
    function generateStrongPassword($length = 16, $addDashes = FALSE, $availableSets = 'hung')
    {
        $output = nguyenanhung\Library\Password\StrongPassword::generateStrongPassword($length, $addDashes, $availableSets);

        return trim($output);
    }
}
if (!function_exists('validStrongPassword')) {
    /**
     * Function validStrongPassword
     *
     * @param string $password
     *
     * @return bool
     * @author    : 713uk13m <dev@nguyenanhung.com>
     * @copyright : 713uk13m <dev@nguyenanhung.com>
     * @time      : 08/19/2021 44:53
     * @link      https://github.com/nguyenanhung/strong-passwords-generator
     * @see       https://github.com/nguyenanhung/strong-passwords-generator/blob/master/test/example_with_helper.php
     */
    function validStrongPassword($password = '')
    {
        return nguyenanhung\Library\Password\StrongPassword::validStrongPassword($password);
    }
}
if (!function_exists('generateRandomPassword')) {
    /**
     * Function generateRandomPassword
     *
     * @param int $length
     *
     * @return string
     * @author    : 713uk13m <dev@nguyenanhung.com>
     * @copyright : 713uk13m <dev@nguyenanhung.com>
     * @time      : 08/22/2021 12:16
     * @link      https://github.com/nguyenanhung/strong-passwords-generator
     * @see       https://github.com/nguyenanhung/strong-passwords-generator/blob/master/test/example_with_helper.php
     */
    function generateRandomPassword($length = 20)
    {
        return nguyenanhung\Library\Password\StrongPassword::generateRandomPassword($length);
    }
}
