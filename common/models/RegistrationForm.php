<?php
/**
 * Created by PhpStorm.
 * User: NamLong
 * Date: 7/26/2016
 * Time: 8:44 AM
 */
namespace common\models;
use yii;
use yii\base\Model;
class RegistrationForm extends Model{
    public $username;
    public $password;
    public $email;
    public $subscription;
    public $photos;

    public function attributeLabels()
    {
        return[
            'username' => 'Username',
            'password'=>'Password',
            'email'=>'Email',
        'subscription'=>'Subscription',
        'photos'=>'Photos',
        ];
    }
}