<?php


namespace App\Http\Services\Library;



use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

abstract class GetOne
{

    public function getOne($param)
    {
//        return $this->model::where('id', $param)
//            ->first();

//        return DB::connection('mysql')->select($this->model::where('id', $param)->with(['category', 'image'])->get());
//        return DB::connection('mysql')->select('SELECT * FROM nvg_menu');






//        $someModel = new SomeModel;
//        $databaseName = "mysql2"; // Dynamically get this value from db
//        $this->model->setConnection($databaseName);
//        $something = $someModel->find(1);



//        \Config::set('database.connections.mysql2.database', 'DB5');
//        DB::purge('mysql2');



//        config(['database.connections.mynewconnection' => {settings here}]);
//
//        DB::purge('mynewconnection');



        Config::set("database.connections.mysql", [
            "driver" => "mysql",
            "host" => "orbita.clk36bqcisui.eu-central-1.rds.amazonaws.com",
            "database" => $this->token,
            "username" => "admin",
            "password" => "db3PRO2021"
        ]);



        return $this->model::where('id', $param)->with(['category', 'image'])->get();
    }
}
