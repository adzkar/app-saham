<?php  

class Validation {

        protected $CI;

        // We'll use a constructor, as you can't directly call a function
        // from a property definition.
        public function __construct()
        {
                // Assign the CodeIgniter super-object
                $this->CI =& get_instance();
        }

        public function wrong_validate($data = null)
        {
            if (!$this->CI->session->userdata($data['session']))
                redirect($data['url']);
        }

        public function true_validate($data = null)
        {
            if ($this->CI->session->userdata($data['session']))
                redirect($data['url']);
        }

}