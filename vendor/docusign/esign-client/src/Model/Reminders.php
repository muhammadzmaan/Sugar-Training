<?php
/**
 * Reminders
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * Reminders Class Doc Comment
 *
 * @category    Class
 * @description A complex element that specifies reminder settings for the envelope
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Reminders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'reminders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reminder_delay' => '?string',
        'reminder_enabled' => '?string',
        'reminder_frequency' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reminder_delay' => null,
        'reminder_enabled' => null,
        'reminder_frequency' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'reminder_delay' => 'reminderDelay',
        'reminder_enabled' => 'reminderEnabled',
        'reminder_frequency' => 'reminderFrequency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reminder_delay' => 'setReminderDelay',
        'reminder_enabled' => 'setReminderEnabled',
        'reminder_frequency' => 'setReminderFrequency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reminder_delay' => 'getReminderDelay',
        'reminder_enabled' => 'getReminderEnabled',
        'reminder_frequency' => 'getReminderFrequency'
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
        return self::$swaggerModelName;
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
        $this->container['reminder_delay'] = isset($data['reminder_delay']) ? $data['reminder_delay'] : null;
        $this->container['reminder_enabled'] = isset($data['reminder_enabled']) ? $data['reminder_enabled'] : null;
        $this->container['reminder_frequency'] = isset($data['reminder_frequency']) ? $data['reminder_frequency'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets reminder_delay
     *
     * @return ?string
     */
    public function getReminderDelay()
    {
        return $this->container['reminder_delay'];
    }

    /**
     * Sets reminder_delay
     *
     * @param ?string $reminder_delay An interger that sets the number of days after the recipient receives the envelope that reminder emails are sent to the recipient.
     *
     * @return $this
     */
    public function setReminderDelay($reminder_delay)
    {
        $this->container['reminder_delay'] = $reminder_delay;

        return $this;
    }

    /**
     * Gets reminder_enabled
     *
     * @return ?string
     */
    public function getReminderEnabled()
    {
        return $this->container['reminder_enabled'];
    }

    /**
     * Sets reminder_enabled
     *
     * @param ?string $reminder_enabled When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     *
     * @return $this
     */
    public function setReminderEnabled($reminder_enabled)
    {
        $this->container['reminder_enabled'] = $reminder_enabled;

        return $this;
    }

    /**
     * Gets reminder_frequency
     *
     * @return ?string
     */
    public function getReminderFrequency()
    {
        return $this->container['reminder_frequency'];
    }

    /**
     * Sets reminder_frequency
     *
     * @param ?string $reminder_frequency An interger that sets the interval, in days, between reminder emails.
     *
     * @return $this
     */
    public function setReminderFrequency($reminder_frequency)
    {
        $this->container['reminder_frequency'] = $reminder_frequency;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

