<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/advisorynotifications/v1/service.proto

namespace Google\Cloud\AdvisoryNotifications\V1;

use UnexpectedValueException;

/**
 * Type of notification
 *
 * Protobuf type <code>google.cloud.advisorynotifications.v1.NotificationType</code>
 */
class NotificationType
{
    /**
     * Default type
     *
     * Generated from protobuf enum <code>NOTIFICATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const NOTIFICATION_TYPE_UNSPECIFIED = 0;
    /**
     * Security and privacy advisory notifications
     *
     * Generated from protobuf enum <code>NOTIFICATION_TYPE_SECURITY_PRIVACY_ADVISORY = 1;</code>
     */
    const NOTIFICATION_TYPE_SECURITY_PRIVACY_ADVISORY = 1;
    /**
     * Sensitive action notifications
     *
     * Generated from protobuf enum <code>NOTIFICATION_TYPE_SENSITIVE_ACTIONS = 2;</code>
     */
    const NOTIFICATION_TYPE_SENSITIVE_ACTIONS = 2;

    private static $valueToName = [
        self::NOTIFICATION_TYPE_UNSPECIFIED => 'NOTIFICATION_TYPE_UNSPECIFIED',
        self::NOTIFICATION_TYPE_SECURITY_PRIVACY_ADVISORY => 'NOTIFICATION_TYPE_SECURITY_PRIVACY_ADVISORY',
        self::NOTIFICATION_TYPE_SENSITIVE_ACTIONS => 'NOTIFICATION_TYPE_SENSITIVE_ACTIONS',
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
