<?php
namespace App\Entity;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: dlj930
 * Date: 2018/7/27
 * Time: 11:07
 */
class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id';
    public $timestamps = true;
}