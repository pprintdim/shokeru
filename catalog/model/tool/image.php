<?php
class ModelToolImage extends Model {
	// Конвертація повнорозмірного зображення у WebP (для прямих посилань: банери, safemode тощо)
	public function webp($filename) {
		$server = (!empty($this->request->server['HTTPS'])) ? $this->config->get('config_ssl') : $this->config->get('config_url');

		if (!$filename || !is_file(DIR_IMAGE . $filename) || substr(str_replace('\\', '/', realpath(DIR_IMAGE . $filename)), 0, strlen(DIR_IMAGE)) != str_replace('\\', '/', DIR_IMAGE)) {
			return $server . 'image/' . $filename;
		}

		$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
		if (!$this->config->get('config_webp') || !in_array($ext, array('jpg', 'jpeg', 'png'))) {
			return $server . 'image/' . $filename; // svg/gif/webp або вимкнено — як є
		}

		$new = 'cache/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '.webp';

		if (!is_file(DIR_IMAGE . $new) || filemtime(DIR_IMAGE . $filename) > filemtime(DIR_IMAGE . $new)) {
			$path = '';
			foreach (explode('/', dirname($new)) as $dir) {
				$path .= '/' . $dir;
				if (!is_dir(DIR_IMAGE . $path)) { @mkdir(DIR_IMAGE . $path, 0777); }
			}
			$image = new Image(DIR_IMAGE . $filename);
			$image->save(DIR_IMAGE . $new);
		}

		if (!is_file(DIR_IMAGE . $new)) {
			return $server . 'image/' . $filename;
		}

		return $server . 'image/' . str_replace(' ', '%20', $new);
	}

	public function resize($filename, $width, $height) {
		if (!is_file(DIR_IMAGE . $filename) || substr(str_replace('\\', '/', realpath(DIR_IMAGE . $filename)), 0, strlen(DIR_IMAGE)) != str_replace('\\', '/', DIR_IMAGE)) {
			return;
		}

		$extension = pathinfo($filename, PATHINFO_EXTENSION);

		// WebP: якщо увімкнено — jpg/png кеш генеруємо у .webp (gif/svg лишаємо як є)
		$cache_ext = $extension;
		if ($this->config->get('config_webp') && in_array(strtolower($extension), array('jpg', 'jpeg', 'png'))) {
			$cache_ext = 'webp';
		}

		$image_old = $filename;
		$image_new = 'cache/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-' . (int)$width . 'x' . (int)$height . '.' . $cache_ext;

		if (!is_file(DIR_IMAGE . $image_new) || (filemtime(DIR_IMAGE . $image_old) > filemtime(DIR_IMAGE . $image_new))) {
			list($width_orig, $height_orig, $image_type) = getimagesize(DIR_IMAGE . $image_old);
				 
			if (!in_array($image_type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF, IMAGETYPE_WEBP))) { 
				if ($this->request->server['HTTPS']) {
					return $this->config->get('config_ssl') . 'image/' . $image_old;
 				} else {
					return $this->config->get('config_url') . 'image/' . $image_old;
				}
			}
						
			$path = '';

			$directories = explode('/', dirname($image_new));

			foreach ($directories as $directory) {
				$path = $path . '/' . $directory;

				if (!is_dir(DIR_IMAGE . $path)) {
					@mkdir(DIR_IMAGE . $path, 0777);
				}
			}

			if ($width_orig != $width || $height_orig != $height || $cache_ext != strtolower($extension)) {
				// перекодовуємо, якщо розмір АБО формат відрізняються (напр. jpg -> webp)
				$image = new Image(DIR_IMAGE . $image_old);
				$image->resize($width, $height);
				$image->save(DIR_IMAGE . $image_new);
			} else {
				copy(DIR_IMAGE . $image_old, DIR_IMAGE . $image_new);
			}
		}
		
		$image_new = str_replace(' ', '%20', $image_new);  // fix bug when attach image on email (gmail.com). it is automatic changing space " " to +
		
		if ($this->request->server['HTTPS']) {
			return $this->config->get('config_ssl') . 'image/' . $image_new;
		} else {
			return $this->config->get('config_url') . 'image/' . $image_new;
		}
	}
}
