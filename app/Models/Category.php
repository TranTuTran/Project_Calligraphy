<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    const STATUS_SHOW = 1;
    const STATUS_HIDE = 2;

    public function getStatusName()
    {
        $status = [
            self::STATUS_SHOW => 'Show', //self::STATUS_SHOW được ánh xạ tới một tên trạng thái là'Show'
            self::STATUS_HIDE => 'Hide', 
        ];
        return isset($status[$this->status])? $status[$this->status] : 'Unknown';
    }
    //self::STATUS_SHOW và self::STATUS_HIDE là các hằng số được định nghĩa trước trong class
    //Sử dụng isset($status[$this->status]) để kiểm tra xem giá trị $this->status có tồn tại trong mảng $status hay không.
    //Nếu có, trả về giá trị tương ứng trong mảng.
    //Nếu không, trả về chuỗi 'Unknown'

    public function hideCategory()
    {
        $this->status = self::STATUS_HIDE;
        $this->save();
    }

    public function showCategory()
    {
        $this->status = self::STATUS_SHOW;
        $this->save();
    }

    public function isShow()
    {
        return $this->status == self::STATUS_SHOW;
    }

}
