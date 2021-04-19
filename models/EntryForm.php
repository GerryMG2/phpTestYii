<?php

namespace app\models;

use yii;
use yii\base\Model;

class EntryForm extends Model 
{
    public $name;
    public $email;
    public $password;

    public function rules(){
        return [
            [['name', 'name','password'],'required'],
            ['email', 'email']
        ];
    }
}
