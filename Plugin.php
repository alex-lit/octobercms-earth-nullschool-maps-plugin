<?php namespace AlexLit\EarthNullSchoolMaps;

use Lang;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Earth Null School Maps',
            'description' => 'Global map of wind, weather, and ocean conditions',
            'author'      => 'Alexey Litovchenko',
            'icon'        => 'icon-globe',
            'homepage'    => 'https://web2easy.ru'
        ];
    }

    public function registerComponents()
    {
        return [
           '\AlexLit\EarthNullSchoolMaps\Components\Air'       => 'airMap',
           '\AlexLit\EarthNullSchoolMaps\Components\Ocean'     => 'oceanMap',
           '\AlexLit\EarthNullSchoolMaps\Components\Chemistry' => 'chemistryMap',
        ];
    }
}