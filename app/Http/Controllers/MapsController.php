<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use GeneaLabs\LaravelMaps\Facades\Map;

/**
 * Class HomeController.
 */
class MapsController extends Controller {
    
    public function index($map)
    {
        app()->make('\App\Http\Controllers\Frontend\MapsController')->callAction($map, $parameters = []);
        $map = Map::create_map();
        return view('frontend.maps.view')->with('map', $map);
    }
    
    public function markers_single()
    {
        $config = [];
        $config['center'] = '37.4419, -122.1419';
        $config['draggableCursor'] = 'default';
        Map::initialize($config);
        
        $marker = [];
        $marker['position'] = '37.4419, -122.1419';
        Map::add_marker($marker);
    }
    
    public function markers_multiple()
    {
        $config = [];
        $config['center'] = '37.4419, -122.1419';
        $config['zoom'] = 'auto';
        $config['draggableCursor'] = 'default';
        Map::initialize($config);
        
        $marker = [];
        $marker['position'] = '37.429, -122.1519';
        $marker['infowindow_content'] = '1 - Hello World!';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        Map::add_marker($marker);
        
        $marker = [];
        $marker['position'] = '37.409, -122.1319';
        $marker['draggable'] = true;
        $marker['animation'] = 'DROP';
        Map::add_marker($marker);
        
        $marker = [];
        $marker['position'] = '37.449, -122.1419';
        $marker['onclick'] = 'alert("You just clicked me!!")';
        Map::add_marker($marker);
    }
    
    public function polyline()
    {
        $config = [];
        $config['center'] = '37.4419, -122.1419';
        $config['zoom'] = 'auto';
        Map::initialize($config);
        
        $polyline = [];
        $polyline['points'] = ['37.429, -122.1319',
            '37.429, -122.1419',
            '37.4419, -122.1219'];
        Map::add_polyline($polyline);
    }
    
    public function polygon()
    {
        $config = [];
        $config['center'] = '37.4419, -122.1419';
        $config['zoom'] = 'auto';
        Map::initialize($config);
        
        $polygon = [];
        $polygon['points'] = ['37.425, -122.1321',
            '37.4422, -122.1622',
            '37.4412, -122.1322',
            '37.425, -122.1021'];
        $polygon['strokeColor'] = '#000099';
        $polygon['fillColor'] = '#000099';
        Map::add_polygon($polygon);
    }
    
    public function drawing()
    {
        $config = [];
        $config['drawing'] = true;
        $config['drawingDefaultMode'] = 'circle';
        $config['drawingModes'] = ['circle', 'rectangle', 'polygon'];
        Map::initialize($config);
    }
    
    public function directions()
    {
        $config = [];
        $config['center'] = '37.4419, -122.1419';
        $config['zoom'] = 'auto';
        $config['directions'] = true;
        $config['directionsStart'] = 'empire state building';
        $config['directionsEnd'] = 'statue of liberty';
        $config['directionsDivID'] = 'directionsDiv';
        Map::initialize($config);
    }
    
    public function streetview()
    {
        $config = [];
        $config['center'] = '37.4419, -122.1419';
        $config['map_type'] = 'STREET';
        $config['streetViewPovHeading'] = 90;
        Map::initialize($config);
    }
    
    public function clustering()
    {
        $config = [];
        $config['center'] = '37.409, -122.1319';
        $config['zoom'] = '13';
        $config['cluster'] = true;
        $config['clusterStyles'] = [
            [
                "url"    => "https://raw.githubusercontent.com/googlemaps/js-marker-clusterer/gh-pages/images/m1.png",
                "width"  => "53",
                "height" => "53"
            ]];
        Map::initialize($config);
        
        $marker = [];
        $marker['position'] = '37.409, -122.1319';
        Map::add_marker($marker);
        
        $marker = [];
        $marker['position'] = '37.409, -122.1419';
        Map::add_marker($marker);
        
        $marker = [];
        $marker['position'] = '37.409, -122.1219';
        Map::add_marker($marker);
        
        $marker = [];
        $marker['position'] = '37.409, -122.1519';
        Map::add_marker($marker);
        
    }
    
    public function kml_layer()
    {
        $config = [];
        $config['zoom'] = 'auto';
        $config['kmlLayerURL'] = 'https://www.google.com/maps/d/kml?mid=zQsfa8t0PJbc.kXZmQVidOFfE';
        Map::initialize($config);
    }
    
}
