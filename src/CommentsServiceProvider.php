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

	//Публикуем
        $this->publishes([__DIR__ . '/../config/' => config_path()]);

		$this->publishes([__DIR__ . '/../app/' => app_path()]);

		$this->publishes([__DIR__ . '/../database/' => database_path()]);

		$this->publishes([__DIR__ . '/../public/' => public_path()]);

		$this->publishes([__DIR__ . '/../resources/' => resource_path()]);
		
		
		Schema::defaultStringLength(191);
    }

	
    public function register()
    {

	}

}
