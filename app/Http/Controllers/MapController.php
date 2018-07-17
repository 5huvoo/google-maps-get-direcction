<?php

namespace App\Http\Controllers;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;

class MapController extends Controller
{

  public function map()
      {
          $config['center'] = 'Shukrabad , Dhaka, Bangladesh';
          $config['zoom'] = '14';
          $config['map_height'] = '500px';
          $config['scrollwheel']=false;

          $gmap = new GMaps();
          $gmap->initialize($config);

          $map = $gmap->create_map();
          return view('map',compact('map'));
      }


}
