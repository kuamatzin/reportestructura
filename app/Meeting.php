<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $guarded = [];

    protected $municipalities = [
        'Huauchinango', 
        'Zacatlán', 
        'Teziutlán', 
        'Ajalpan', 
        'San Martín Tezmelucán', 
        'Puebla 6', 
        'Tepeaca', 
        'Chalchicomula de Sesma', 
        'Cholula', 
        'Atlixco', 
        'Acatlán', 
        'Tehuacán',
        'Puebla 9',
        'Puebla 11',
        'Puebla 12'
    ];

    public function getStatusAttribute($value)
    {
        if ($value == 1) {
            return "Realizada";
        }
        return "Programada";
    }

    public function getMunicipalityAttribute($value)
    {
        return $this->municipalities[$value];
    }

    public function huauchinango($month = null)
    {
        return $month ? $this->where('municipality', 0)->whereMonth('date', $month) : $this->where('municipality', 0);
    }

    public function zacatlan($month = null)
    {
        return $month ? $this->where('municipality', 1)->whereMonth('date', $month) : $this->where('municipality', 1);
    }

    public function teziutlan($month = null)
    {
        return $month ? $this->where('municipality', 2)->whereMonth('date', $month) : $this->where('municipality', 2);
    }

    public function ajalpan($month = null)
    {
        return $month ? $this->where('municipality', 3)->whereMonth('date', $month) : $this->where('municipality', 3);
    }

    public function sanmartin($month = null)
    {
        return $month ? $this->where('municipality', 4)->whereMonth('date', $month) : $this->where('municipality', 4);
    }

    public function puebla_seis($month = null)
    {
        return $month ? $this->where('municipality', 5)->whereMonth('date', $month) : $this->where('municipality', 5);
    }

    public function tepeaca($month = null)
    {
        return $month ? $this->where('municipality', 6)->whereMonth('date', $month) : $this->where('municipality', 6);
    }

    public function chalchicomula($month = null)
    {
        return $month ? $this->where('municipality', 7)->whereMonth('date', $month) : $this->where('municipality', 7);
    }

    public function cholula($month = null)
    {
        return $month ? $this->where('municipality', 8)->whereMonth('date', $month) : $this->where('municipality', 8);
    }

    public function atlixco($month = null)
    {
        return $month ? $this->where('municipality', 9)->whereMonth('date', $month) : $this->where('municipality', 9);
    }

    public function acatlan($month = null)
    {
        return $month ? $this->where('municipality', 10)->whereMonth('date', $month) : $this->where('municipality', 10);
    }

    public function tehuacan($month = null)
    {
        return $month ? $this->where('municipality', 11)->whereMonth('date', $month) : $this->where('municipality', 11);
    }

    public function puebla_nueve($month = null)
    {
        return $month ? $this->where('municipality', 12)->whereMonth('date', $month) : $this->where('municipality', 12);
    }

    public function puebla_once($month = null)
    {
        return $month ? $this->where('municipality', 13)->whereMonth('date', $month) : $this->where('municipality', 13);
    }

    public function puebla_doce($month = null)
    {
        return $month ? $this->where('municipality', 14)->whereMonth('date', $month) : $this->where('municipality', 14);
    }

}
