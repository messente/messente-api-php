<?php
/**
 * Omnimessage
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
 * [Messente](https://messente.com) is a global provider of messaging and user verification services. Use Messente API library to send and receive SMS, Viber, WhatsApp and Telegram messages, blacklist phone numbers to make sure you're not sending any unwanted messages, manage contacts and groups.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
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

use \ArrayAccess;
use \Messente\Api\ObjectSerializer;

/**
 * Omnimessage Class Doc Comment
 *
 * @category Class
 * @description An omnimessage
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Omnimessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Omnimessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'to' => 'string',
        'messages' => 'OneOfViberSMSWhatsAppTelegram[]',
        'dlrUrl' => 'string',
        'textStore' => '\Messente\Api\Model\TextStore',
        'timeToSend' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'to' => null,
        'messages' => null,
        'dlrUrl' => 'url',
        'textStore' => null,
        'timeToSend' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'to' => false,
        'messages' => false,
        'dlrUrl' => false,
        'textStore' => false,
        'timeToSend' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;

        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'to' => 'to',
        'messages' => 'messages',
        'dlrUrl' => 'dlr_url',
        'textStore' => 'text_store',
        'timeToSend' => 'time_to_send'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to' => 'setTo',
        'messages' => 'setMessages',
        'dlrUrl' => 'setDlrUrl',
        'textStore' => 'setTextStore',
        'timeToSend' => 'setTimeToSend'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to' => 'getTo',
        'messages' => 'getMessages',
        'dlrUrl' => 'getDlrUrl',
        'textStore' => 'getTextStore',
        'timeToSend' => 'getTimeToSend'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('to', $data, null);
        $this->setIfExists('messages', $data, null);
        $this->setIfExists('dlrUrl', $data, null);
        $this->setIfExists('textStore', $data, null);
        $this->setIfExists('timeToSend', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['messages'] === null) {
            $invalidProperties[] = "'messages' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to Phone number in e.164 format
     *
     * @return $this
     */
    public function setTo($to)
    {


        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }

        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return OneOfViberSMSWhatsAppTelegram[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param OneOfViberSMSWhatsAppTelegram[] $messages An array of messages
     *
     * @return $this
     */
    public function setMessages($messages)
    {


        if (is_null($messages)) {
            throw new \InvalidArgumentException('non-nullable messages cannot be null');
        }

        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets dlrUrl
     *
     * @return string|null
     */
    public function getDlrUrl()
    {
        return $this->container['dlrUrl'];
    }

    /**
     * Sets dlrUrl
     *
     * @param string|null $dlrUrl URL where the delivery report will be sent
     *
     * @return $this
     */
    public function setDlrUrl($dlrUrl)
    {


        if (is_null($dlrUrl)) {
            throw new \InvalidArgumentException('non-nullable dlrUrl cannot be null');
        }

        $this->container['dlrUrl'] = $dlrUrl;

        return $this;
    }

    /**
     * Gets textStore
     *
     * @return \Messente\Api\Model\TextStore|null
     */
    public function getTextStore()
    {
        return $this->container['textStore'];
    }

    /**
     * Sets textStore
     *
     * @param \Messente\Api\Model\TextStore|null $textStore textStore
     *
     * @return $this
     */
    public function setTextStore($textStore)
    {


        if (is_null($textStore)) {
            throw new \InvalidArgumentException('non-nullable textStore cannot be null');
        }

        $this->container['textStore'] = $textStore;

        return $this;
    }

    /**
     * Gets timeToSend
     *
     * @return \DateTime|null
     */
    public function getTimeToSend()
    {
        return $this->container['timeToSend'];
    }

    /**
     * Sets timeToSend
     *
     * @param \DateTime|null $timeToSend Optional parameter for sending messages at some specific time in the future.   Time must be specified in the ISO-8601 format.   If no timezone is specified, then the timezone is assumed to be UTC    Examples:    * Time specified with timezone: 2018-06-22T09:05:07+00:00 Time specified in UTC: 2018-06-22T09:05:07Z   * Time specified without timezone: 2018-06-22T09:05 (equivalent to 2018-06-22T09:05+00:00)
     *
     * @return $this
     */
    public function setTimeToSend($timeToSend)
    {


        if (is_null($timeToSend)) {
            throw new \InvalidArgumentException('non-nullable timeToSend cannot be null');
        }

        $this->container['timeToSend'] = $timeToSend;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


