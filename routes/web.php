<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/model', function () {
    //$products = \App\Models\Product::all(); //select * from products
    //return $products;
    //#########################################
    //Active Record
    // $user = new \App\User();
    // $user->name = 'Usuario Teste';
    // $user->email = 'teste@teste.com.br';
    // $user->password = bcrypt('12345678');

    // //return $user->save();
    // return \App\User::all();
    //fim Actvie Record
    //#########################################
    // $user = new \App\User();
    //$user = \App\User::find(2);
    // $user->name = 'UsuTeste 02';
    //$user->email = 'teste@teste.com.br';
    //$user->password = bcrypt('12345678');
    //$user->save();
    //return
    //\App\User::all(); - retorna todos os usuarios
    //\App\User::find(2) - retorna o usuario com base no id
    //\App\User::where->('name','um nome aqui')->"get||fisrt"(); //select * from users where name = 'um nome aqui'
    //\App\User::paginate(10) - Paginar dados


    //Mass Assignmemt - Atribuição em Massa
    // $user = \App\User::create([
    //     'name' => 'JLelis',
    //     'email' => 'email01@teste.com',
    //     'password' => bcrypt('123456'),
    // ]);
    // dd($user);
    //Mass Update
    // $user = \App\User::find(1);
    // // $user = $user->update([
    // $user->update([
    //     'name' => 'Atualizand com Mass Update'
    // ]); //dd($user) -> "true ou false"
    // dd($user);

    //como eu faria para pegar a loja de um usuario
    //$user = \App\User::find(4);

    //return $user->store; //0 objeto único (store) se for collection de dadosO(Objetos)
    //dd($user->store()->count());
    //pegar os produtos de uma loja?
    //$loja = \App\Models\Store::find(1);
    //return $loja->products->count(); // return $loja->products()->where('id', 1)->get();

    //pegar uma categoria de uma loja
    // $categoria = \App\Models\Category::find(1);
    // $categoria->products;

    //criar uma loja pra um usuario
    // $user = \App\User::find(10);
    // $store = $user->store()->create([
    //     'name' => 'Loja Teste',
    //     'description' => 'Loja Teste de produtos de informatica',
    //     'mobile_phone' => 'xx-xxxxx-xxxx',
    //     'phone' => 'xx-xxxxx-xxxxx',
    //     'slug' => 'loja-teste'
    // ]);
    // dd($store);

    //criar um produto para uma loja

    //criar uma categoria

    //adicionar um produto para uma categoria ou vice-versa

    return \App\User::all();
});

//Route::get('/admin/stores', 'Admin\\StoreController@index');
