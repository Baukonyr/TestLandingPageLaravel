<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    //
    public function execute(Request $request){
      
      if(view()->exists('admin.service')){
        
        $services = Service::all();
        
        $data = [
        
          'title' => 'Редактор сервисов',
          'services' => $services
        
        ];
        
        return view('admin.service', $data);
        
      }else{
        abort('404');
      }
      
      
      
      
    }
}
