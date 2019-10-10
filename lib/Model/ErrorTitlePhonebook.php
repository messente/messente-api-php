<?php
/**
 * ErrorTitlePhonebook
 *
 * PHP version 5
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
 * The version of the OpenAPI document: 1.1.1
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;
use \Messente\Api\ObjectSerializer;

/**
 * ErrorTitlePhonebook Class Doc Comment
 *
 * @category Class
 * @description Textual value which corresponds to an error code
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorTitlePhonebook
{
    /**
     * Possible values of this enum
     */
    const INVALID_DATA = 'Invalid data';
    const UNAUTHORIZED = 'Unauthorized';
    const MISSING_RESOURCE = 'Missing resource';
    const CONFLICT = 'Conflict';
    const CLIENT_ERROR = 'Client error';
    const GENERAL_ERROR = 'General error';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVALID_DATA,
            self::UNAUTHORIZED,
            self::MISSING_RESOURCE,
            self::CONFLICT,
            self::CLIENT_ERROR,
            self::GENERAL_ERROR,
        ];
    }
}


