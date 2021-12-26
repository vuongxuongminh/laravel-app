<?php

declare(strict_types=1);

namespace App\GraphQLExecutors\Types;

/**
 * @property string|null $_eq
 * @property string|null $_gt
 * @property string|null $_gte
 * @property array<int, string>|null $_in
 * @property bool|null $_is_null
 * @property string|null $_lt
 * @property string|null $_lte
 * @property string|null $_neq
 * @property array<int, string>|null $_nin
 */
class bigint_comparison_exp extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param string|null $_eq
     * @param string|null $_gt
     * @param string|null $_gte
     * @param array<int, string>|null $_in
     * @param bool|null $_is_null
     * @param string|null $_lt
     * @param string|null $_lte
     * @param string|null $_neq
     * @param array<int, string>|null $_nin
     */
    public static function make(
        $_eq = 1.7976931348623157E+308,
        $_gt = 1.7976931348623157E+308,
        $_gte = 1.7976931348623157E+308,
        $_in = 1.7976931348623157E+308,
        $_is_null = 1.7976931348623157E+308,
        $_lt = 1.7976931348623157E+308,
        $_lte = 1.7976931348623157E+308,
        $_neq = 1.7976931348623157E+308,
        $_nin = 1.7976931348623157E+308
    ): self {
        $instance = new self;

        if ($_eq !== self::UNDEFINED) {
            $instance->_eq = $_eq;
        }
        if ($_gt !== self::UNDEFINED) {
            $instance->_gt = $_gt;
        }
        if ($_gte !== self::UNDEFINED) {
            $instance->_gte = $_gte;
        }
        if ($_in !== self::UNDEFINED) {
            $instance->_in = $_in;
        }
        if ($_is_null !== self::UNDEFINED) {
            $instance->_is_null = $_is_null;
        }
        if ($_lt !== self::UNDEFINED) {
            $instance->_lt = $_lt;
        }
        if ($_lte !== self::UNDEFINED) {
            $instance->_lte = $_lte;
        }
        if ($_neq !== self::UNDEFINED) {
            $instance->_neq = $_neq;
        }
        if ($_nin !== self::UNDEFINED) {
            $instance->_nin = $_nin;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            '_eq' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            '_gt' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            '_gte' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            '_in' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\ScalarConverter))),
            '_is_null' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\BooleanConverter),
            '_lt' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            '_lte' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            '_neq' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            '_nin' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\ScalarConverter))),
        ];
    }
}
