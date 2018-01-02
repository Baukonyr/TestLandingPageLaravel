<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class GetMailController extends Controller
{
    //
    public function execute (Request $request){
      
      // Реализация Валидации
      
      //
      
      $data = $request->all();
      /*
      var_dump($data);
      var_dump(mail($data['email'], 'test', $data['text'])); */
      
       // Отправка email
      
     $result = Mail::send('site.email', ['data'=>$data], function($message) use ($data){
        
        $mail_admin = env('MAIL_ADMIN');
        
        $message->from($data['email'], $data['name']);
        $message->to($mail_admin)->subject('Question');
        
     });
      
      
      if($result){
      return redirect('/')->with('status', 'Ваше письмо будет обработано');
      }else{
        echo "Письмо не отправлено";
      } 
    }
    
}
