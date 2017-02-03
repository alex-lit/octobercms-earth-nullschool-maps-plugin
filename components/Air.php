<?php namespace AlexLit\EarthNullSchoolMaps\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Air extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Air',
            'description' => 'Adds air map',
        ];
    }

    public function defineProperties()
    {
        return [
            'height'                                   => [
                'title'                                => 'Height',
                'type'                                 => 'dropdown',
                'options'                              => [
                    'surface/level'                    => 'Surface',
                    'isobaric/1000hPa'                 => '1000hPa',
                    'isobaric/850hPa'                  => '850hPa',
                    'isobaric/700hPa'                  => '700hPa',
                    'isobaric/500hPa'                  => '500hPa',
                    'isobaric/250hPa'                  => '250hPa',
                    'isobaric/70hPa'                   => '70hPa',
                    'isobaric/10hPa'                   => '10hPa'
                ],
                'default'                              => 'surface/level'
            ],
            'overlay'                                  => [
                'title'                                => 'Overlay',
                'type'                                 => 'dropdown',
                'options'                              => [
                    ''                                 => 'Wind',
                    'overlay=temp'                     => 'Temperature',
                    'overlay=relative_humidity'        => 'Relative Humidity',
                    '000overlay=wind_power_density00'  => 'Instantaneous Wind Power Density',
                    'overlay=precip_3hr'               => '3-hour Precipitation Accumulation',
                    'overlay=cape'                     => 'Convective Available Potential Energy from Surface',
                    'overlay=total_precipitable_water' => 'Total Precipitable Water',
                    'overlay=total_cloud_water'        => 'Total Cloud Water',
                    'overlay=mean_sea_level_pressure'  => 'Mean Sea Level Pressure',
                    'overlay=misery_index'             => 'Misery Index',
                    'overlay=off'                      => 'None'
                ],
                'default'                              => 'surface/level'
            ],
        ];
    }

}

?>