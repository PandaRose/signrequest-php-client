<?php
/**
 * DocumentSignerTemplateConf
 *
 * PHP version 5
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SignRequest API
 *
 * API for SignRequest.com
 * OpenAPI spec version: v1
 * Contact: tech-support@signrequest.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SignRequest\Model;

use \ArrayAccess;
use \SignRequest\ObjectSerializer;

/**
 * DocumentSignerTemplateConf Class Doc Comment
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentSignerTemplateConf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentSignerTemplateConf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signer_index' => 'int',
        'needs_to_sign' => 'bool',
        'approve_only' => 'bool',
        'notify_only' => 'bool',
        'in_person' => 'bool',
        'order' => 'int',
        'placeholders' => '\SignRequest\Model\Placeholder[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signer_index' => null,
        'needs_to_sign' => null,
        'approve_only' => null,
        'notify_only' => null,
        'in_person' => null,
        'order' => null,
        'placeholders' => null
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
        'signer_index' => 'signer_index',
        'needs_to_sign' => 'needs_to_sign',
        'approve_only' => 'approve_only',
        'notify_only' => 'notify_only',
        'in_person' => 'in_person',
        'order' => 'order',
        'placeholders' => 'placeholders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signer_index' => 'setSignerIndex',
        'needs_to_sign' => 'setNeedsToSign',
        'approve_only' => 'setApproveOnly',
        'notify_only' => 'setNotifyOnly',
        'in_person' => 'setInPerson',
        'order' => 'setOrder',
        'placeholders' => 'setPlaceholders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signer_index' => 'getSignerIndex',
        'needs_to_sign' => 'getNeedsToSign',
        'approve_only' => 'getApproveOnly',
        'notify_only' => 'getNotifyOnly',
        'in_person' => 'getInPerson',
        'order' => 'getOrder',
        'placeholders' => 'getPlaceholders'
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
        $this->container['signer_index'] = isset($data['signer_index']) ? $data['signer_index'] : null;
        $this->container['needs_to_sign'] = isset($data['needs_to_sign']) ? $data['needs_to_sign'] : null;
        $this->container['approve_only'] = isset($data['approve_only']) ? $data['approve_only'] : null;
        $this->container['notify_only'] = isset($data['notify_only']) ? $data['notify_only'] : null;
        $this->container['in_person'] = isset($data['in_person']) ? $data['in_person'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['placeholders'] = isset($data['placeholders']) ? $data['placeholders'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['signer_index']) && ($this->container['signer_index'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'signer_index', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['signer_index']) && ($this->container['signer_index'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'signer_index', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['order']) && ($this->container['order'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'order', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['order']) && ($this->container['order'] < 0)) {
            $invalidProperties[] = "invalid value for 'order', must be bigger than or equal to 0.";
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
     * Gets signer_index
     *
     * @return int
     */
    public function getSignerIndex()
    {
        return $this->container['signer_index'];
    }

    /**
     * Sets signer_index
     *
     * @param int $signer_index signer_index
     *
     * @return $this
     */
    public function setSignerIndex($signer_index)
    {

        if (!is_null($signer_index) && ($signer_index > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $signer_index when calling DocumentSignerTemplateConf., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($signer_index) && ($signer_index < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $signer_index when calling DocumentSignerTemplateConf., must be bigger than or equal to -2147483648.');
        }

        $this->container['signer_index'] = $signer_index;

        return $this;
    }

    /**
     * Gets needs_to_sign
     *
     * @return bool
     */
    public function getNeedsToSign()
    {
        return $this->container['needs_to_sign'];
    }

    /**
     * Sets needs_to_sign
     *
     * @param bool $needs_to_sign needs_to_sign
     *
     * @return $this
     */
    public function setNeedsToSign($needs_to_sign)
    {
        $this->container['needs_to_sign'] = $needs_to_sign;

        return $this;
    }

    /**
     * Gets approve_only
     *
     * @return bool
     */
    public function getApproveOnly()
    {
        return $this->container['approve_only'];
    }

    /**
     * Sets approve_only
     *
     * @param bool $approve_only approve_only
     *
     * @return $this
     */
    public function setApproveOnly($approve_only)
    {
        $this->container['approve_only'] = $approve_only;

        return $this;
    }

    /**
     * Gets notify_only
     *
     * @return bool
     */
    public function getNotifyOnly()
    {
        return $this->container['notify_only'];
    }

    /**
     * Sets notify_only
     *
     * @param bool $notify_only notify_only
     *
     * @return $this
     */
    public function setNotifyOnly($notify_only)
    {
        $this->container['notify_only'] = $notify_only;

        return $this;
    }

    /**
     * Gets in_person
     *
     * @return bool
     */
    public function getInPerson()
    {
        return $this->container['in_person'];
    }

    /**
     * Sets in_person
     *
     * @param bool $in_person in_person
     *
     * @return $this
     */
    public function setInPerson($in_person)
    {
        $this->container['in_person'] = $in_person;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {

        if (!is_null($order) && ($order > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $order when calling DocumentSignerTemplateConf., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($order) && ($order < 0)) {
            throw new \InvalidArgumentException('invalid value for $order when calling DocumentSignerTemplateConf., must be bigger than or equal to 0.');
        }

        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets placeholders
     *
     * @return \SignRequest\Model\Placeholder[]
     */
    public function getPlaceholders()
    {
        return $this->container['placeholders'];
    }

    /**
     * Sets placeholders
     *
     * @param \SignRequest\Model\Placeholder[] $placeholders placeholders
     *
     * @return $this
     */
    public function setPlaceholders($placeholders)
    {
        $this->container['placeholders'] = $placeholders;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


