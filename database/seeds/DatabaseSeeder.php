<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Products Table Seed
       
        
        //Voyager Seeds
        
        
        $this->call(DataRowsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(RolesTableSeeder::class);        
        $this->call(UsersTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
           
      $this->call(GenreTableSeeder::class);
       $this->call(ProductsTableSeeder::class);   
      $this->call(OrdersTableSeeder::class);
        $this->call(RatingTableSeeder::class);
    }
}
