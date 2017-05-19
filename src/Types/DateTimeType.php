<?php

namespace JakubKlapka\LaravelDoctrineSqlsrvDateFix\Types;

use Doctrine\DBAL\Types\DateTimeType as DoctrineDateTimeType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class DateTimeType extends DoctrineDateTimeType {

	/**
	 * DBAL BUG: https://github.com/doctrine/dbal/pull/2477
	 */
	public function convertToDatabaseValue($value, AbstractPlatform $platform)
	{
		return ($value !== null)
			? $value->format( 'Y-m-d\TH:i:s' ) : null;

	}

}