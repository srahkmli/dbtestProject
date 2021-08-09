<?php

namespace App\Http\Controllers;

use App\Models\test;
use App\Models\test2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Html;

class testController extends Controller
{
    public function index()
    {


        $cash = DB::table('tests')

        ->join('test2s', 'test2s.id', 'tests.id')

        ->select('test2s.t2Name', 'test2s.t2Email', 'tests.*')

        ->get();
       //   dd($cash);
foreach ($cash as $cosh ) {
 echo $cosh->t2Name;
}


        //-------------------------------------arrrrrrrr
/*
        $query = DB::table('')
            ->select(DB::raw('tName as name', 'tAddress as address', 'tEmail '))
            ->where('active', '==', '1')
            // ->groupBy('active')
            ->get();;

        $query2 = DB::table('test2s')
            ->select(DB::raw('t2Name as name', 't2Address as address', 't2Email'))
            ->where('test1_id', '>', '10030')
            // ->groupBy('2active')
            ->get();;
        //dd($query , $query2);

        echo $query;
        echo "</br> $query2";
*/

        /*

DB_CONNECTION=mysql
DB_HOST=172.17.0.1
DB_PORT=3306
DB_DATABASE=MYSQLTEST
DB_USERNAME=root
DB_PASSWORD=secret



DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=testdb
DB_USERNAME=postgres
DB_PASSWORD=secret


     */
    }
}
