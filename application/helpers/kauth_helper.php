<?php

	/**
	 * Merupakan sebuah fungsi untuk mengambil data session
	 * @param  string $param Nama field session yang akan di ambil, misal seperti first_name dan lain-lain. Nama-nama param bisi di lihat pada field di tabel kang_sys_users.
	 * @return String   sebuah data session.
	 */
	function ud($param = '')
	{
		$CI =& get_instance();

		if(trim($param) != '')
		{
			if($CI->session->userdata('isLogin') == TRUE)
			{
				$ud = $CI->session->userdata('data_user');
				$ud_prefix = "su_";
				$ud_prefix_param = $ud_prefix.$param;

				return $ud->$ud_prefix_param;
			}
			else
			{
				return "Not session!";
			}
		}
		else
		{
			return "Parameter null!";
		}
	}