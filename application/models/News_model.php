<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    public function get_published_news()
        {
            $this->db->where('status', 'published');
            $this->db->order_by('published_at', 'DESC');
            return $this->db->get('news')->result();
        }

    public function get_by_slug($slug)
        {
            $this->db->where('slug', $slug);
            $this->db->where('status', 'published');
            return $this->db->get('news')->row();
        }

    public function get_all_news()
        {
            $this->db->order_by('created_at', 'DESC');
            return $this->db->get('news')->result();
        }

    public function get_by_id($id)
        {
            $this->db->where('id', $id);
            return $this->db->get('news')->row();
        }

    public function insert($data)
        {
            $this->db->insert('news', $data);
        }

    public function update($id, $data)
        {
            $this->db->where('id', $id);
            $this->db->update('news', $data);
        }

    public function delete($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('news');
        }
    public function get_published()
        {
            return $this->get_published_news();
        }
}