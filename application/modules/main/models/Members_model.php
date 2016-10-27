<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Members_model extends CI_model
    {
		function __construct()
		{
			parent::__construct();
			if (!$this->ion_auth->logged_in()) { 
			redirect('auth/index/login', 'refresh'); 
			} else {
				if (!$this->ion_auth->in_group("members")){
					redirect('auth/index/login', 'refresh'); 
				}
			}
		}
		
        function orders_get($param, $param2){
            $this->db->select("
				orders.id_sorder, orders.kode_order, orders.theme_id, orders.user_id, orders.kupon, orders.time_order, orders.status_order,
				kupon.kode_kupon, kupon.nilai_kupon, 
				users.first_name, users.last_name,
				theme.nama_theme, theme.slug_theme, theme.currency_theme, theme.price_theme,
			", FALSE);
            $this->db->from("orders");
			$this->db->join("kupon","kupon.kode_kupon=orders.kupon","LEFT");
			$this->db->join("users","users.id=orders.user_id","LEFT");
			$this->db->join("theme","theme.id_theme=orders.theme_id","LEFT");
			$this->db->where("orders.status_order", $param);
			$this->db->where("orders.user_id", $param2);
            $this->db->order_by("id_order","DESC");
            return $this->db->get();
        }
		
		function send_confirm($post){
			$data=array(
				"order_kode" => $post["order_kode"],
				"ke_bank" => $post["ke_bank"],
				"nama_pengirim" => $post["nama_pengirim"],
				"nama_bank" => $post["nama_bank"],
				"akun_bank" => $post["akun_bank"],
				"keterangan" => $post["keterangan"],
			);
			$this->db->insert("payment", $data);
			
			$this->db->where("kode_order", $post["order_kode"]);
			$this->db->update("orders", array(
				"status_order" => "payment"
			));
			
			return true;
		}
     
    }