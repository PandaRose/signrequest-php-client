<?php
/**
 * Document
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
 * Document Class Doc Comment
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Document implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'team' => '\SignRequest\Model\DocumentTeam',
        'uuid' => 'string',
        'user' => '\SignRequest\Model\User',
        'file_as_pdf' => 'string',
        'name' => 'string',
        'external_id' => 'string',
        'frontend_id' => 'string',
        'file' => 'string',
        'file_from_url' => 'string',
        'events_callback_url' => 'string',
        'file_from_content' => 'string',
        'file_from_content_name' => 'string',
        'template' => 'string',
        'prefill_tags' => '\SignRequest\Model\InlinePrefillTags[]',
        'integrations' => '\SignRequest\Model\InlineIntegrationData[]',
        'file_from_sf' => '\SignRequest\Model\FileFromSf',
        'auto_delete_days' => 'int',
        'auto_expire_days' => 'int',
        'pdf' => 'string',
        'status' => 'string',
        'signrequest' => '\SignRequest\Model\DocumentSignrequest',
        'api_used' => 'bool',
        'signing_log' => '\SignRequest\Model\DocumentSigningLog',
        'security_hash' => 'string',
        'attachments' => '\SignRequest\Model\DocumentAttachment[]',
        'auto_delete_after' => '\DateTime',
        'sandbox' => 'bool',
        'auto_expire_after' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => 'uri',
        'team' => null,
        'uuid' => null,
        'user' => null,
        'file_as_pdf' => 'uri',
        'name' => null,
        'external_id' => null,
        'frontend_id' => null,
        'file' => 'uri',
        'file_from_url' => 'uri',
        'events_callback_url' => 'uri',
        'file_from_content' => null,
        'file_from_content_name' => null,
        'template' => 'uri',
        'prefill_tags' => null,
        'integrations' => null,
        'file_from_sf' => null,
        'auto_delete_days' => null,
        'auto_expire_days' => null,
        'pdf' => 'uri',
        'status' => null,
        'signrequest' => null,
        'api_used' => null,
        'signing_log' => null,
        'security_hash' => null,
        'attachments' => null,
        'auto_delete_after' => 'date-time',
        'sandbox' => null,
        'auto_expire_after' => 'date-time'
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
        'url' => 'url',
        'team' => 'team',
        'uuid' => 'uuid',
        'user' => 'user',
        'file_as_pdf' => 'file_as_pdf',
        'name' => 'name',
        'external_id' => 'external_id',
        'frontend_id' => 'frontend_id',
        'file' => 'file',
        'file_from_url' => 'file_from_url',
        'events_callback_url' => 'events_callback_url',
        'file_from_content' => 'file_from_content',
        'file_from_content_name' => 'file_from_content_name',
        'template' => 'template',
        'prefill_tags' => 'prefill_tags',
        'integrations' => 'integrations',
        'file_from_sf' => 'file_from_sf',
        'auto_delete_days' => 'auto_delete_days',
        'auto_expire_days' => 'auto_expire_days',
        'pdf' => 'pdf',
        'status' => 'status',
        'signrequest' => 'signrequest',
        'api_used' => 'api_used',
        'signing_log' => 'signing_log',
        'security_hash' => 'security_hash',
        'attachments' => 'attachments',
        'auto_delete_after' => 'auto_delete_after',
        'sandbox' => 'sandbox',
        'auto_expire_after' => 'auto_expire_after'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'team' => 'setTeam',
        'uuid' => 'setUuid',
        'user' => 'setUser',
        'file_as_pdf' => 'setFileAsPdf',
        'name' => 'setName',
        'external_id' => 'setExternalId',
        'frontend_id' => 'setFrontendId',
        'file' => 'setFile',
        'file_from_url' => 'setFileFromUrl',
        'events_callback_url' => 'setEventsCallbackUrl',
        'file_from_content' => 'setFileFromContent',
        'file_from_content_name' => 'setFileFromContentName',
        'template' => 'setTemplate',
        'prefill_tags' => 'setPrefillTags',
        'integrations' => 'setIntegrations',
        'file_from_sf' => 'setFileFromSf',
        'auto_delete_days' => 'setAutoDeleteDays',
        'auto_expire_days' => 'setAutoExpireDays',
        'pdf' => 'setPdf',
        'status' => 'setStatus',
        'signrequest' => 'setSignrequest',
        'api_used' => 'setApiUsed',
        'signing_log' => 'setSigningLog',
        'security_hash' => 'setSecurityHash',
        'attachments' => 'setAttachments',
        'auto_delete_after' => 'setAutoDeleteAfter',
        'sandbox' => 'setSandbox',
        'auto_expire_after' => 'setAutoExpireAfter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'team' => 'getTeam',
        'uuid' => 'getUuid',
        'user' => 'getUser',
        'file_as_pdf' => 'getFileAsPdf',
        'name' => 'getName',
        'external_id' => 'getExternalId',
        'frontend_id' => 'getFrontendId',
        'file' => 'getFile',
        'file_from_url' => 'getFileFromUrl',
        'events_callback_url' => 'getEventsCallbackUrl',
        'file_from_content' => 'getFileFromContent',
        'file_from_content_name' => 'getFileFromContentName',
        'template' => 'getTemplate',
        'prefill_tags' => 'getPrefillTags',
        'integrations' => 'getIntegrations',
        'file_from_sf' => 'getFileFromSf',
        'auto_delete_days' => 'getAutoDeleteDays',
        'auto_expire_days' => 'getAutoExpireDays',
        'pdf' => 'getPdf',
        'status' => 'getStatus',
        'signrequest' => 'getSignrequest',
        'api_used' => 'getApiUsed',
        'signing_log' => 'getSigningLog',
        'security_hash' => 'getSecurityHash',
        'attachments' => 'getAttachments',
        'auto_delete_after' => 'getAutoDeleteAfter',
        'sandbox' => 'getSandbox',
        'auto_expire_after' => 'getAutoExpireAfter'
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

    const STATUS_CO = 'co';
    const STATUS_NE = 'ne';
    const STATUS_SE = 'se';
    const STATUS_VI = 'vi';
    const STATUS_SI = 'si';
    const STATUS__DO = 'do';
    const STATUS_SD = 'sd';
    const STATUS_CA = 'ca';
    const STATUS_DE = 'de';
    const STATUS_EC = 'ec';
    const STATUS_ES = 'es';
    const STATUS_XP = 'xp';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CO,
            self::STATUS_NE,
            self::STATUS_SE,
            self::STATUS_VI,
            self::STATUS_SI,
            self::STATUS__DO,
            self::STATUS_SD,
            self::STATUS_CA,
            self::STATUS_DE,
            self::STATUS_EC,
            self::STATUS_ES,
            self::STATUS_XP,
        ];
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['file_as_pdf'] = isset($data['file_as_pdf']) ? $data['file_as_pdf'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['frontend_id'] = isset($data['frontend_id']) ? $data['frontend_id'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['file_from_url'] = isset($data['file_from_url']) ? $data['file_from_url'] : null;
        $this->container['events_callback_url'] = isset($data['events_callback_url']) ? $data['events_callback_url'] : null;
        $this->container['file_from_content'] = isset($data['file_from_content']) ? $data['file_from_content'] : null;
        $this->container['file_from_content_name'] = isset($data['file_from_content_name']) ? $data['file_from_content_name'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['prefill_tags'] = isset($data['prefill_tags']) ? $data['prefill_tags'] : null;
        $this->container['integrations'] = isset($data['integrations']) ? $data['integrations'] : null;
        $this->container['file_from_sf'] = isset($data['file_from_sf']) ? $data['file_from_sf'] : null;
        $this->container['auto_delete_days'] = isset($data['auto_delete_days']) ? $data['auto_delete_days'] : null;
        $this->container['auto_expire_days'] = isset($data['auto_expire_days']) ? $data['auto_expire_days'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['signrequest'] = isset($data['signrequest']) ? $data['signrequest'] : null;
        $this->container['api_used'] = isset($data['api_used']) ? $data['api_used'] : null;
        $this->container['signing_log'] = isset($data['signing_log']) ? $data['signing_log'] : null;
        $this->container['security_hash'] = isset($data['security_hash']) ? $data['security_hash'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['auto_delete_after'] = isset($data['auto_delete_after']) ? $data['auto_delete_after'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
        $this->container['auto_expire_after'] = isset($data['auto_expire_after']) ? $data['auto_expire_after'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
            $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['file_as_pdf']) && (mb_strlen($this->container['file_as_pdf']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_as_pdf', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['frontend_id']) && (mb_strlen($this->container['frontend_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'frontend_id', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['file_from_url']) && (mb_strlen($this->container['file_from_url']) > 2100)) {
            $invalidProperties[] = "invalid value for 'file_from_url', the character length must be smaller than or equal to 2100.";
        }

        if (!is_null($this->container['events_callback_url']) && (mb_strlen($this->container['events_callback_url']) > 2100)) {
            $invalidProperties[] = "invalid value for 'events_callback_url', the character length must be smaller than or equal to 2100.";
        }

        if (!is_null($this->container['auto_delete_days']) && ($this->container['auto_delete_days'] > 730)) {
            $invalidProperties[] = "invalid value for 'auto_delete_days', must be smaller than or equal to 730.";
        }

        if (!is_null($this->container['auto_delete_days']) && ($this->container['auto_delete_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'auto_delete_days', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['auto_expire_days']) && ($this->container['auto_expire_days'] > 730)) {
            $invalidProperties[] = "invalid value for 'auto_expire_days', must be smaller than or equal to 730.";
        }

        if (!is_null($this->container['auto_expire_days']) && ($this->container['auto_expire_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'auto_expire_days', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['security_hash']) && (mb_strlen($this->container['security_hash']) < 1)) {
            $invalidProperties[] = "invalid value for 'security_hash', the character length must be bigger than or equal to 1.";
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets team
     *
     * @return \SignRequest\Model\DocumentTeam
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param \SignRequest\Model\DocumentTeam $team team
     *
     * @return $this
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {

        if (!is_null($uuid) && (mb_strlen($uuid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $uuid when calling Document., must be bigger than or equal to 1.');
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \SignRequest\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \SignRequest\Model\User $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets file_as_pdf
     *
     * @return string
     */
    public function getFileAsPdf()
    {
        return $this->container['file_as_pdf'];
    }

    /**
     * Sets file_as_pdf
     *
     * @param string $file_as_pdf Temporary URL to original file as PDF, expires in five minutes
     *
     * @return $this
     */
    public function setFileAsPdf($file_as_pdf)
    {

        if (!is_null($file_as_pdf) && (mb_strlen($file_as_pdf) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_as_pdf when calling Document., must be bigger than or equal to 1.');
        }

        $this->container['file_as_pdf'] = $file_as_pdf;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Defaults to filename, including extension
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Document., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id ID used to reference document in external system
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        if (!is_null($external_id) && (mb_strlen($external_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling Document., must be smaller than or equal to 255.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets frontend_id
     *
     * @return string
     */
    public function getFrontendId()
    {
        return $this->container['frontend_id'];
    }

    /**
     * Sets frontend_id
     *
     * @param string $frontend_id Shared secret used in conjunction with <a href=\"#section/Frontend-API/SignRequest-js-client-(beta)\">SignRequest-js client</a> to grant user access to a document that's not a member of the document's team
     *
     * @return $this
     */
    public function setFrontendId($frontend_id)
    {
        if (!is_null($frontend_id) && (mb_strlen($frontend_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $frontend_id when calling Document., must be smaller than or equal to 255.');
        }

        $this->container['frontend_id'] = $frontend_id;

        return $this;
    }

    /**
     * Gets file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string $file Temporary URL to original file, expires in five minutes
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets file_from_url
     *
     * @return string
     */
    public function getFileFromUrl()
    {
        return $this->container['file_from_url'];
    }

    /**
     * Sets file_from_url
     *
     * @param string $file_from_url Publicly accessible URL of document to be downloaded by SignRequest
     *
     * @return $this
     */
    public function setFileFromUrl($file_from_url)
    {
        if (!is_null($file_from_url) && (mb_strlen($file_from_url) > 2100)) {
            throw new \InvalidArgumentException('invalid length for $file_from_url when calling Document., must be smaller than or equal to 2100.');
        }

        $this->container['file_from_url'] = $file_from_url;

        return $this;
    }

    /**
     * Gets events_callback_url
     *
     * @return string
     */
    public function getEventsCallbackUrl()
    {
        return $this->container['events_callback_url'];
    }

    /**
     * Sets events_callback_url
     *
     * @param string $events_callback_url URL at which to receive [event callbacks](#section/Events/Events-callback) for this document
     *
     * @return $this
     */
    public function setEventsCallbackUrl($events_callback_url)
    {
        if (!is_null($events_callback_url) && (mb_strlen($events_callback_url) > 2100)) {
            throw new \InvalidArgumentException('invalid length for $events_callback_url when calling Document., must be smaller than or equal to 2100.');
        }

        $this->container['events_callback_url'] = $events_callback_url;

        return $this;
    }

    /**
     * Gets file_from_content
     *
     * @return string
     */
    public function getFileFromContent()
    {
        return $this->container['file_from_content'];
    }

    /**
     * Sets file_from_content
     *
     * @param string $file_from_content Base64 encoded document content
     *
     * @return $this
     */
    public function setFileFromContent($file_from_content)
    {
        $this->container['file_from_content'] = $file_from_content;

        return $this;
    }

    /**
     * Gets file_from_content_name
     *
     * @return string
     */
    public function getFileFromContentName()
    {
        return $this->container['file_from_content_name'];
    }

    /**
     * Sets file_from_content_name
     *
     * @param string $file_from_content_name Filename, including extension. Required when using `file_from_content`.
     *
     * @return $this
     */
    public function setFileFromContentName($file_from_content_name)
    {
        $this->container['file_from_content_name'] = $file_from_content_name;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets prefill_tags
     *
     * @return \SignRequest\Model\InlinePrefillTags[]
     */
    public function getPrefillTags()
    {
        return $this->container['prefill_tags'];
    }

    /**
     * Sets prefill_tags
     *
     * @param \SignRequest\Model\InlinePrefillTags[] $prefill_tags Prefill signer input data, see [prefill tags](#section/Preparing-a-document/Prefill-tags-templates)
     *
     * @return $this
     */
    public function setPrefillTags($prefill_tags)
    {
        $this->container['prefill_tags'] = $prefill_tags;

        return $this;
    }

    /**
     * Gets integrations
     *
     * @return \SignRequest\Model\InlineIntegrationData[]
     */
    public function getIntegrations()
    {
        return $this->container['integrations'];
    }

    /**
     * Sets integrations
     *
     * @param \SignRequest\Model\InlineIntegrationData[] $integrations integrations
     *
     * @return $this
     */
    public function setIntegrations($integrations)
    {
        $this->container['integrations'] = $integrations;

        return $this;
    }

    /**
     * Gets file_from_sf
     *
     * @return \SignRequest\Model\FileFromSf
     */
    public function getFileFromSf()
    {
        return $this->container['file_from_sf'];
    }

    /**
     * Sets file_from_sf
     *
     * @param \SignRequest\Model\FileFromSf $file_from_sf file_from_sf
     *
     * @return $this
     */
    public function setFileFromSf($file_from_sf)
    {
        $this->container['file_from_sf'] = $file_from_sf;

        return $this;
    }

    /**
     * Gets auto_delete_days
     *
     * @return int
     */
    public function getAutoDeleteDays()
    {
        return $this->container['auto_delete_days'];
    }

    /**
     * Sets auto_delete_days
     *
     * @param int $auto_delete_days Number of days after which a finished document (signed/cancelled/declined) will be automatically deleted
     *
     * @return $this
     */
    public function setAutoDeleteDays($auto_delete_days)
    {

        if (!is_null($auto_delete_days) && ($auto_delete_days > 730)) {
            throw new \InvalidArgumentException('invalid value for $auto_delete_days when calling Document., must be smaller than or equal to 730.');
        }
        if (!is_null($auto_delete_days) && ($auto_delete_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $auto_delete_days when calling Document., must be bigger than or equal to 1.');
        }

        $this->container['auto_delete_days'] = $auto_delete_days;

        return $this;
    }

    /**
     * Gets auto_expire_days
     *
     * @return int
     */
    public function getAutoExpireDays()
    {
        return $this->container['auto_expire_days'];
    }

    /**
     * Sets auto_expire_days
     *
     * @param int $auto_expire_days Number of days after which a non finished document will be automatically expired
     *
     * @return $this
     */
    public function setAutoExpireDays($auto_expire_days)
    {

        if (!is_null($auto_expire_days) && ($auto_expire_days > 730)) {
            throw new \InvalidArgumentException('invalid value for $auto_expire_days when calling Document., must be smaller than or equal to 730.');
        }
        if (!is_null($auto_expire_days) && ($auto_expire_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $auto_expire_days when calling Document., must be bigger than or equal to 1.');
        }

        $this->container['auto_expire_days'] = $auto_expire_days;

        return $this;
    }

    /**
     * Gets pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->container['pdf'];
    }

    /**
     * Sets pdf
     *
     * @param string $pdf Temporary URL to signed document as PDF, expires in five minutes
     *
     * @return $this
     */
    public function setPdf($pdf)
    {
        $this->container['pdf'] = $pdf;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status `co`: converting, `ne`: new, `se`: sent, `vi`: viewed, `si`: signed, `do`: downloaded, `sd`: signed and downloaded, `ca`: cancelled, `de`: declined, `ec`: error converting, `es`: error sending, `xp`: expired
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets signrequest
     *
     * @return \SignRequest\Model\DocumentSignrequest
     */
    public function getSignrequest()
    {
        return $this->container['signrequest'];
    }

    /**
     * Sets signrequest
     *
     * @param \SignRequest\Model\DocumentSignrequest $signrequest signrequest
     *
     * @return $this
     */
    public function setSignrequest($signrequest)
    {
        $this->container['signrequest'] = $signrequest;

        return $this;
    }

    /**
     * Gets api_used
     *
     * @return bool
     */
    public function getApiUsed()
    {
        return $this->container['api_used'];
    }

    /**
     * Sets api_used
     *
     * @param bool $api_used Indicates whether document was created using the API
     *
     * @return $this
     */
    public function setApiUsed($api_used)
    {
        $this->container['api_used'] = $api_used;

        return $this;
    }

    /**
     * Gets signing_log
     *
     * @return \SignRequest\Model\DocumentSigningLog
     */
    public function getSigningLog()
    {
        return $this->container['signing_log'];
    }

    /**
     * Sets signing_log
     *
     * @param \SignRequest\Model\DocumentSigningLog $signing_log signing_log
     *
     * @return $this
     */
    public function setSigningLog($signing_log)
    {
        $this->container['signing_log'] = $signing_log;

        return $this;
    }

    /**
     * Gets security_hash
     *
     * @return string
     */
    public function getSecurityHash()
    {
        return $this->container['security_hash'];
    }

    /**
     * Sets security_hash
     *
     * @param string $security_hash SHA256 hash of PDF contents
     *
     * @return $this
     */
    public function setSecurityHash($security_hash)
    {

        if (!is_null($security_hash) && (mb_strlen($security_hash) < 1)) {
            throw new \InvalidArgumentException('invalid length for $security_hash when calling Document., must be bigger than or equal to 1.');
        }

        $this->container['security_hash'] = $security_hash;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \SignRequest\Model\DocumentAttachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \SignRequest\Model\DocumentAttachment[] $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets auto_delete_after
     *
     * @return \DateTime
     */
    public function getAutoDeleteAfter()
    {
        return $this->container['auto_delete_after'];
    }

    /**
     * Sets auto_delete_after
     *
     * @param \DateTime $auto_delete_after Date and time calculated using `auto_delete_days` after which a finished document (signed/cancelled/declined) will be automatically deleted
     *
     * @return $this
     */
    public function setAutoDeleteAfter($auto_delete_after)
    {
        $this->container['auto_delete_after'] = $auto_delete_after;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return bool
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param bool $sandbox Indicates whether document was created as part of a sandbox team
     *
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets auto_expire_after
     *
     * @return \DateTime
     */
    public function getAutoExpireAfter()
    {
        return $this->container['auto_expire_after'];
    }

    /**
     * Sets auto_expire_after
     *
     * @param \DateTime $auto_expire_after Date and time calculated using `auto_expire_days` after which a non finished document will be automatically expired
     *
     * @return $this
     */
    public function setAutoExpireAfter($auto_expire_after)
    {
        $this->container['auto_expire_after'] = $auto_expire_after;

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


