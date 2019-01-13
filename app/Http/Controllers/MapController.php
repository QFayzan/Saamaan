<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    //
    public function show(){
      
        $this->load->library('googlemaps');
    
        $config = array();
        $config['center'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
	var mapCentre = map.getCenter();
	marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
	});
}
centreGot = true;';
        $this->googlemaps->initialize($config);

// set up the marker ready for positioning
// once we know the users location
        $marker = array();
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
    
        $this->load->view('view_file', $data);
    return view('maptest');
    }
}
