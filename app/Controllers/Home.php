<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'View Map GIS | Kab. Semarang'
        ];
        return view('index', $data);
    }
    public function marker()
    {
        $data = [
            'title' => 'Marker Map GIS | Kab. Semarang'
        ];
        return view('marker', $data);
    }
    public function polyline()
    {
        $data = [
            'title' => 'Polyline Map GIS | Kab. Semarang'
        ];
        return view('polyline', $data);
    }
    public function rute()
    {
        $data = [
            'title' => 'Rute Map GIS | Kab. Semarang'
        ];
        return view('rute', $data);
    }
    public function polygon()
    {
        $data = [
            'title' => 'Polygon Map GIS | Kab. Semarang'
        ];
        return view('polygon', $data);
    }
}