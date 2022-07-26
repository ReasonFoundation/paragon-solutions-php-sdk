<?php
/**
 * Level3LineItemModel
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
 * Level3LineItemModel Class Doc Comment
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Level3LineItemModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Level3LineItemModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commodity_code' => 'string',
        'description' => 'string',
        'discount_amount' => 'string',
        'discount_included' => 'string',
        'line_item_total' => 'string',
        'product_code' => 'string',
        'quantity' => 'string',
        'tax_amount' => 'string',
        'tax_rate' => 'string',
        'tax_type' => 'string',
        'unit_of_measure' => 'string',
        'unit_price' => 'string',
        'tax_included' => 'string',
        'tax_invoice_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'commodity_code' => null,
        'description' => null,
        'discount_amount' => null,
        'discount_included' => null,
        'line_item_total' => null,
        'product_code' => null,
        'quantity' => null,
        'tax_amount' => null,
        'tax_rate' => null,
        'tax_type' => null,
        'unit_of_measure' => null,
        'unit_price' => null,
        'tax_included' => null,
        'tax_invoice_number' => null
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
        'commodity_code' => 'commodity_code',
        'description' => 'description',
        'discount_amount' => 'discount_amount',
        'discount_included' => 'discount_included',
        'line_item_total' => 'line_item_total',
        'product_code' => 'product_code',
        'quantity' => 'quantity',
        'tax_amount' => 'tax_amount',
        'tax_rate' => 'tax_rate',
        'tax_type' => 'tax_type',
        'unit_of_measure' => 'unit_of_measure',
        'unit_price' => 'unit_price',
        'tax_included' => 'tax_included',
        'tax_invoice_number' => 'tax_invoice_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commodity_code' => 'setCommodityCode',
        'description' => 'setDescription',
        'discount_amount' => 'setDiscountAmount',
        'discount_included' => 'setDiscountIncluded',
        'line_item_total' => 'setLineItemTotal',
        'product_code' => 'setProductCode',
        'quantity' => 'setQuantity',
        'tax_amount' => 'setTaxAmount',
        'tax_rate' => 'setTaxRate',
        'tax_type' => 'setTaxType',
        'unit_of_measure' => 'setUnitOfMeasure',
        'unit_price' => 'setUnitPrice',
        'tax_included' => 'setTaxIncluded',
        'tax_invoice_number' => 'setTaxInvoiceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commodity_code' => 'getCommodityCode',
        'description' => 'getDescription',
        'discount_amount' => 'getDiscountAmount',
        'discount_included' => 'getDiscountIncluded',
        'line_item_total' => 'getLineItemTotal',
        'product_code' => 'getProductCode',
        'quantity' => 'getQuantity',
        'tax_amount' => 'getTaxAmount',
        'tax_rate' => 'getTaxRate',
        'tax_type' => 'getTaxType',
        'unit_of_measure' => 'getUnitOfMeasure',
        'unit_price' => 'getUnitPrice',
        'tax_included' => 'getTaxIncluded',
        'tax_invoice_number' => 'getTaxInvoiceNumber'
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

    public const DISCOUNT_INCLUDED_TRUE = 'true';
    public const DISCOUNT_INCLUDED_FALSE = 'false';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDiscountIncludedAllowableValues()
    {
        return [
            self::DISCOUNT_INCLUDED_TRUE,
            self::DISCOUNT_INCLUDED_FALSE,
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
        $this->container['commodity_code'] = $data['commodity_code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['discount_amount'] = $data['discount_amount'] ?? null;
        $this->container['discount_included'] = $data['discount_included'] ?? null;
        $this->container['line_item_total'] = $data['line_item_total'] ?? null;
        $this->container['product_code'] = $data['product_code'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['tax_type'] = $data['tax_type'] ?? null;
        $this->container['unit_of_measure'] = $data['unit_of_measure'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['tax_included'] = $data['tax_included'] ?? null;
        $this->container['tax_invoice_number'] = $data['tax_invoice_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['commodity_code'] === null) {
            $invalidProperties[] = "'commodity_code' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['discount_amount'] === null) {
            $invalidProperties[] = "'discount_amount' can't be null";
        }
        if ($this->container['discount_included'] === null) {
            $invalidProperties[] = "'discount_included' can't be null";
        }
        $allowedValues = $this->getDiscountIncludedAllowableValues();
        if (!is_null($this->container['discount_included']) && !in_array($this->container['discount_included'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'discount_included', must be one of '%s'",
                $this->container['discount_included'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['line_item_total'] === null) {
            $invalidProperties[] = "'line_item_total' can't be null";
        }
        if ($this->container['product_code'] === null) {
            $invalidProperties[] = "'product_code' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['tax_amount'] === null) {
            $invalidProperties[] = "'tax_amount' can't be null";
        }
        if ($this->container['tax_rate'] === null) {
            $invalidProperties[] = "'tax_rate' can't be null";
        }
        if ($this->container['tax_type'] === null) {
            $invalidProperties[] = "'tax_type' can't be null";
        }
        if ($this->container['unit_of_measure'] === null) {
            $invalidProperties[] = "'unit_of_measure' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['tax_included'] === null) {
            $invalidProperties[] = "'tax_included' can't be null";
        }
        if ($this->container['tax_invoice_number'] === null) {
            $invalidProperties[] = "'tax_invoice_number' can't be null";
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
     * Gets commodity_code
     *
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->container['commodity_code'];
    }

    /**
     * Sets commodity_code
     *
     * @param string $commodity_code Commodity/Service classification of item.
     *
     * @return self
     */
    public function setCommodityCode($commodity_code)
    {
        $this->container['commodity_code'] = $commodity_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Item description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param string $discount_amount Discount applied to item.
     *
     * @return self
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets discount_included
     *
     * @return string
     */
    public function getDiscountIncluded()
    {
        return $this->container['discount_included'];
    }

    /**
     * Sets discount_included
     *
     * @param string $discount_included Indicator defining if Discount is included in amount.
     *
     * @return self
     */
    public function setDiscountIncluded($discount_included)
    {
        $allowedValues = $this->getDiscountIncludedAllowableValues();
        if (!in_array($discount_included, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'discount_included', must be one of '%s'",
                    $discount_included,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['discount_included'] = $discount_included;

        return $this;
    }

    /**
     * Gets line_item_total
     *
     * @return string
     */
    public function getLineItemTotal()
    {
        return $this->container['line_item_total'];
    }

    /**
     * Sets line_item_total
     *
     * @param string $line_item_total Subtotal for item (Amount – DiscountAmount + TaxAmount).
     *
     * @return self
     */
    public function setLineItemTotal($line_item_total)
    {
        $this->container['line_item_total'] = $line_item_total;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string $product_code Product code for item assigned by merchant.
     *
     * @return self
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity Number of units of item in order.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param string $tax_amount Total tax to apply to item (see also TaxIncluded).
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return string
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param string $tax_rate Tax rate applied to item.
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string $tax_type Tax table applied to item.
     *
     * @return self
     */
    public function setTaxType($tax_type)
    {
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets unit_of_measure
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     *
     * @param string $unit_of_measure Division of quantity accepted as standard for exchange.
     *
     * @return self
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param string $unit_price Cost of item per unit.
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets tax_included
     *
     * @return string
     */
    public function getTaxIncluded()
    {
        return $this->container['tax_included'];
    }

    /**
     * Sets tax_included
     *
     * @param string $tax_included Cost of item per unit.
     *
     * @return self
     */
    public function setTaxIncluded($tax_included)
    {
        $this->container['tax_included'] = $tax_included;

        return $this;
    }

    /**
     * Gets tax_invoice_number
     *
     * @return string
     */
    public function getTaxInvoiceNumber()
    {
        return $this->container['tax_invoice_number'];
    }

    /**
     * Sets tax_invoice_number
     *
     * @param string $tax_invoice_number Cost of item per unit.
     *
     * @return self
     */
    public function setTaxInvoiceNumber($tax_invoice_number)
    {
        $this->container['tax_invoice_number'] = $tax_invoice_number;

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


