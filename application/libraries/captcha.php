<?php

Class Captcha {

    function Captcha() {
        $this->CI = & get_instance();
    }

    function setChaptcha() {
        $captcha_path = "http://localhost/kphat/captcha/";
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => $captcha_path,
            'expiration' => 3600, // satu jam
            'img_width' => '140',
            'word' => random_string('numeric', 6),
        );
        $cap = create_captcha($vals);
        $capdb = array(
            'captcha_id' => '',
            'captcha_time' => $cap['time'],
            'ip_address' => $this->SA->input->ip_address(),
            'word' => $cap['word']
        );
        $query = $this->SA->db->insert_string('captcha', $capdb);
        $this->SA->db->query($query);
        $data['cap'] = $cap;
        return $data;
    }

}

?>
