<?php
/**
 * ErrorTitleOmnichannel
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
 * [Messente](https://messente.com) is a global provider of messaging and user verification services. Use Messente API library to send and receive SMS, Viber and WhatsApp messages, blacklist phone numbers to make sure you're not sending any unwanted messages, manage contacts and groups.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
 *
 * OpenAPI spec version: 0.0.1
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;
use \Messente\Api\ObjectSerializer;

/**
 * ErrorTitleOmnichannel Class Doc Comment
 *
 * @category Class
 * @description Textual value which corresponds to ErrorCodeOmnichannel
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorTitleOmnichannel
{
    /**
     * Possible values of this enum
     */
    const NOT_FOUND = 'Not found';
    const FORBIDDEN = 'Forbidden';
    const UNAUTHORIZED = 'Unauthorized';
    const INVALID_DATA = 'Invalid data';
    const INTERNAL_SERVER_ERROR = 'Internal Server Error';
    const MISSING_DATA = 'Missing data';
    const METHOD_NOT_ALLOWED = 'Method not allowed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_FOUND,
            self::FORBIDDEN,
            self::UNAUTHORIZED,
            self::INVALID_DATA,
            self::INTERNAL_SERVER_ERROR,
            self::MISSING_DATA,
            self::METHOD_NOT_ALLOWED,
        ];
    }
}


