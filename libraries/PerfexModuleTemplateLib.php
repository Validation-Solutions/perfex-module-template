<?php

class PerfexModuleTemplateLib
{

    private $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('perfex-module-template/your_model');
    }

}