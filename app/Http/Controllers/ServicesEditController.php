<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;


class ServicesEditController extends Controller
{
    //
    public function execute($id, Service $service, Request $request) {
      
      // Удаления сервисов
      if($request->isMethod('delete')){
        
        
        // Доработать
        $service = Service::find($id);
        $service->delete();
        
        return redirect('admin')->with('status', 'Сервис Удален');
        
        
      }
      
      if($request->isMethod('post')){
        
        $data = $request->except('_token');
        $service = Service::find($id);
        $service->fill($data);
        
        //dd($service);
        //$s = $service->update();
        //dd($s);
        
        if($service->update()){
         return redirect('admin')->with('status', 'сервис обновлен');
        }  
      }
      
      
     
      
       if(view()->exists('admin.service_edit')){
        
        
        $service = Service::find($id);

        $data = [
        
        'title' => 'Редактирования сервиса' . '-' . $service['name'],
        'services' => $service
        
        ];
        
        return view('admin.service_edit', $data);
        
        
      }else{
        abort(404);
      } 
    }
}
