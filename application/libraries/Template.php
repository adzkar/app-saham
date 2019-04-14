<?php  

class Template {

        protected $CI;

        // We'll use a constructor, as you can't directly call a function
        // from a property definition.
        public function __construct()
        {
                // Assign the CodeIgniter super-object
                $this->CI =& get_instance();
        }

        public function view($data = null)
        {
                $this->CI->load->view('admin/components/menu_view',['title' => $data['title']]);
                if (!isset($data['content'])) {
                        $this->CI->load->view('admin/blank_view');
                } else {
                        $this->CI->load->view($data['content']);
                }
                $this->CI->load->view('admin/components/footer_view');
        }


}