<?php namespace Cherryoff\Nbblog;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class NbblogServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('cherryoff/nbblog');

        /**
         * Регистрируем наши роуты
         */
        include __DIR__.'/../../routes.php';
        /**
         * Подключаем собственный viewComposers
         */
        include __DIR__.'/../../viewComposers.php';

        /**
         * Разрешаем обращаться к видам вне модуля
         */
        View::addNamespace('blog', __DIR__.'/../../views');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
