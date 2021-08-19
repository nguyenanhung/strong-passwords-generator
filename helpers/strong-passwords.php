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
     * Function generateStrongPassword
     *
     * @param int    $length
     * @param false  $add_dashes
     * @param string $available_sets
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/19/2021 18:06
     * @link     : https://github.com/nguyenanhung/strong-passwords-generator
     */
    function generateStrongPassword($length = 9, $add_dashes = FALSE, $available_sets = 'hung')
    {
        $sets = array();

        if (strpos($available_sets, 'h') !== FALSE) {
            $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        }

        if (strpos($available_sets, 'u') !== FALSE) {
            $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
        }

        if (strpos($available_sets, 'n') !== FALSE) {
            $sets[] = '23456789';
        }

        if (strpos($available_sets, 'g') !== FALSE) {
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

        if (!$add_dashes) {
            return $password;
        }

        $dash_len = floor(sqrt($length));
        $dash_str = '';
        while (strlen($password) > $dash_len) {
            $dash_str .= substr($password, 0, $dash_len) . '-';
            $password = substr($password, $dash_len);
        }

        $dash_str .= $password;

        return $dash_str;
    }
}
