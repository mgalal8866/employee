<?php

namespace App\RepositoryInterface;

interface  PositionRepositoryInterface{
    public function getallposition();
    public function Createposition($requset);
    public function DeletePosition($id);
    public function Edit($requset);
}

