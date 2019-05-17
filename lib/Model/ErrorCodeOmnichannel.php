<?php
/**
 * ErrorCodeOmnichannel
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
 * The version of the OpenAPI document: 1.0.0
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;
use \Messente\Api\ObjectSerializer;

/**
 * ErrorCodeOmnichannel Class Doc Comment
 *
 * @category Class
 * @description Matches the following ErrorTitleOmnichannel.   This field is a constant.    * 101 - Not found   * 102 - Forbidden   * 103 - Unauthorized   * 104 - Invalid data   * 105 - Internal Server Error   * 106 - Missing data   * 107 - Method not allowed
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorCodeOmnichannel
{
    /**
     * Possible values of this enum
     */
    const _101 = '101';
    const _102 = '102';
    const _103 = '103';
    const _104 = '104';
    const _105 = '105';
    const _106 = '106';
    const _107 = '107';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_101,
            self::_102,
            self::_103,
            self::_104,
            self::_105,
            self::_106,
            self::_107,
        ];
    }
}


