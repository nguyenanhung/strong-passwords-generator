<?php
/**
 * Project strong-passwords-generator
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/19/2021
 * Time: 16:22
 */

namespace nguyenanhung\Library\Password;

/**
 * Class StrongPassword
 *
 * @package   nguyenanhung\Library\Password
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class StrongPassword
{
    /**
     * Function generateStrongPassword
     *
     * @param int    $length
     * @param false  $addDashes
     * @param string $availableSets
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/19/2021 23:50
     */
    public static function generateStrongPassword($length = 16, $addDashes = FALSE, $availableSets = 'hung')
    {
        $sets = array();

        if (strpos($availableSets, 'h') !== FALSE) {
            $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        }

        if (strpos($availableSets, 'u') !== FALSE) {
            $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
        }

        if (strpos($availableSets, 'n') !== FALSE) {
            $sets[] = '0123456789';
        }

        if (strpos($availableSets, 'g') !== FALSE) {
            $sets[] = '!@#$%&*?';
        }

        $all      = '';
        $password = '';
        foreach ($sets as $set) {
            $password .= $set[array_rand(str_split($set))];
            $all      .= $set;
        }

        $all = str_split($all);
        for ($i = 0; $i < $length - count($sets); $i++) {
            $password .= $all[array_rand($all)];
        }

        $password = str_shuffle($password);

        if (!$addDashes) {
            return $password;
        }

        $dashLength = floor(sqrt($length));
        $dashString = '';
        while (strlen($password) > $dashLength) {
            $dashString .= substr($password, 0, $dashLength) . '-';
            $password   = substr($password, $dashLength);
        }

        $dashString .= $password;

        return $dashString;
    }
}
