<?php

namespace JakubKlapka\LaravelDoctrineSqlsrvDateFix;

use JakubKlapka\LaravelDoctrineSqlsrvDateFix\Types\DateTimeType;
use Illuminate\Support\ServiceProvider;

class DateFixProvider extends ServiceProvider {

	/**
	 * Hook to laravel boot
	 */
	public function boot() {

		\Doctrine\DBAL\Types\Type::overrideType( 'datetime', DateTimeType::class );

	}

}