<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;

class MapsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('charts');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $config['center'] = 'Sydney Airport,Sydney';
      $config['zoom'] = '2';
      $config['map_height'] = '500px';
    //  $config['geocodeCaching'] = true;

      $gmap = new GMaps();
      $gmap->initialize($config);

      $marker['position'] = 'Sydney Airport,Sydney';
      $marker['infowindow_content'] = 'Sydney Airport,Sydney';
      $gmap->add_marker($marker);

      $marker['position'] = 'Kogarah Golf Club,Sydney';
      $marker['infowindow_content'] = 'Kogarah Golf Club,Sydney';
      $gmap->add_marker($marker);

      /*$marker['position'] = 'The Lakes Golf Club,Sydney';
      $marker['infowindow_content'] = 'The Lakes Golf Club,Sydney';
      $gmap->add_marker($marker);*/

      $map = $gmap->create_map();
      return view('maps',compact('map'));
    }

}
