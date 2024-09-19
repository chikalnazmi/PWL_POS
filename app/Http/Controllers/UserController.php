<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        // $data = [
        //     'username' => 'Customer-1',
        //     'nama' => 'Pelanggan' ,
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert ($data);
        

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username','customer-1')->update($data);
        
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager 2' ,
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create ($data);

    //     $data = [
    //         'level_id' => 2,
    //         'username' => 'manager_tiga',
    //         'nama' => 'Manager 3' ,
    //         'password' => Hash::make('12345')
    //     ];
    //     UserModel::create ($data);

    // $user = UserModel::all();
    // return view('user',['data'=> $user]);

    // $user = UserModel::find(1);
    // $user = UserModel::where ('level_id', 1)->first();
    // $user = UserModel::firstWhere ('level_id', 1);

    // $user = UserModel::findOr (1, ['username', 'nama'], function (){
    //     abort(404);
    // });
    // $user = UserModel::findOr (20, ['username', 'nama'], function (){
    //     abort(404);
    // });

    // $user = UserModel::findOrFail(1);
    // $user = UserModel::where ('username', 'manager9') -> firstOrFail();

    // $user = UserModel::where ('level_id', 2) -> count(); 
    // // dd($user);
    // return view('user',['data'=> $user]);

    // $userCount = UserModel::where('level_id', 2)->count(); 
    // return view('user', ['data' => $userCount]); 

    // $user = UserModel::firstOrCreate(
    //     [
    //         'username' => 'manager',
    //         'nama' => 'Manager',
    //     ],
    // );

    // $user = UserModel::firstOrCreate(
    //     [
    //         'username' => 'manager22',
    //         'nama' => 'Manager Dua Dua',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );

    // $user = UserModel::firstOrNew(
    //     [
    //         'username' => 'manager',
    //         'nama' => 'Manager',
    //     ],
    // );

    $user = UserModel::firstOrNew(
        [
            'username' => 'manager33',
            'nama' => 'Manager Tiga Tiga',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ],
    );
    $user->save();

    return view('user', ['data' => $user]);
}}