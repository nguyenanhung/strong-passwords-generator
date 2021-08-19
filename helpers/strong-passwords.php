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
