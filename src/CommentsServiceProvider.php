<?php

namespace VeseluyRodjer\Comments;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Route;

class CommentsServiceProvider extends ServiceProvider
{

    /** @return void */
    public function boot()
    {
        // Загружаем свой файл маршрутов, обрабатывающий POST запрос, отправляемый формой с помощью AJAX.
	$this->loadRoutesFrom(__DIR__ . '/../routes/route.php');
	    
	// Создание  таблицы "Comments"
	$this->loadMigrationsFrom(__DIR__.'../database/migrations');

	//Публикуем
        $this->publishes([__DIR__ . '/../config/' => config_path()]);

		$this->publishes([__DIR__ . '/../app/' => app_path()]);

		$this->publishes([__DIR__ . '/../public/' => public_path()]);

		$this->publishes([__DIR__ . '/../resources/' => resource_path()]);
		
		
		Schema::defaultStringLength(191);
    }

	
    public function register()
    {

	}

}
