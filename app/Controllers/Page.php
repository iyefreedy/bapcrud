<?php

namespace App\Controllers;

class Page extends BaseController
{
    // public function equipmentlist()
    // {
    //     $data = [
    //         'equipmentlist' => $this->equipment-getEquipment()
    //     ]
    //     dd($equipment)


    //     return view('Page/katalog');
    // }

    public function news()
    {
        return view ('Pages/news');
    }

    public function about()
    {
        return view ('Pages/about');
    }

    public function service()
    {
        return view ('Pages/service');
    }

    public function testimonial()
    {
        return view ('Pages/ceo_message');
    }

    public function career()
    {
        return view ('Pages/career');
    }

    public function policy()
    {
        return view ('Pages/policy');
    }


}
