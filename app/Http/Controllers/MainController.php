<?php

namespace App\Http\Controllers;

use App\Includes\Classes\MyCounter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cookie;
use App\Includes\Interfaces\CounterInterface;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    protected $myCounter;

    public function __construct(CounterInterface $myCounter)
    {

        //$this->>myCounter = new myCounter();
        //$this->myCounter = resolve('AwesomeCounter');
        $this->myCounter = $myCounter;
    }

    public function mainPage()
    {

        /*$this->myCounter->increment();
        $this->myCounter->increment();
        $this->myCounter->increment();
        $this->myCounter->increment();
        $this->myCounter->decrement();
        $this->myCounter->decrement();

         $this->myCounter2 = resolve('AwesomeCounter');
        $this->myCounter3 = resolve('AwesomeCounter');

        dump($this->myCounter, $this->myCounter2, $this->myCounter3);

        return $this->myCounter->getValue();

        return myFormatDate(time());*/

        return view('welcome');
    }

    public function db(){

        $users = DB::table('users')
            ->where('name', '=', 'Yriy')
            //->get(['name', 'email']);
            ->exists();

        /*foreach ($users as $user){
            echo $user->name . ' - ' . $user->email.'<br>';
        }*/

        debug($users);
        $data = date('Y-m-d H:i:s');


//            DB::table('users')->insert([
//               'name' => 'Petro',
//               'email' => 'Pit@liom.kz',
//               'password' => '222',
//               'created_at' => "$data"
//            ]);

//            DB::table('users')
//                ->where('id', '=', '3')
//                ->update(['name' => 'Vasya',
//                    'updated_at' => "$data"
//                ]);

//            DB::table('users')
////                ->delete();

        return'DB';
    }
}

/*public function adminIndex(){

    return view('admin', ['name' => 'Uriy']);
}

public function blade(){

    return view('layouts.primary', [
        'page' => 'login'
    ]);
}

public function testPage(){
    return view('testPage');
}

public function messageOne(Request $request, $id = null){

    $allInput = $request->all();
    dump($allInput);

    $b = $request->input('b');
    $a = $request->input('a');

    dump($request->cookie('name'));
    dump(Cookie::get('name'));

    dump($request->url(), $request->fullUrl(), $request->path());

    return response()->view('messageOne', ['id' => (int)$id, 'a' => $a, 'b' => $b])
        ->cookie(
        'name', 'value', 60 * 24
    );
}

public function response1(){
    return response('<h1>404 Not found</h1>', '404')
        ->header('Content-type', 'Text/plane')
        ->header('X-Powered-By', 'Laravel 5.8')
        ->cookie('myname', 'val', 60*24);
    //return redirect('http://ya.ru/');
}

public function response2(){
    return redirect('/');
}

public function response3(){
    return redirect('http://ya.ru/');
}

public function response4(){
    return redirect()
        ->route('testPage');
}

public function response5(){
    return redirect()
        ->action('MainController@response4');
}

public function response6(){
    return [
        'name' => 'Abigail',
        'state' => 'CA'
    ]; // дял выгрузки формы в базу данных

    $string = (string) json_encode([
        'name' => 'Abigail',
        'state' => 'CA'
    ]);

    return response($string)
        ->header('Content-type', 'application/json');
}

public function response7(){
    return response()
        ->file(base_path('1.txt'));
}

public function response8(){
    return response()
        ->download(base_path('1.txt'));
}*/


