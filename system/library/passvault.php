<?php
/**
 * PassVault — оборотне шифрування пароля клієнта (AES-256-CBC).
 * Показ поточного пароля власнику акаунта в кабінеті.
 * Ключ — похідна від config_encryption.
 */
class PassVault {

	public static function enc($plain, $site_key) {
		if ($plain === '' || $site_key === '') { return ''; }
		$key = hash('sha256', 'passvault:' . $site_key, true);
		$iv  = random_bytes(16);
		$ct  = openssl_encrypt($plain, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
		if ($ct === false) { return ''; }
		return base64_encode($iv . $ct);
	}

	public static function dec($stored, $site_key) {
		if ($stored === '' || $stored === null || $site_key === '') { return ''; }
		$raw = base64_decode($stored, true);
		if ($raw === false || strlen($raw) < 17) { return ''; }
		$key = hash('sha256', 'passvault:' . $site_key, true);
		$iv  = substr($raw, 0, 16);
		$ct  = substr($raw, 16);
		$pt  = openssl_decrypt($ct, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
		return ($pt === false) ? '' : $pt;
	}
}
