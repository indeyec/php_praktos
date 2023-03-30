<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Room;
use Model\Subdivision;
use Src\Validator\Validator;


class Site
{
    public function index(Request $request): string
    {
       $posts = Post::where('id', $request->id)->get();
       return (new View())->render('site.post', ['posts' => $posts]);
    }

    
    public function signup(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'FirstName' => ['required'],
               'LastName' => ['required'],
               'MiddleName' => ['required'],
               'login' => ['required', 'unique:users,login'],
               'password' => ['required']
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.signup',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (User::create($request->all())) {
               app()->route->redirect('/hello');
           }
       }
       return new View('site.signup');
    }
    
    public function room_add(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'Name' => ['required'],
               'Vid' => ['required'],
               'Subdivision' => ['required']
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.signup',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (Room::create($request->all())) {
               app()->route->redirect('/room');
           }
       }
       return new View('site.room_add');
    }


    public function subdivision_add(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'Name' => ['required'],
               'Vid' => ['required'],
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.signup',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (Room::create($request->all())) {
               app()->route->redirect('/subdivision');
           }
       }
       return new View('site.subdivision_add');
    }

 
    

    public function login(Request $request): string
    {
       //Если просто обращение к странице, то отобразить форму
       if ($request->method === 'GET') {
           return new View('site.login');
       }
       //Если удалось аутентифицировать пользователя, то редирект
       if (Auth::attempt($request->all())) {
           app()->route->redirect('/profile');
       }
       //Если аутентификация не удалась, то сообщение об ошибке
       return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }
    
    public function logout(): void
    {
       Auth::logout();
       app()->route->redirect('/hello');
    }
    
    public function profile(Request $request): string
   
   {
    // $users = User::where('login', $request->login ?? 0)->get();
    $users = user::all();
       return new View('site.profile', ['users'=>$users]);
   }
    public function hello(): string
   {
       return new View('site.hello', []);
   }
   public function room(): string
   {
    $rooms = room::all();
       return new View('site.room', ['rooms'=>$rooms]);
   }
   public function subdivision(): string
   
   {
    $subdivisions = subdivision::all();
       return new View('site.subdivision', ['subdivisions'=>$subdivisions]);
   }


   public function add_user(Request $request): string
   {
      if ($request->method === 'POST') {
   
          $validator = new Validator($request->all(), [
              'FirstName' => ['required'],
              'LastName' => ['required'],
              'MiddleName' => ['required'],
              'login' => ['required', 'unique:users,login'],
              'password' => ['required']
          ], [
              'required' => 'Поле :field пусто',
              'unique' => 'Поле :field должно быть уникально'
          ]);
   
          if($validator->fails()){
              return new View('site.add_user',
                  ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
          }
   
          if (User::create($request->all())) {
              app()->route->redirect('/profile');
          }
      }
      return new View('site.add_user');
   }
}


