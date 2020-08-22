<?php

class show_data extends controller{


    public function show(){

     $m_show = $this->model('m_show_data');

     $arr = $m_show -> show();

     $v_show = $this->view('v_show_data');
     $v_show -> show($arr);

    }


}