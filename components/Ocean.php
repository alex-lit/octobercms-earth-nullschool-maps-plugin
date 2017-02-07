<?php namespace AlexLit\EarthNullSchoolMaps\Components;

use Lang;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Ocean extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Ocean',
            'description' => 'World ocean map',
        ];
    }

    public function defineProperties()
    {
        return [
            'animate'                                  => [
                'title'                                => 'Animate',
                'type'                                 => 'dropdown',
                'options'                              => [
                    'surface/currents'                 => 'Ocean Currents',
                    'primary/waves'                    => 'Peak Wave Period'
                ],
                'default'                              => 'primary/waves'
            ],
            'overlay'                                  => [
                'title'                                => 'Overlay',
                'type'                                 => 'dropdown',
                'options'                              => [
                    ''                                 => 'Ocean Currents',
                    'overlay=primary_waves'            => 'Peak Wave Period',
                    'overlay=sea_surface_temp'         => 'Sea Surface Temperature',
                    'overlay=sea_surface_temp_anomaly' => 'Sea Surface Temperature Anomaly',
                    'overlay=significant_wave_height'  => 'Significant Wave Height',
                    'overlay=off'                      => 'None'
                ],
                'default'                              => 'overlay=significant_wave_height'
            ],
            'projection'                               => [
                'title'                                => 'Projection',
                'type'                                 => 'dropdown',
                'options'                              => [
                    'atlantis'                         => 'Atlantis',
                    'azimuthal_equidistant'            => 'Azimuthal Equidistant',
                    'conic_equidistant'                => 'Conic Equidistant',
                    'equirectangular'                  => 'Equirectangular',
                    'orthographic'                     => 'Orthographic',
                    'patterson'                        => 'Patterson',
                    'stereographic'                    => 'Stereographic',
                    'waterman'                         => 'Waterman Butterfly',
                    'winkel3'                          => 'Winkel Tripel'
                ],
                'default'                              => 'orthographic'
            ],
            'mapWidth'                                 => [
                'title'                                => 'Map width',
                'type'                                 => 'string',
                'default'                              => '100%',
                'description'                          => 'Map width in pixels or percents',
                'placeholder'                          => 'map width',
                'validationPattern'                    => '^[0-9]*%?$',
                'validationMessage'                    => 'Map width must be integer or percent!'
            ],
            'mapHeight'                                => [
                'title'                                => 'Map height',
                'type'                                 => 'string',
                'default'                              => '480',
                'description'                          => 'Map height in pixels or percents',
                'placeholder'                          => 'map width',
                'validationPattern'                    => '^[0-9]*%?$',
                'validationMessage'                    => 'Map height must be integer or percent!'
            ],
            'longitude'                                => [
                'title'                                => 'Longitude',
                'type'                                 => 'string',
                'default'                              => '',
                'description'                          => 'Longitude (-360 - 360). Example: -214.68',
                'placeholder'                          => 'longitude',
                'validationPattern'                    => '^-?[0-9]{1,3}\.?[0-9]*$',
                'validationMessage'                    => 'Longitude must be decimal or integer!'
            ],
            'latitude'                                 => [
                'title'                                => 'Latitude',
                'type'                                 => 'string',
                'default'                              => '',
                'description'                          => 'Latitude (-360 - 360). Example: -214.68',
                'placeholder'                          => 'latitude',
                'validationPattern'                    => '^-?[0-9]{1,3}\.?[0-9]*$',
                'validationMessage'                    => 'Latitude must be decimal or integer!'
            ],
            'zoom'                                     => [
                'title'                                => 'Zoom',
                'type'                                 => 'string',
                'default'                              => '400',
                'description'                          => 'Zoom (0-3000)',
                'placeholder'                          => 'zoom',
                'validationPattern'                    => '^[0-9]{1,4}$',
                'validationMessage'                    => 'Zoom must be integer!'
            ],
        ];
    }

}

?>