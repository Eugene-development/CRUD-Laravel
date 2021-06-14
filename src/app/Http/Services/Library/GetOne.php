<?php


namespace App\Http\Services\Library;



use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

abstract class GetOne
{

    public function getOne($param)
    {
        return $this->model::where('project_id', $this->token)
            ->where('id', $param)
            ->with(['category', 'image'])//TODO убрать хардкор
            ->get();

        //        return $this->model::where('id', $param)
//            ->first();

//        return DB::connection('mysql')->select($this->model::where('id', $param)->with(['category', 'image'])->get());
//        return DB::connection('mysql')->select('SELECT * FROM nvg_menu');






//        $someModel = new SomeModel;
//        $databaseName = "mysql2"; // Dynamically get this value from db
//        $this->model->setConnection($databaseName);
//        $something = $someModel->find(1);



        //Schema::connection('sqlite')->


//        \Config::set('database.connections.mysql2.database', 'DB5');
//        DB::purge('mysql2');



//        config(['database.connections.mynewconnection' => {settings here}]);
//
//        DB::purge('mynewconnection');



//        Config::set("database.connections.mysql2", [
//            'driver' => 'mysql',
//            'url' => env('DATABASE_URL'),
//            'host' => env('DB_HOST', '127.0.0.1'),
//            'port' => env('DB_PORT', '3306'),
//            'database' => "DB5",
//            'username' => env('DB_USERNAME', 'forge'),
//            'password' => env('DB_PASSWORD', ''),
//            'unix_socket' => env('DB_SOCKET', ''),
//            'charset' => 'utf8mb4',
//            'collation' => 'utf8mb4_unicode_ci',
//            'prefix' => '',
//            'prefix_indexes' => true,
//            'strict' => true,
//            'engine' => null,
//            'options' => extension_loaded('pdo_mysql') ? array_filter([
//                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
//            ]) : [],
//        ]);

//        Config::set("database.connections.mysql", [
//            "driver" => "mysql",
//            "host" => env('DB_HOST', '127.0.0.1'),
//            "database" => $this->token,
//            "username" => env('DB_USERNAME', 'forge'),
//            "password" => env('DB_PASSWORD', '')
//        ]);
//


    }
}
