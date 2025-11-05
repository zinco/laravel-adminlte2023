<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Contracts\Events\Dispatcher;
use \App\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Dispatcher $events): void
    {
        Paginator::useBootstrapFour();

        //menu do template adminlte
       
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
           
            
            $event->menu->add([
                'header' => 'MENU DE NAVEGAÇÃO ',
                

                
                ]);
                
            $event->menu->add([
                'text'      =>      'Início',
                'url'     =>      '/dashboard',
                'icon'          => ' fa fa-heart',
            ]);
            $event->menu->add([
                'text'      =>      'Cadastros',
                'route'     =>      'users.index',
                'icon'          => ' fa fa-clipboard',
                
                
                'submenu'   =>  [
                    [
                        'text'      =>      'PERFIL',
                        'route' => ['users.show', ['user' => 100]],
                        'can'     =>      'users.show',
                        'icon'          => ' fa fa-user',
                       // 'active'        => ['users/create','users/*/edit' ],
                        
                    ],
                    [
                        'text'      =>      'USUÁRIOS',
                        'route'     =>      'users.index',
                        'can'     =>      'users.index',
                        'icon'          => ' fa fa-users',
                        'active'        => ['users/create','users/*/edit' ],
                        
                    ],
                    [
                        'text'      =>      'FUNÇÃO',
                        'route'     =>      'roles.index',
                        'can'     =>      'roles.index',
                        'icon'          => ' fa fa-cogs',
                        'active'        => ['roles/create','roles/*/edit' ],
                        
                    ],
                    [
                        'text'      =>      'TABELAS',
                        'route'     =>      'tabelas.index',
                        'can'     =>      'tabelas.index',
                        'icon'          => ' fa fa-table',
                        'active'        => ['tabelas/create','tabelas/*/edit' ],
                        
                    ]
                ]
                
            ]);

        //2024 - CADASTRO DE IPS
            $event->menu->add([
                'header' => 'INFORMÁTICA ',
                

                
                ]);

                $event->menu->add([
                    'text'      =>      'Cadastro de Ip´s',
                    'url'     =>      '/dashboard',
                    'icon'          => ' fa fa-heart',


                    'submenu'   =>  [
                        [
                            'text'      =>      'Ip´s',
                            'route' => 'Ip.index',
                           // 'can'     =>      'Ip.index',
                            'icon'          => ' fa fa-user',
                           // 'active'        => ['users/create','users/*/edit' ],
                            
                        ],
                        [
                            'text'      =>      'Locais',
                            'route' => 'Local.create',
                            //'can'     =>      'listIps.temp',
                            'icon'          => ' fa fa-user',
                           // 'active'        => ['users/create','users/*/edit' ],

                        ],
                       
                    ]
                ]);

                
           

        });
        
        
    }
}
