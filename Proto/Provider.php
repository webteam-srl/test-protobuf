<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Schema/cosmic-modules.proto

namespace WebTeam\Demo\Cosmic\Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>demo.Provider</code>
 */
class Provider
{
    /**
     * Generated from protobuf enum <code>Lyra = 0;</code>
     */
    const Lyra = 0;

    private static $valueToName = [
        self::Lyra => 'Lyra',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

