<?php
/**
 * Channel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Messente API
 *
 * [Messente](https://messente.com) is a global provider of messaging and user verification services.  * Send and receive SMS, Viber, WhatsApp and Telegram messages. * Manage contacts and groups. * Fetch detailed info about phone numbers. * Blacklist phone numbers to make sure you're not sending any unwanted messages.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;
use \Messente\Api\ObjectSerializer;

/**
 * Channel Class Doc Comment
 *
 * @category Class
 * @description Defines the delivery channel
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Channel
{
    /**
     * Possible values of this enum
     */
    public const SMS = 'sms';

    public const VIBER = 'viber';

    public const WHATSAPP = 'whatsapp';

    public const TELEGRAM = 'telegram';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SMS,
            self::VIBER,
            self::WHATSAPP,
            self::TELEGRAM
        ];
    }
}


