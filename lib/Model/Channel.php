<?php
/**
 * Channel
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
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
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
    const SMS = 'sms';
    const VIBER = 'viber';
    const WHATSAPP = 'whatsapp';
    
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
        ];
    }
}


