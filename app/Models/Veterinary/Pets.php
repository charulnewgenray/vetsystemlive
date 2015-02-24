<?php namespace App\Models\Veterinary;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pets extends Model {

    protected $table = 'pets';

    public function scopePetId($query,$chip){
        return $query->where('chip','=',$chip)->pluck('pet_id');
    }

    public function scopePetData($query,$id){
        $pet =  DB::table('pets')
                    ->join('customers', 'pets.customer_id', '=', 'customers.customer_id')
                    ->select('*')
                    ->where('pet_id','=',$id)
                    ->first();

        $breed_table = strtolower($pet->pet_type).'_breeds';

        $breed =  DB::table($breed_table)->where('id','=',$pet->pet_id)->pluck('value');;

        $records = ['pet'=>$pet,'breed'=>$breed];

//        var_dump($records);die;

        return $records;

    }
}
