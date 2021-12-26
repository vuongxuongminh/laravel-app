<?php

declare(strict_types=1);

namespace App\GraphQLExecutors\Types;

/**
 * @property string|null $id
 */
class users_inc_input extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param string|null $id
     */
    public static function make($id = 1.7976931348623157E+308): self
    {
        $instance = new self;

        if ($id !== self::UNDEFINED) {
            $instance->id = $id;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'id' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
        ];
    }
}
