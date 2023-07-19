<?php
/**
 * Wallet
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * BVNK API Endpoints
 *
 * The BVNK API is designed to facilitate seamless and secure transactions including payments, channels, anddigital wallet transactions.
 *
 * The version of the OpenAPI document: 1.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Wallet Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Wallet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Wallet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'alternatives' => 'mixed[]',
        'approx_available' => 'string',
        'approx_balance' => 'string',
        'available' => 'float',
        'balance' => 'float',
        'converted_available' => 'float',
        'currency' => '\OpenAPI\Client\Model\Currency',
        'custodian_wallet' => 'bool',
        'deposit_fee' => 'float',
        'description' => 'string',
        'id' => 'int',
        'is_emoney' => 'bool',
        'lookup' => 'string',
        'protocol' => 'string',
        'supports_deposits' => 'bool',
        'supports_third_party' => 'bool',
        'supports_withdrawals' => 'bool',
        'withdrawal_fee' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'alternatives' => null,
        'approx_available' => null,
        'approx_balance' => null,
        'available' => 'float',
        'balance' => 'float',
        'converted_available' => 'float',
        'currency' => null,
        'custodian_wallet' => null,
        'deposit_fee' => 'float',
        'description' => null,
        'id' => 'int64',
        'is_emoney' => null,
        'lookup' => null,
        'protocol' => null,
        'supports_deposits' => null,
        'supports_third_party' => null,
        'supports_withdrawals' => null,
        'withdrawal_fee' => 'float'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
		'alternatives' => false,
		'approx_available' => false,
		'approx_balance' => false,
		'available' => false,
		'balance' => false,
		'converted_available' => false,
		'currency' => false,
		'custodian_wallet' => false,
		'deposit_fee' => false,
		'description' => false,
		'id' => false,
		'is_emoney' => false,
		'lookup' => false,
		'protocol' => false,
		'supports_deposits' => false,
		'supports_third_party' => false,
		'supports_withdrawals' => false,
		'withdrawal_fee' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address' => 'address',
        'alternatives' => 'alternatives',
        'approx_available' => 'approxAvailable',
        'approx_balance' => 'approxBalance',
        'available' => 'available',
        'balance' => 'balance',
        'converted_available' => 'convertedAvailable',
        'currency' => 'currency',
        'custodian_wallet' => 'custodianWallet',
        'deposit_fee' => 'depositFee',
        'description' => 'description',
        'id' => 'id',
        'is_emoney' => 'isEmoney',
        'lookup' => 'lookup',
        'protocol' => 'protocol',
        'supports_deposits' => 'supportsDeposits',
        'supports_third_party' => 'supportsThirdParty',
        'supports_withdrawals' => 'supportsWithdrawals',
        'withdrawal_fee' => 'withdrawalFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'alternatives' => 'setAlternatives',
        'approx_available' => 'setApproxAvailable',
        'approx_balance' => 'setApproxBalance',
        'available' => 'setAvailable',
        'balance' => 'setBalance',
        'converted_available' => 'setConvertedAvailable',
        'currency' => 'setCurrency',
        'custodian_wallet' => 'setCustodianWallet',
        'deposit_fee' => 'setDepositFee',
        'description' => 'setDescription',
        'id' => 'setId',
        'is_emoney' => 'setIsEmoney',
        'lookup' => 'setLookup',
        'protocol' => 'setProtocol',
        'supports_deposits' => 'setSupportsDeposits',
        'supports_third_party' => 'setSupportsThirdParty',
        'supports_withdrawals' => 'setSupportsWithdrawals',
        'withdrawal_fee' => 'setWithdrawalFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'alternatives' => 'getAlternatives',
        'approx_available' => 'getApproxAvailable',
        'approx_balance' => 'getApproxBalance',
        'available' => 'getAvailable',
        'balance' => 'getBalance',
        'converted_available' => 'getConvertedAvailable',
        'currency' => 'getCurrency',
        'custodian_wallet' => 'getCustodianWallet',
        'deposit_fee' => 'getDepositFee',
        'description' => 'getDescription',
        'id' => 'getId',
        'is_emoney' => 'getIsEmoney',
        'lookup' => 'getLookup',
        'protocol' => 'getProtocol',
        'supports_deposits' => 'getSupportsDeposits',
        'supports_third_party' => 'getSupportsThirdParty',
        'supports_withdrawals' => 'getSupportsWithdrawals',
        'withdrawal_fee' => 'getWithdrawalFee'
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('alternatives', $data ?? [], null);
        $this->setIfExists('approx_available', $data ?? [], null);
        $this->setIfExists('approx_balance', $data ?? [], null);
        $this->setIfExists('available', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('converted_available', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('custodian_wallet', $data ?? [], null);
        $this->setIfExists('deposit_fee', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_emoney', $data ?? [], false);
        $this->setIfExists('lookup', $data ?? [], null);
        $this->setIfExists('protocol', $data ?? [], null);
        $this->setIfExists('supports_deposits', $data ?? [], true);
        $this->setIfExists('supports_third_party', $data ?? [], false);
        $this->setIfExists('supports_withdrawals', $data ?? [], true);
        $this->setIfExists('withdrawal_fee', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets alternatives
     *
     * @return mixed[]|null
     */
    public function getAlternatives()
    {
        return $this->container['alternatives'];
    }

    /**
     * Sets alternatives
     *
     * @param mixed[]|null $alternatives alternatives
     *
     * @return self
     */
    public function setAlternatives($alternatives)
    {
        if (is_null($alternatives)) {
            throw new \InvalidArgumentException('non-nullable alternatives cannot be null');
        }
        $this->container['alternatives'] = $alternatives;

        return $this;
    }

    /**
     * Gets approx_available
     *
     * @return string|null
     */
    public function getApproxAvailable()
    {
        return $this->container['approx_available'];
    }

    /**
     * Sets approx_available
     *
     * @param string|null $approx_available approx_available
     *
     * @return self
     */
    public function setApproxAvailable($approx_available)
    {
        if (is_null($approx_available)) {
            throw new \InvalidArgumentException('non-nullable approx_available cannot be null');
        }
        $this->container['approx_available'] = $approx_available;

        return $this;
    }

    /**
     * Gets approx_balance
     *
     * @return string|null
     */
    public function getApproxBalance()
    {
        return $this->container['approx_balance'];
    }

    /**
     * Sets approx_balance
     *
     * @param string|null $approx_balance approx_balance
     *
     * @return self
     */
    public function setApproxBalance($approx_balance)
    {
        if (is_null($approx_balance)) {
            throw new \InvalidArgumentException('non-nullable approx_balance cannot be null');
        }
        $this->container['approx_balance'] = $approx_balance;

        return $this;
    }

    /**
     * Gets available
     *
     * @return float|null
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param float|null $available available
     *
     * @return self
     */
    public function setAvailable($available)
    {
        if (is_null($available)) {
            throw new \InvalidArgumentException('non-nullable available cannot be null');
        }
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets converted_available
     *
     * @return float|null
     */
    public function getConvertedAvailable()
    {
        return $this->container['converted_available'];
    }

    /**
     * Sets converted_available
     *
     * @param float|null $converted_available converted_available
     *
     * @return self
     */
    public function setConvertedAvailable($converted_available)
    {
        if (is_null($converted_available)) {
            throw new \InvalidArgumentException('non-nullable converted_available cannot be null');
        }
        $this->container['converted_available'] = $converted_available;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets custodian_wallet
     *
     * @return bool|null
     */
    public function getCustodianWallet()
    {
        return $this->container['custodian_wallet'];
    }

    /**
     * Sets custodian_wallet
     *
     * @param bool|null $custodian_wallet custodian_wallet
     *
     * @return self
     */
    public function setCustodianWallet($custodian_wallet)
    {
        if (is_null($custodian_wallet)) {
            throw new \InvalidArgumentException('non-nullable custodian_wallet cannot be null');
        }
        $this->container['custodian_wallet'] = $custodian_wallet;

        return $this;
    }

    /**
     * Gets deposit_fee
     *
     * @return float|null
     */
    public function getDepositFee()
    {
        return $this->container['deposit_fee'];
    }

    /**
     * Sets deposit_fee
     *
     * @param float|null $deposit_fee deposit_fee
     *
     * @return self
     */
    public function setDepositFee($deposit_fee)
    {
        if (is_null($deposit_fee)) {
            throw new \InvalidArgumentException('non-nullable deposit_fee cannot be null');
        }
        $this->container['deposit_fee'] = $deposit_fee;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_emoney
     *
     * @return bool|null
     */
    public function getIsEmoney()
    {
        return $this->container['is_emoney'];
    }

    /**
     * Sets is_emoney
     *
     * @param bool|null $is_emoney is_emoney
     *
     * @return self
     */
    public function setIsEmoney($is_emoney)
    {
        if (is_null($is_emoney)) {
            throw new \InvalidArgumentException('non-nullable is_emoney cannot be null');
        }
        $this->container['is_emoney'] = $is_emoney;

        return $this;
    }

    /**
     * Gets lookup
     *
     * @return string|null
     */
    public function getLookup()
    {
        return $this->container['lookup'];
    }

    /**
     * Sets lookup
     *
     * @param string|null $lookup lookup
     *
     * @return self
     */
    public function setLookup($lookup)
    {
        if (is_null($lookup)) {
            throw new \InvalidArgumentException('non-nullable lookup cannot be null');
        }
        $this->container['lookup'] = $lookup;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string|null $protocol protocol
     *
     * @return self
     */
    public function setProtocol($protocol)
    {
        if (is_null($protocol)) {
            throw new \InvalidArgumentException('non-nullable protocol cannot be null');
        }
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets supports_deposits
     *
     * @return bool|null
     */
    public function getSupportsDeposits()
    {
        return $this->container['supports_deposits'];
    }

    /**
     * Sets supports_deposits
     *
     * @param bool|null $supports_deposits supports_deposits
     *
     * @return self
     */
    public function setSupportsDeposits($supports_deposits)
    {
        if (is_null($supports_deposits)) {
            throw new \InvalidArgumentException('non-nullable supports_deposits cannot be null');
        }
        $this->container['supports_deposits'] = $supports_deposits;

        return $this;
    }

    /**
     * Gets supports_third_party
     *
     * @return bool|null
     */
    public function getSupportsThirdParty()
    {
        return $this->container['supports_third_party'];
    }

    /**
     * Sets supports_third_party
     *
     * @param bool|null $supports_third_party supports_third_party
     *
     * @return self
     */
    public function setSupportsThirdParty($supports_third_party)
    {
        if (is_null($supports_third_party)) {
            throw new \InvalidArgumentException('non-nullable supports_third_party cannot be null');
        }
        $this->container['supports_third_party'] = $supports_third_party;

        return $this;
    }

    /**
     * Gets supports_withdrawals
     *
     * @return bool|null
     */
    public function getSupportsWithdrawals()
    {
        return $this->container['supports_withdrawals'];
    }

    /**
     * Sets supports_withdrawals
     *
     * @param bool|null $supports_withdrawals supports_withdrawals
     *
     * @return self
     */
    public function setSupportsWithdrawals($supports_withdrawals)
    {
        if (is_null($supports_withdrawals)) {
            throw new \InvalidArgumentException('non-nullable supports_withdrawals cannot be null');
        }
        $this->container['supports_withdrawals'] = $supports_withdrawals;

        return $this;
    }

    /**
     * Gets withdrawal_fee
     *
     * @return float|null
     */
    public function getWithdrawalFee()
    {
        return $this->container['withdrawal_fee'];
    }

    /**
     * Sets withdrawal_fee
     *
     * @param float|null $withdrawal_fee withdrawal_fee
     *
     * @return self
     */
    public function setWithdrawalFee($withdrawal_fee)
    {
        if (is_null($withdrawal_fee)) {
            throw new \InvalidArgumentException('non-nullable withdrawal_fee cannot be null');
        }
        $this->container['withdrawal_fee'] = $withdrawal_fee;

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

