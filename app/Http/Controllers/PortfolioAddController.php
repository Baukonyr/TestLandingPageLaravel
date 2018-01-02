<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Portfolio;

class PortfolioAddController extends Controller
{
    //
    public function execute(Request $request){
      
      // ДОбавить валидацию.
      
      //Добавляем проект в таблицу
      if($request->isMethod('post')){
        $data = $request->except('_token');
        
        if($request->hasFile('images')){
          $file = $request->file('images');
          
          $data['images'] = $file->getClientOriginalName();
          
          $file->move(public_path() . '/assets/img', $data['images']);
        }
        
        
        $portfolio = new Portfolio();
        
        $portfolio->fill($data);
        
        if($portfolio->save()) {
          return redirect('admin')->with('status', 'проект добавлен');
        }
      }
      
      // Добавления записей портфолио
      if(view()->exists('admin.portfolio.portfolio_add')){
        
        $data = [
        
          'title' => 'Добавить проекты в портфолио'
        
        ];
        
        return view('admin.portfolio.portfolio_add', $data);
      }else{
        abort(404);
      }
    }
}
