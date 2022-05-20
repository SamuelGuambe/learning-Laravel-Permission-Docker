<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//SPATIE
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos =[
            //tabela de roles
            'ver-rol',
            'criar-rol',
            'editar-rol',
            'deletar-rol',
            //tabela de blogs
            'ver-blog',
            'criar-blog',
            'editar-blog',
            'deletar-blog'
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
