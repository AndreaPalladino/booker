<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        $categories = ['Action','Drama','Horror','Fantasy','Adventure','Dystopian','Mystery','Science','Art','Cook','History','Children'];

        foreach($categories as $category){
            DB::table('categories')->insert([
                'name'=>$category,
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now()
            ]);
        }
    }
}
