<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::component('componentes.titulo','titulo_componente');
        Blade::component('componentes.pagina','pagina_componente');
        Blade::component('componentes.alerta','alerta_componente');
        Blade::component('componentes.criar','criar_componente');
        Blade::component('componentes.tabela','tabela_componente');
        Blade::component('componentes.cartaocrud','cartaocrud_componente');
        Blade::component('componentes.paginacao','paginacao_componente');
        Blade::component('componentes.breadcrumb','breadcrumb_componente');
        Blade::component('componentes.busca','busca_componente');
        Blade::component('componentes.card','card_componente');
    }
}
