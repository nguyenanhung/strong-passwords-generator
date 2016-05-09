<?php
/**
 * ----------------------------------------------
 * generateStrongPassword
 * 
 * generate Strong Password
 * 
 * @access      public 
 * @package     Users
 * @return      Strong Password
 * @author 		Hung Nguyen <dev@nguyenanhung.com>
 * @link        https://github.com/nguyenanhung/Strong-Passwords-Genarator
 * @version     1.0.1
 * @since       09/05/2016
 *
 * ----------------------------------------------
 */
if (!function_exists('generateStrongPassword'))
{
	function generateStrongPassword($length = 9, $add_dashes = FALSE, $available_sets = 'hung')
	{
		$sets = array();
		if (strpos($available_sets, 'h') !== FALSE)
		{
			$sets[] = 'abcdefghjkmnpqrstuvwxyz';
		}
		if (strpos($available_sets, 'u') !== FALSE)
		{
			$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
		}
		if (strpos($available_sets, 'n') !== FALSE)
		{
			$sets[] = '23456789';
		}
		if (strpos($available_sets, 'g') !== FALSE)
		{
			$sets[] = '!@#$%&*?';
		}
		$all      = '';
		$password = '';
		foreach ($sets as $set)
		{
			$password .= $set[array_rand(str_split($set))];
			$all .= $set;
		}
		$all = str_split($all);
		for ($i = 0; $i < $length - count($sets); $i++)
		{
			$password .= $all[array_rand($all)];
		}
		$password = str_shuffle($password);
		if (!$add_dashes)
		{
			return $password;
		}
		$dash_len = floor(sqrt($length));
		$dash_str = '';
		while (strlen($password) > $dash_len)
		{
			$dash_str .= substr($password, 0, $dash_len) . '-';
			$password = substr($password, $dash_len);
		}
		$dash_str .= $password;
		return $dash_str;
	}
}
echo generateStrongPassword('20', TRUE) . '<br>';
echo generateStrongPassword('20', TRUE, 'h') . '<br>';
echo generateStrongPassword('20', TRUE, 'u') . '<br>';
echo generateStrongPassword('20', TRUE, 'n') . '<br>';
echo generateStrongPassword('20', TRUE, 'g') . '<br>';
