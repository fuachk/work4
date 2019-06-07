<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class msg extends Model
{
public function addPost(){
        $msg=new Msg();
        $msg->title=$_POST['title'];
        $msg->author=$_POST['author'];
        $msg->content=$_POST['content'];
        if($msg->save()){
            return redirect('msg/index');
        }else{
            echo '添加失败';
            exit();
        }
}
