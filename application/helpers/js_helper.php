<?php

	/***
	* Helper Javascript
	* Author : Cahya Dyazin
	*/


	/**
	 * Sweet alert
	 * @param  Param berupa array
	 * @return javascript
	 */
	function swal($param = array())
	{
		$swal = "
			<script>
				document.addEventListener('DOMContentLoaded', function() { 
					swal('{$param['title']}', '{$param['notif']}', '{$param['tipe']}');
				});
			</script>
		";
		return $swal;
	}