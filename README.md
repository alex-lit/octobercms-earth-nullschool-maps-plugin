# OctoberCMS EarthNull School Maps plugin

Global map of wind, weather, and ocean conditions.

See current wind, weather, ocean, and pollution conditions, as forecast by supercomputers, on an interactive animated map. Updated every three hours.

This plugin adds integration with [Earth Null School maps](https://earth.nullschool.net) service.

## Available components:

- Air
- Chemistry
- Ocean
- Particulates

## Available languages:

- English


# Quickstart guide:

1. Go to the 'System' tab in October, and install the plugin using the AlexLit.EarthNullSchoolMaps code.
2. After installation has finished a new component will appear in under Octobers 'CMS > Components' tab. You have the option to add this to only one page, or add it to a layout making it appear on all pages that use the layout. Whichever you chose the instructions are the same.
3. Open the your selected page/layout, and add the component to it.
4. Add component code anywhere on the page/layout.
5. That's it. You now have a working EarthNullSchoolMaps on your page. It has no outside dependencies, so you don't have to worry about anything else.

## Components:

### "Air" - World air map

#### Code:

```twig
{% component 'airMap' %}
```

### "Chemistry" - World chemistry map

#### Code:

```twig
{% component 'chemistryMap' %}
```

### "Ocean" - World ocean map

#### Code:

```twig
{% component 'oceanMap' %}
```

### "Particulates" - World particulates map

#### Code:

```twig
{% component 'particulatesMap' %}
```

## Options
- **Height** - atmospheric pressure corresponds roughly to altitude several pressure layers are meteorologically interesting they show data assuming the earth is completely smooth note: 1 hectopascal (hPa) = 1 millibar (mb)
    - **Surface** - the "Surface" layer represents conditions at ground or water level this layer follows the contours of mountains, valleys, etc.
    - **1000hPa** ~100 m, near sea level conditions
    - **850hPa** ~1,500 m, planetary boundary, low
    - **700hPa** ~3,500 m, planetary boundary, high
    - **500hPa** ~5,000 m, vorticity
    - **250hPa** ~10,500 m, jet stream
    - **70hPa** ~17,500 m, stratosphere
    - **10hPa** ~26,500 m, even more stratosphere
- **Overlay** - show another dimension of data using color some overlays are valid at a specific height while others are valid for the entire thickness of the atmosphere
    - **Wind** - wind speed at specified height
    - **Temp** - temperature at specified height
    - **RH** - relative humidity at specified height
    - **WPD** - Instantaneous Wind Power Density. Measure of power available in the wind: ½ρv3, where ρ is air density and v is wind velocity
    - **TPW** - Total Precipitable Water. Total amount of water in a column of air stretching from ground to space
    - **TCW** - Total Cloud Water. Total amount of water in clouds in a column of air from ground to space
    - **3HPA** - 3-hour Precipitation Accumulation. Amount of precipitation over the next three hours
    - **CAPE** - Convective Available Potential Energy from Surface. Indicates the buoyancy of air, a measure of atmospheric instability and predictor of severe weather
    - **MSLP** - Mean Sea Level Pressure. Air pressure reduced to sea level
    - **MI** - Misery Index. Perceived air temperature as combination of heat index and wind chill
    - **SST** - Sea Surface Temperature. Temperature of the ocean surface
    - **SSTA** - Sea Surface Temperature Anomaly. Difference in ocean temperature from daily average during years 1981-2011
    - **HTSGW** - Significant Wave Height. Roughly equal to mean wave height as estimated by a "trained observer"
    - **COsc** - Carbon Monoxide Surface Concentration. The fraction of carbon monoxide present in air at the earth's surface
    - **CO<sub>2</sub>sc** - Carbon Dioxide Surface Concentration. The fraction of carbon dioxide present in air at the earth's surface
    - **SO<sub>2</sub>sm** - Sulfur Dioxide Surface Mass. Amount of sulfur dioxide in the air near the earth's surface
    - **DUex** - Dust Extinction. The aerosol optical thickness (AOT) of light at 550 nm due to dust
    - **SO<sub>4</sub>ex** - Sulfate Extinction. The aerosol optical thickness (AOT) of light at 550 nm due to sulfate
- **Projection**
    - **Atlantis**
    - **Azimuthal Equidistant**
    - **Conic Equidistant**
    - **Equirectangular**
    - **Orthographic**
    - **Patterson**
    - **Stereographic**
    - **Waterman Butterfly**
    - **Winkel Tripel**
- **Map width** - Map width in pixels or percents
- **Map height** - Map height in pixels or percents
- **Longitude** - Longitude (-360 - 360). Example: -214.68
- **Latitude** - Latitude (-360 - 360). Example: 14.2
- **Zoom** - Zoom (0-3000)

## FAQ

- How do I find the correct longitude, latitude and zoom?
    - Go to [Earth Null School maps](https://earth.nullschool.net) service, select your map area and notice address bar:
    ![banner](https://raw.githubusercontent.com/web2easy/OctoberCMS-Earth-NullSchool-Maps-Plugin/master/assets/images/documentation-1.png)