<?php


namespace ModelManagerModule;


use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = "configs";
    protected $fillable = [
        'config_key',
        'config_type',
        'config_value',
    ];
}