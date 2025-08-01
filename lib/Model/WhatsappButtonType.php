<?php
/**
 * WhatsappButtonType
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
 * [Messente](https://messente.com) is a global provider of messaging and user verification services.  * Send and receive SMS, Viber and WhatsApp messages. * Manage contacts and groups. * Fetch detailed info about phone numbers. * Blacklist phone numbers to make sure you're not sending any unwanted messages.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;
use \Messente\Api\ObjectSerializer;

/**
 * WhatsappButtonType Class Doc Comment
 *
 * @category Class
 * @description Type of the button
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappButtonType
{
    /**
     * Possible values of this enum
     */
    public const QUICK_REPLY = 'quick_reply';

    public const PHONE_NUMBER = 'phone_number';

    public const OTP = 'otp';

    public const URL = 'url';

    public const CATALOG = 'catalog';

    public const FLOW = 'flow';

    public const COPY_CODE = 'copy_code';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUICK_REPLY,
            self::PHONE_NUMBER,
            self::OTP,
            self::URL,
            self::CATALOG,
            self::FLOW,
            self::COPY_CODE
        ];
    }
}


