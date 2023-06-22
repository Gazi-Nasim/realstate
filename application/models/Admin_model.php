<?php
class Admin_model extends CI_Model
{
    public function login($mail, $pass)
    {
        return $this->db->where('email', $mail)
            ->where('password', $pass)
            ->get('admin')->row();
    }

    public function getslid()
    {

        $data = $this->db->get('proprty_list');
        return $data->result();
    }
    public function all_pordts()
    {

        $data = $this->db->get('products');
        return $data->result();
    }
    public function list_contact()
    {

        $data = $this->db->get('contact_info');
        return $data->result();
    }

    public function delProp($d)
    {

        $this->db->where('id', $d)->delete('proprty_list');
    }

    public function editProp($d)
    {

        $data = $this->db->where('id', $d)->get('proprty_list');
        return $data->row();
    }



    public function save_slid($perps, $photo, $type, $price, $hdline, $adrs, $size, $bed, $bath)
    {
        $in_data = [
            'id' => null,
            'perps' => $perps,
            'picture' => $photo,
            'type' => $type,
            'price' => $price,
            'headline' => $hdline,
            'address' => $adrs,
            'size' => $size,
            'bed' => $bed,
            'bath' => $bath
        ];
        $this->db->insert('proprty_list', $in_data);
    }

    public function update_slid($in_data, $id)
    {

        $this->db->where('id', $id)->update('proprty_list', $in_data);
    }

    public function save_cotact($name, $mail, $sub, $msg)
    {
        $con_data = [
            'id' => null,
            'Name' => $name,
            'Email' => $mail,
            'Subject' => $sub,
            'Message' => $msg,

        ];
        $this->db->insert('contact_info', $con_data);
    }

    public function get_frnds_api()
    {
        $data = $this->db->get('admin');
        return $data->result();
    }

    public function get_frnds($start, $limit)
    {
        $data = $this->db->limit($start, $limit)->get('admin');
        return $data->result();
    }

    public function get_frnds_row()
    {

        $data = $this->db->count_all('admin');
        return $data;
    }
}
