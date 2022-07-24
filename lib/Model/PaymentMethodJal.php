<?php
/**
 * PaymentMethodJal
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PARAGON PAYMENT SOLUTIONS REST API
 *
 * <h2>Paragon Processing Platform</h2><p>This document is to provide a detailed description of how a developer or software solution provider can integrate with the Paragon Processing Platform (Paragon Platform).  <br>The Paragon Platform is for developers who wish to use Paragon's processing services within their software applications.  The Paragon Platform can stand alone as a web-based storefront with (or without) attached card readers or may be used in combination with point-of-sale (POS) and order entry applications.<br>The Paragon Platform accepts payments in many forms, including check, credit, debit, gift, loyalty and EBT cards. Payments may be taken online, over the telephone, from a mobile phone and at physical store locations. In addition to handling large volumes of payment transactions, the Paragon Platform manages and settles batches, protects sensitive card information, administers billing contracts and produces operational and analytical reports. </p><br><h2>Application Programming Interfaces (APIs)</h2><img src=\"../../Media/Images/Paragon_API_Communication.png\" alt=\"\" width=\"624\" height=\"242\"> <p>With our API, software systems and devices communicate with the Paragon Platform by exchanging messages.  <ol> <li>Client Application formulates a message and transmits the request to the Paragon Platform.</li> <li>The Paragon Platform translates the request and relays it to the Payment Processing Network.</li> <li>The Payment Processing Network processes the request and returns a response to the Paragon Platform.</li> <li>The Paragon Platform translates the response and relays it to the Client Application.</li></ol></p><br><h2>The Path to Integration </h2><img src=\"../../Media/Images/Paragon_Path_To_Integration.png\" alt=\"\" width=\"624\" height=\"258\"> <p><br><h3>Step 1: Open a Test Account </h3><p>Visit https://developer.paragonsolutions.com/testaccount to register for a free test account. Once registered you have instant access to your test account credentials and all the documentation you need to get started.  Head over to the library and make sure to check out all of our API's to learn about the Paragon Processing Platform transaction requests and responses.</p><br><h3>Step 2: Code & Certify</h3><p>Once in the Paragon Development portal, begin your certification or have an experienced Paragon integration specialist guide you through the testing process.  Once coding and testing are completed submit your request for certification.   Our team will then perform a detailed review of your integration to make sure your integration meets all your business requirements for success. </p><br><h3>Step 3: Go Live!</h3><p>After final review and testing your software solution is ready to begin taking live payments!  We know, an integration that is easy sounds too good to be true.  Don't take our word for it, start your integration today! </p><p><h3>Developer Notes</h3><ul><li>Install your development platform according to its product documentation.</li><li>Read through all the steps before you get started. We recommend reviewing the rest of this guide to familiarize yourself with the Paragon Processing Platform's terms, capabilities, web services and operations.</li></ul></p></p>
 *
 * The version of the OpenAPI document: 2.0
 * Contact: isvsupport@paragonsolutions.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DCarbone\ParagonSolutionsPHPSDK\Model;

use \ArrayAccess;
use \DCarbone\ParagonSolutionsPHPSDK\ObjectSerializer;

/**
 * PaymentMethodJal Class Doc Comment
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethodJal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethodJal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'processor_name' => 'string',
        'payment_method_profile_key' => 'string',
        'payment_method_key' => 'string',
        'agent_bank_number' => 'string',
        'amex_merch_seller_id' => 'string',
        'bin_number' => 'string',
        'category_code' => 'string',
        'chain_number' => 'string',
        'connection_method' => 'string',
        'country_code' => 'string',
        'currency_id' => 'string',
        'customer_service_phone_number' => 'string',
        'group_number' => 'string',
        'industry_type' => 'string',
        'input_device_id' => 'string',
        'location_number' => 'string',
        'merchant_number' => 'string',
        'partial_auth_support' => 'string',
        'postal_code' => 'string',
        'purefac_name' => 'string',
        'purefac_or_marketplace_id' => 'string',
        'psp_name' => 'string',
        'store_number' => 'string',
        'terminal_number' => 'string',
        'time_zone_id' => 'string',
        'v_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'processor_name' => null,
        'payment_method_profile_key' => null,
        'payment_method_key' => null,
        'agent_bank_number' => null,
        'amex_merch_seller_id' => null,
        'bin_number' => null,
        'category_code' => null,
        'chain_number' => null,
        'connection_method' => null,
        'country_code' => null,
        'currency_id' => null,
        'customer_service_phone_number' => null,
        'group_number' => null,
        'industry_type' => null,
        'input_device_id' => null,
        'location_number' => null,
        'merchant_number' => null,
        'partial_auth_support' => null,
        'postal_code' => null,
        'purefac_name' => null,
        'purefac_or_marketplace_id' => null,
        'psp_name' => null,
        'store_number' => null,
        'terminal_number' => null,
        'time_zone_id' => null,
        'v_number' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'processor_name' => 'processor_name',
        'payment_method_profile_key' => 'payment_method_profile_key',
        'payment_method_key' => 'payment_method_key',
        'agent_bank_number' => 'agent_bank_number',
        'amex_merch_seller_id' => 'amex_merch_seller_id',
        'bin_number' => 'bin_number',
        'category_code' => 'category_code',
        'chain_number' => 'chain_number',
        'connection_method' => 'connection_method',
        'country_code' => 'country_code',
        'currency_id' => 'currency_id',
        'customer_service_phone_number' => 'customer_service_phone_number',
        'group_number' => 'group_number',
        'industry_type' => 'industry_type',
        'input_device_id' => 'input_device_id',
        'location_number' => 'location_number',
        'merchant_number' => 'merchant_number',
        'partial_auth_support' => 'partial_auth_support',
        'postal_code' => 'postal_code',
        'purefac_name' => 'purefac_name',
        'purefac_or_marketplace_id' => 'purefac_or_marketplace_id',
        'psp_name' => 'psp_name',
        'store_number' => 'store_number',
        'terminal_number' => 'terminal_number',
        'time_zone_id' => 'time_zone_id',
        'v_number' => 'v_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'processor_name' => 'setProcessorName',
        'payment_method_profile_key' => 'setPaymentMethodProfileKey',
        'payment_method_key' => 'setPaymentMethodKey',
        'agent_bank_number' => 'setAgentBankNumber',
        'amex_merch_seller_id' => 'setAmexMerchSellerId',
        'bin_number' => 'setBinNumber',
        'category_code' => 'setCategoryCode',
        'chain_number' => 'setChainNumber',
        'connection_method' => 'setConnectionMethod',
        'country_code' => 'setCountryCode',
        'currency_id' => 'setCurrencyId',
        'customer_service_phone_number' => 'setCustomerServicePhoneNumber',
        'group_number' => 'setGroupNumber',
        'industry_type' => 'setIndustryType',
        'input_device_id' => 'setInputDeviceId',
        'location_number' => 'setLocationNumber',
        'merchant_number' => 'setMerchantNumber',
        'partial_auth_support' => 'setPartialAuthSupport',
        'postal_code' => 'setPostalCode',
        'purefac_name' => 'setPurefacName',
        'purefac_or_marketplace_id' => 'setPurefacOrMarketplaceId',
        'psp_name' => 'setPspName',
        'store_number' => 'setStoreNumber',
        'terminal_number' => 'setTerminalNumber',
        'time_zone_id' => 'setTimeZoneId',
        'v_number' => 'setVNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'processor_name' => 'getProcessorName',
        'payment_method_profile_key' => 'getPaymentMethodProfileKey',
        'payment_method_key' => 'getPaymentMethodKey',
        'agent_bank_number' => 'getAgentBankNumber',
        'amex_merch_seller_id' => 'getAmexMerchSellerId',
        'bin_number' => 'getBinNumber',
        'category_code' => 'getCategoryCode',
        'chain_number' => 'getChainNumber',
        'connection_method' => 'getConnectionMethod',
        'country_code' => 'getCountryCode',
        'currency_id' => 'getCurrencyId',
        'customer_service_phone_number' => 'getCustomerServicePhoneNumber',
        'group_number' => 'getGroupNumber',
        'industry_type' => 'getIndustryType',
        'input_device_id' => 'getInputDeviceId',
        'location_number' => 'getLocationNumber',
        'merchant_number' => 'getMerchantNumber',
        'partial_auth_support' => 'getPartialAuthSupport',
        'postal_code' => 'getPostalCode',
        'purefac_name' => 'getPurefacName',
        'purefac_or_marketplace_id' => 'getPurefacOrMarketplaceId',
        'psp_name' => 'getPspName',
        'store_number' => 'getStoreNumber',
        'terminal_number' => 'getTerminalNumber',
        'time_zone_id' => 'getTimeZoneId',
        'v_number' => 'getVNumber'
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

    public const CONNECTION_METHOD_SSL2 = 'SSL2';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConnectionMethodAllowableValues()
    {
        return [
            self::CONNECTION_METHOD_SSL2,
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
        $this->container['processor_name'] = $data['processor_name'] ?? null;
        $this->container['payment_method_profile_key'] = $data['payment_method_profile_key'] ?? null;
        $this->container['payment_method_key'] = $data['payment_method_key'] ?? null;
        $this->container['agent_bank_number'] = $data['agent_bank_number'] ?? null;
        $this->container['amex_merch_seller_id'] = $data['amex_merch_seller_id'] ?? null;
        $this->container['bin_number'] = $data['bin_number'] ?? null;
        $this->container['category_code'] = $data['category_code'] ?? null;
        $this->container['chain_number'] = $data['chain_number'] ?? null;
        $this->container['connection_method'] = $data['connection_method'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['currency_id'] = $data['currency_id'] ?? null;
        $this->container['customer_service_phone_number'] = $data['customer_service_phone_number'] ?? null;
        $this->container['group_number'] = $data['group_number'] ?? null;
        $this->container['industry_type'] = $data['industry_type'] ?? null;
        $this->container['input_device_id'] = $data['input_device_id'] ?? null;
        $this->container['location_number'] = $data['location_number'] ?? null;
        $this->container['merchant_number'] = $data['merchant_number'] ?? null;
        $this->container['partial_auth_support'] = $data['partial_auth_support'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['purefac_name'] = $data['purefac_name'] ?? null;
        $this->container['purefac_or_marketplace_id'] = $data['purefac_or_marketplace_id'] ?? null;
        $this->container['psp_name'] = $data['psp_name'] ?? null;
        $this->container['store_number'] = $data['store_number'] ?? null;
        $this->container['terminal_number'] = $data['terminal_number'] ?? null;
        $this->container['time_zone_id'] = $data['time_zone_id'] ?? null;
        $this->container['v_number'] = $data['v_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConnectionMethodAllowableValues();
        if (!is_null($this->container['connection_method']) && !in_array($this->container['connection_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'connection_method', must be one of '%s'",
                $this->container['connection_method'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['customer_service_phone_number']) && (mb_strlen($this->container['customer_service_phone_number']) < 11)) {
            $invalidProperties[] = "invalid value for 'customer_service_phone_number', the character length must be bigger than or equal to 11.";
        }

        if (!is_null($this->container['purefac_or_marketplace_id']) && (mb_strlen($this->container['purefac_or_marketplace_id']) > 11)) {
            $invalidProperties[] = "invalid value for 'purefac_or_marketplace_id', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['psp_name']) && (mb_strlen($this->container['psp_name']) > 20)) {
            $invalidProperties[] = "invalid value for 'psp_name', the character length must be smaller than or equal to 20.";
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
     * Gets processor_name
     *
     * @return string|null
     */
    public function getProcessorName()
    {
        return $this->container['processor_name'];
    }

    /**
     * Sets processor_name
     *
     * @param string|null $processor_name Supported TSYS Processor ID's are as followed:  TSYS, TSYSVPN, TSYSPARAGN, TSYSPPFAC, and TSYSPFAC  If none is specified, TSYS will be used
     *
     * @return self
     */
    public function setProcessorName($processor_name)
    {
        $this->container['processor_name'] = $processor_name;

        return $this;
    }

    /**
     * Gets payment_method_profile_key
     *
     * @return string|null
     */
    public function getPaymentMethodProfileKey()
    {
        return $this->container['payment_method_profile_key'];
    }

    /**
     * Sets payment_method_profile_key
     *
     * @param string|null $payment_method_profile_key Payment Method Profile Key (Inactive Profile)
     *
     * @return self
     */
    public function setPaymentMethodProfileKey($payment_method_profile_key)
    {
        $this->container['payment_method_profile_key'] = $payment_method_profile_key;

        return $this;
    }

    /**
     * Gets payment_method_key
     *
     * @return string|null
     */
    public function getPaymentMethodKey()
    {
        return $this->container['payment_method_key'];
    }

    /**
     * Sets payment_method_key
     *
     * @param string|null $payment_method_key Payment Method Key (Active Profile)
     *
     * @return self
     */
    public function setPaymentMethodKey($payment_method_key)
    {
        $this->container['payment_method_key'] = $payment_method_key;

        return $this;
    }

    /**
     * Gets agent_bank_number
     *
     * @return string|null
     */
    public function getAgentBankNumber()
    {
        return $this->container['agent_bank_number'];
    }

    /**
     * Sets agent_bank_number
     *
     * @param string|null $agent_bank_number Agent Bank Number
     *
     * @return self
     */
    public function setAgentBankNumber($agent_bank_number)
    {
        $this->container['agent_bank_number'] = $agent_bank_number;

        return $this;
    }

    /**
     * Gets amex_merch_seller_id
     *
     * @return string|null
     */
    public function getAmexMerchSellerId()
    {
        return $this->container['amex_merch_seller_id'];
    }

    /**
     * Sets amex_merch_seller_id
     *
     * @param string|null $amex_merch_seller_id AMEX Merchant Seller ID, for American Express payment types, 1 to 20 numeric digits.
     *
     * @return self
     */
    public function setAmexMerchSellerId($amex_merch_seller_id)
    {
        $this->container['amex_merch_seller_id'] = $amex_merch_seller_id;

        return $this;
    }

    /**
     * Gets bin_number
     *
     * @return string|null
     */
    public function getBinNumber()
    {
        return $this->container['bin_number'];
    }

    /**
     * Sets bin_number
     *
     * @param string|null $bin_number BIN number
     *
     * @return self
     */
    public function setBinNumber($bin_number)
    {
        $this->container['bin_number'] = $bin_number;

        return $this;
    }

    /**
     * Gets category_code
     *
     * @return string|null
     */
    public function getCategoryCode()
    {
        return $this->container['category_code'];
    }

    /**
     * Sets category_code
     *
     * @param string|null $category_code Category Code
     *
     * @return self
     */
    public function setCategoryCode($category_code)
    {
        $this->container['category_code'] = $category_code;

        return $this;
    }

    /**
     * Gets chain_number
     *
     * @return string|null
     */
    public function getChainNumber()
    {
        return $this->container['chain_number'];
    }

    /**
     * Sets chain_number
     *
     * @param string|null $chain_number Chain number
     *
     * @return self
     */
    public function setChainNumber($chain_number)
    {
        $this->container['chain_number'] = $chain_number;

        return $this;
    }

    /**
     * Gets connection_method
     *
     * @return string|null
     */
    public function getConnectionMethod()
    {
        return $this->container['connection_method'];
    }

    /**
     * Sets connection_method
     *
     * @param string|null $connection_method 
     *
     * @return self
     */
    public function setConnectionMethod($connection_method)
    {
        $allowedValues = $this->getConnectionMethodAllowableValues();
        if (!is_null($connection_method) && !in_array($connection_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'connection_method', must be one of '%s'",
                    $connection_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['connection_method'] = $connection_method;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code Country Code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string|null
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string|null $currency_id Currency ID
     *
     * @return self
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets customer_service_phone_number
     *
     * @return string|null
     */
    public function getCustomerServicePhoneNumber()
    {
        return $this->container['customer_service_phone_number'];
    }

    /**
     * Sets customer_service_phone_number
     *
     * @param string|null $customer_service_phone_number Customer Service Number
     *
     * @return self
     */
    public function setCustomerServicePhoneNumber($customer_service_phone_number)
    {

        if (!is_null($customer_service_phone_number) && (mb_strlen($customer_service_phone_number) < 11)) {
            throw new \InvalidArgumentException('invalid length for $customer_service_phone_number when calling PaymentMethodJal., must be bigger than or equal to 11.');
        }

        $this->container['customer_service_phone_number'] = $customer_service_phone_number;

        return $this;
    }

    /**
     * Gets group_number
     *
     * @return string|null
     */
    public function getGroupNumber()
    {
        return $this->container['group_number'];
    }

    /**
     * Sets group_number
     *
     * @param string|null $group_number Group Number
     *
     * @return self
     */
    public function setGroupNumber($group_number)
    {
        $this->container['group_number'] = $group_number;

        return $this;
    }

    /**
     * Gets industry_type
     *
     * @return string|null
     */
    public function getIndustryType()
    {
        return $this->container['industry_type'];
    }

    /**
     * Sets industry_type
     *
     * @param string|null $industry_type Industry Type
     *
     * @return self
     */
    public function setIndustryType($industry_type)
    {
        $this->container['industry_type'] = $industry_type;

        return $this;
    }

    /**
     * Gets input_device_id
     *
     * @return string|null
     */
    public function getInputDeviceId()
    {
        return $this->container['input_device_id'];
    }

    /**
     * Sets input_device_id
     *
     * @param string|null $input_device_id Input device ID
     *
     * @return self
     */
    public function setInputDeviceId($input_device_id)
    {
        $this->container['input_device_id'] = $input_device_id;

        return $this;
    }

    /**
     * Gets location_number
     *
     * @return string|null
     */
    public function getLocationNumber()
    {
        return $this->container['location_number'];
    }

    /**
     * Sets location_number
     *
     * @param string|null $location_number Location number
     *
     * @return self
     */
    public function setLocationNumber($location_number)
    {
        $this->container['location_number'] = $location_number;

        return $this;
    }

    /**
     * Gets merchant_number
     *
     * @return string|null
     */
    public function getMerchantNumber()
    {
        return $this->container['merchant_number'];
    }

    /**
     * Sets merchant_number
     *
     * @param string|null $merchant_number Merchant number
     *
     * @return self
     */
    public function setMerchantNumber($merchant_number)
    {
        $this->container['merchant_number'] = $merchant_number;

        return $this;
    }

    /**
     * Gets partial_auth_support
     *
     * @return string|null
     */
    public function getPartialAuthSupport()
    {
        return $this->container['partial_auth_support'];
    }

    /**
     * Sets partial_auth_support
     *
     * @param string|null $partial_auth_support Partial Auth Support
     *
     * @return self
     */
    public function setPartialAuthSupport($partial_auth_support)
    {
        $this->container['partial_auth_support'] = $partial_auth_support;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Postal Code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets purefac_name
     *
     * @return string|null
     */
    public function getPurefacName()
    {
        return $this->container['purefac_name'];
    }

    /**
     * Sets purefac_name
     *
     * @param string|null $purefac_name 3 Letter Pure Fac Name Abbreviaton : ex: PAR
     *
     * @return self
     */
    public function setPurefacName($purefac_name)
    {
        $this->container['purefac_name'] = $purefac_name;

        return $this;
    }

    /**
     * Gets purefac_or_marketplace_id
     *
     * @return string|null
     */
    public function getPurefacOrMarketplaceId()
    {
        return $this->container['purefac_or_marketplace_id'];
    }

    /**
     * Sets purefac_or_marketplace_id
     *
     * @param string|null $purefac_or_marketplace_id Purefac Facilitator or marketplace ID ex: 123456
     *
     * @return self
     */
    public function setPurefacOrMarketplaceId($purefac_or_marketplace_id)
    {
        if (!is_null($purefac_or_marketplace_id) && (mb_strlen($purefac_or_marketplace_id) > 11)) {
            throw new \InvalidArgumentException('invalid length for $purefac_or_marketplace_id when calling PaymentMethodJal., must be smaller than or equal to 11.');
        }

        $this->container['purefac_or_marketplace_id'] = $purefac_or_marketplace_id;

        return $this;
    }

    /**
     * Gets psp_name
     *
     * @return string|null
     */
    public function getPspName()
    {
        return $this->container['psp_name'];
    }

    /**
     * Sets psp_name
     *
     * @param string|null $psp_name Pure Fac Full Name : ex: PARAGON
     *
     * @return self
     */
    public function setPspName($psp_name)
    {
        if (!is_null($psp_name) && (mb_strlen($psp_name) > 20)) {
            throw new \InvalidArgumentException('invalid length for $psp_name when calling PaymentMethodJal., must be smaller than or equal to 20.');
        }

        $this->container['psp_name'] = $psp_name;

        return $this;
    }

    /**
     * Gets store_number
     *
     * @return string|null
     */
    public function getStoreNumber()
    {
        return $this->container['store_number'];
    }

    /**
     * Sets store_number
     *
     * @param string|null $store_number Store number
     *
     * @return self
     */
    public function setStoreNumber($store_number)
    {
        $this->container['store_number'] = $store_number;

        return $this;
    }

    /**
     * Gets terminal_number
     *
     * @return string|null
     */
    public function getTerminalNumber()
    {
        return $this->container['terminal_number'];
    }

    /**
     * Sets terminal_number
     *
     * @param string|null $terminal_number Terminal number
     *
     * @return self
     */
    public function setTerminalNumber($terminal_number)
    {
        $this->container['terminal_number'] = $terminal_number;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string|null
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string|null $time_zone_id Time Zone ID
     *
     * @return self
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets v_number
     *
     * @return string|null
     */
    public function getVNumber()
    {
        return $this->container['v_number'];
    }

    /**
     * Sets v_number
     *
     * @param string|null $v_number V Number
     *
     * @return self
     */
    public function setVNumber($v_number)
    {
        $this->container['v_number'] = $v_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


