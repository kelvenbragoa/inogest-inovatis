<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         // \App\Models\Employees::factory(50)->create();

        DB::table('genders')->insert([
             ['name' => 'Masculino',],
             ['name' => 'Feminino',],
             ['name' => 'Outro',],
            ]);

        DB::table('configs')->insert(
             [
                 'company_name' => 'INOVATIS MZ LTD',
                 'company_address' => 'Avenida Samuel Magaia',
                 'company_number' => '000000',
                 'company_flat' => 'R/C',
                 'company_city' => 'Beira',
                 'company_province' => 'Sofala',
                 'company_country' => 'Moçambique',
                 'company_mobile' => '850110300',
                 'company_email' => 'apoio@inovatis.co.mz',
                 'company_web' => 'https://www.inovatis.co.mz',
                 'company_nuit' => '401067221',
                 'company_service' => 'Criação de produtos digitais e Desenvolvimento de softwares',
                 'company_tax' => '3',
                 'company_bank_name1' => 'Vodacom Mpesa',
                 'company_bank_account1' => '508786',
                 'company_bank_name2' => 'Millenium Bim',
                 'company_bank_account2' => '000000',
                 'company_bank_name3' => 'BCI',
                 'company_bank_account3' => '000000',
                ],
            );

        DB::table('marital__statuses')->insert([
             ['name' => 'Solteiro',],
             ['name' => 'Casado',],
             ['name' => 'Separado',],
             ['name' => 'Divorciado',],
             ['name' => 'Viúvo',],
            ]);

        DB::table('contracts')->insert([
             ['name' => 'Contrato Indeterminado',],
             ['name' => 'Contrato tempo certo',],
             ['name' => 'Contrato de Estágio',],
             ['name' => 'Eventual',],
            ]);

        DB::table('provinces')->insert([
             ['name' => 'Maputo Cidade',],
             ['name' => 'Maputo Província',],
             ['name' => 'Inhambane',],
             ['name' => 'Gaza',],
             ['name' => 'Sofala',],
             ['name' => 'Manica',],
             ['name' => 'Tete',],
             ['name' => 'Zambézia',],
             ['name' => 'Nampula',],
             ['name' => 'Delgado',],
             ['name' => 'Cabo',],
             ['name' => 'Niassa',],
            ]);

        DB::table('cities')->insert([
             ['name' => 'Maputo',],
             ['name' => 'Matola',],
             ['name' => 'Nampula',],
             ['name' => 'Beira',],
             ['name' => 'Chimoio',],
             ['name' => 'Quelimane',],
             ['name' => 'Nacala',],
             ['name' => 'Mocuba',],
             ['name' => 'Tete',],
             ['name' => 'Gorué',],
             ['name' => 'Lichinga',],
             ['name' => 'Pemba',],
             ['name' => 'Xai-Xai',],
             ['name' => 'Maxixe',],
             ['name' => 'Angoche',],
             ['name' => 'Cuamba',],
             ['name' => 'Montepuez',],
             ['name' => 'Dondo',],
             ['name' => 'Inhambane',],
             ['name' => 'Chócue',],
             ['name' => 'Ilha de Moçambique',],
             ['name' => 'Manica',],
             ['name' => 'Moatize',],
             ['name' => 'Vilanculos',],
            ]);

        DB::table('departments')->insert([
                ['name' => 'Operação',],
                ['name' => 'Marketing',],
                ['name' => 'Desenvolvimento',],
               
               ]);

        DB::table('shifts')->insert([
                ['name' => 'Turno de Dia',],
                ['name' => 'Turno de Noite',],
               
               ]);
        DB::table('roles')->insert([
                ['name' => 'admin',],
                ['name' => 'user',],
               
               ]);
        
        DB::table('edc_categories')->insert([
                ['name' => 'Ligeiros e Pesado',],
                ['name' => 'Profissional',],
                ['name' => 'Cargas perigosas',],
                ['name' => 'Pública',],
               
               ]);

         

     
    }


}
