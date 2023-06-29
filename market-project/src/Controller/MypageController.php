<?php

namespace Art\Controller;

class MypageController extends MasterController
{
    public function myPage()
    {
        $this->view("mypage", []);
    }
}