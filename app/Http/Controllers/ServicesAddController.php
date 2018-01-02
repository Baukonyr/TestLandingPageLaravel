<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;


class ServicesAddController extends Controller
{
    //
    public function execute(Request $request){
      
      
      // Валидация
      
      //Добавляем сервис 
      if($request->isMethod('post')){
        
        $data = $request->except('_token');
        
          if($request->hasFile('icon')){
            
            $file = $request->file('icon');
            
            $data['icon'] = $file->getClientOriginalName();
            
            $file->move(public_path() . '/assets/img', $data['icon']);
          }
          
          $service = new Service();
          
          $service->fill($data);
          
          if($service->save()){
            return redirect('admin')->with('status', 'сервис добавлен');
          }
          
          
      }
      
      if(view()->exists('admin.service_add')){
            
            $data = [
            
              'title' => 'Добавить сервис в лендинг'
            
            ];
            
            return view('admin.service_add', $data);
            
          }else{
            abort(404);
          }
    }

}
