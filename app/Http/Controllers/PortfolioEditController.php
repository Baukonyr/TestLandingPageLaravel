<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Portfolio;


class PortfolioEditController extends Controller
{
    //
    public function execute(Portfolio $portfolio, Request $request){
      
      // удаления портфолио
      if($request->isMethod('delete')){
        
        
        $portfolio->delete();
        return redirect('admin')->with('status', 'Проект Удален');
      }
      
      
      if($request->isMethod('post')) {
        
        $data = $request->except('_token');
        
        // Валидация данных
        
        if($request->file('images')){
          $file = $request->file('images');
        
          $file->move(public_puch() . '/assets/img', $file->getClientOriginalName());
          $data['images'] = $file->getClientOriginalName();
        }else{
          $data['images'] = $data['old_images'];
          
        }
        unset($data['old_images']);
        
        $portfolio->fill($data);
        dd($portfolio);
        /* if($portfolio->update()){
          return redirect('admin')->with('status', 'проект обновлен');
        } */
        
      }
        
      
      $old = $portfolio->toArray();
      if(view()->exists('admin.portfolio.portfolio_edit')){
        
        $data = [
        
          'title' => 'Редактирования проекта - ' . $old['name'],
          'data' => $old
        
        ];
      }
      return view('admin.portfolio.portfolio_edit', $data);
    } 
}
