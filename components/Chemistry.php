<?php namespace AlexLit\EarthNullSchoolMaps\Components;

use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Chemistry extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Chemistry',
            'description' => 'World chemistry map',
        ];
    }

    public function defineProperties()
    {
        return [
            'overlay'                       => [
                'title'                     => 'Overlay',
                'type'                      => 'dropdown',
                'options'                   => [
                    'cosc'                  => 'Carbon Monoxide Surface Concentration',
                    'co2sc'                 => 'Carbon Dioxide Surface Concentration',
                    'so2smass'              => 'Sulfur Dioxide Surface Mass'
                ],
                'default'                   => 'cosc'
            ],
            'projection'                    => [
                'title'                     => 'Projection',
                'type'                      => 'dropdown',
                'options'                   => [
                    'atlantis'              => 'Atlantis',
                    'azimuthal_equidistant' => 'Azimuthal Equidistant',
                    'conic_equidistant'     => 'Conic Equidistant',
                    'equirectangular'       => 'Equirectangular',
                    'orthographic'          => 'Orthographic',
                    'patterson'             => 'Patterson',
                    'stereographic'         => 'Stereographic',
                    'waterman'              => 'Waterman Butterfly',
                    'winkel3'               => 'Winkel Tripel'
                ],
                'default'                   => 'orthographic'
            ],
            'mapWidth'                      => [
                'title'                     => 'Map width',
                'type'                      => 'string',
                'default'                   => '100%',
                'description'               => 'Map width in pixels or percents',
                'placeholder'               => 'map width',
                'validationPattern'         => '^[0-9]*%?$',
                'validationMessage'         => 'Map width must be integer or percent!'
            ],
            'mapHeight'                     => [
                'title'                     => 'Map height',
                'type'                      => 'string',
                'default'                   => '480',
                'description'               => 'Map height in pixels or percents',
                'placeholder'               => 'map width',
                'validationPattern'         => '^[0-9]*%?$',
                'validationMessage'         => 'Map height must be integer or percent!'
            ],
            'longitude'                     => [
                'title'                     => 'Longitude',
                'type'                      => 'string',
                'default'                   => '',
                'description'               => 'Longitude (-360 - 360). Example: -214.68',
                'placeholder'               => 'longitude',
                'validationPattern'         => '^-?[0-9]{1,3}\.?[0-9]*$',
                'validationMessage'         => 'Longitude must be decimal or integer!'
            ],
            'latitude'                      => [
                'title'                     => 'Latitude',
                'type'                      => 'string',
                'default'                   => '',
                'description'               => 'Latitude (-360 - 360). Example: -214.68',
                'placeholder'               => 'latitude',
                'validationPattern'         => '^-?[0-9]{1,3}\.?[0-9]*$',
                'validationMessage'         => 'Latitude must be decimal or integer!'
            ],
            'zoom'                          => [
                'title'                     => 'Zoom',
                'type'                      => 'string',
                'default'                   => '400',
                'description'               => 'Zoom (0-3000)',
                'placeholder'               => 'zoom',
                'validationPattern'         => '^[0-9]{1,4}$',
                'validationMessage'         => 'Zoom must be integer!'
            ],
        ];
    }

}

?>