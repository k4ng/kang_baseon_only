<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	/***
	* Helper KANG
	* Author : Cahya Dyazin
	*/

	/**
	 * @param  string
	 * @return string filter
	 */
	function noinject($data)
	{
		$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
		return $filter;
	}

	/**
	 * @param  nama file, bagian (back or front)
	 * @param  Simpel base url
	 * @return path
	 */
	function kbase($file = null, $display = "back")
	{
		if($file != null)
		{
			if(trim($display) == "back")
			{
				$path = base_url("assets/styles/admin/".$file);
			}
			else
			{
				$path = base_url("assets/styles/admin/".$file);
			}
			echo $path;
			return $path;
		}
	}

	/**
	 * fungsi ini merupakan pengembangan dari fungsi base_url()
	 * @param  string $path merupakan string yang menunjukan path asset mana yang akan di tuju.
	 * @return [type]       return pada fungsi ini berupa string path
	 */
	function asset_path( $path = "style_back" ){
		switch ($path) {
			case 'configs':
				$a = base_url("assets/configs");
				return $a;
				break;
			
			case 'frameworks':
				$a = base_url("assets/frameworks");
				return $a;
				break;
			
			case 'modules':
				$a = base_url("assets/modules");
				return $a;
				break;
			
			case 'style_front':
				$a = base_url("assets/styles/front");
				return $a;
				break;
			
			default:
				$a = base_url("assets/styles/admin");
				return $a;
				break;
		}
	}

	/**
	 * @desc memvalidasi cache
	 */
	function cachevalidate(){
		$ts = gmdate("D, d M Y H:i:s") . " GMT";
		header("Expires: $ts");
		header("Last-Modified: $ts");
		header("Pragma: no-cache");
		header("Cache-Control: no-cache, must-revalidate");
	}

	/**
	 * @desc mengaktifkan cache
	 */
	function cacheOn(){
		$seconds_to_cache = 3600;
		$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
		header("Expires: $ts");
		header("Pragma: cache");
		header("Cache-Control: max-age=$seconds_to_cache");
	}

	