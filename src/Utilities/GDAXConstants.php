<?php

namespace GDAX\Utilities;

/**
 * Class GDAXConstants
 *
 * @author Benjamin Franke
 */
class GDAXConstants {

    /**
     * @var string
     */
    const GDAX_API_URL = 'https://api.gdax.com';

    /**
     * @var string
     */
    const GDAX_API_SANDBOX_URL = 'https://api-public.sandbox.gdax.com';

    /**
     * @var string
     */
    const METHOD_GET = 'GET';

    /**
     * @var string
     */
    const METHOD_PUT = 'PUT';

    /**
     * @var string
     */
    const METHOD_POST = 'POST';

    /**
     * @var string
     */
    const METHOD_DELETE = 'DELETE';

    /**
     * @var string
     */
    const PRODUCT_ID_LTC_EUR = 'LTC-EUR';

    /**
     * @var string
     */
    const PRODUCT_ID_LTC_BTC = 'LTC-BTC';

    /**
     * @var string
     */
    const PRODUCT_ID_BTC_GBP = 'BTC-GBP';

    /**
     * @var string
     */
    const PRODUCT_ID_BTC_EUR = 'BTC-EUR';

    /**
     * @var string
     */
    const PRODUCT_ID_ETH_EUR = 'ETH-EUR';

    /**
     * @var string
     */
    const PRODUCT_ID_ETH_BTC = 'ETH-BTC';

    /**
     * @var string
     */
    const PRODUCT_ID_LTC_USD = 'LTC-USD';

    /**
     * @var string
     */
    const PRODUCT_ID_BTC_USD = 'BTC-USD';

    /**
     * @var string
     */
    const PRODUCT_ID_ETH_USD = 'ETH-USD';

    /**
     * @var string
     */
    const TIME_IN_FORCE_GTC = 'GTC';

    /**
     * @var string
     */
    const TIME_IN_FORCE_GTT = 'GTT';

    /**
     * @var string
     */
    const TIME_IN_FORCE_IOC = 'IOC';

    /**
     * @var string
     */
    const TIME_IN_FORCE_FOK = 'FOK';

    /**
     * @var string
     */
    const ORDER_TYPE_LIMIT = 'limit';

    /**
     * @var string
     */
    const ORDER_TYPE_MARKET = 'market';

    /**
     * @var string
     */
    const ORDER_TYPE_STOP = 'stop';

    /**
     * @var string
     */
    const ORDER_SIDE_BUY = 'buy';

    /**
     * @var string
     */
    const ORDER_SIDE_SELL = 'sell';

    /**
     * @var string
     */
    const STP_DC = 'dc';

    /**
     * @var string
     */
    const STP_CO = 'co';

    /**
     * @var string
     */
    const STP_CN = 'cn';

    /**
     * @var string
     */
    const STP_CB = 'cb';

    /**
     * @var string
     */
    const ORDER_STATUS_OPEN = 'open';

    /**
     * @var string
     */
    const ORDER_STATUS_PENDING = 'pending';

    /**
     * @var string
     */
    const ORDER_STATUS_ACTIVE = 'active';

    /**
     * @var string
     */
    const FUNDING_STATUS_OUTSTANDING = 'outstanding';

    /**
     * @var string
     */
    const FUNDING_STATUS_SETTLED = 'settled';

    /**
     * @var string
     */
    const FUNDING_STATUS_REJECTED = 'rejected';

    /**
     * @var string
     */
    const ORDER_STATUS_ALL = 'all';

    /**
     * @var string
     */
    const CURRENCY_USD = 'USD';

    /**
     * @var string
     */
    const CURRENCY_GBP = 'GBP';

    /**
     * @var string
     */
    const CURRENCY_EUR = 'EUR';

    /**
     * @var string
     */
    const CURRENCY_BTC = 'BTC';

    /**
     * @var string
     */
    const CURRENCY_ETH = 'ETH';

    /**
     * @var string
     */
    const CURRENCY_LTC = 'LTC';

    /**
     * @var string
     */
    const MARGIN_TRANSFER_TYPE_DEPOSIT = 'deposit';

    /**
     * @var string
     */
    const MARGIN_TRANSFER_TYPE_WITHDRAW = 'withdraw';

    /**
     * @var string
     */
    const REPORT_TYPE_FILLS = 'fills';

    /**
     * @var string
     */
    const REPORT_TYPE_ACCOUNT = 'account';

    /**
     * @var string
     */
    const REPORT_FORMAT_PDF = 'pdf';

    /**
     * @var string
     */
    const REPORT_FORMAT_CSV = 'csv';

    /**
     * @var string
     */
    const CANCEL_AFTER_MIN = 'min';

    /**
     * @var string
     */
    const CANCEL_AFTER_HOUR = 'hour';

    /**
     * @var string
     */
    const CANCEL_AFTER_DAY = 'day';

    /**
     * @var array
     */
    public static $defaultHeaders = [
        'User-Agent'   => 'gdax-php-client',
        'Accept'       => 'application/json',
        'Content-Type' => 'application/json',
    ];

    /**
     * @var array
     */
    public static $productIdValues = [
        self::PRODUCT_ID_LTC_EUR, self::PRODUCT_ID_LTC_BTC, self::PRODUCT_ID_BTC_GBP,
        self::PRODUCT_ID_BTC_EUR, self::PRODUCT_ID_ETH_EUR, self::PRODUCT_ID_ETH_BTC,
        self::PRODUCT_ID_LTC_USD, self::PRODUCT_ID_BTC_USD, self::PRODUCT_ID_ETH_USD,
    ];

    /**
     * @var array
     */
    public static $timeInForceValues = [
        self::TIME_IN_FORCE_GTC, self::TIME_IN_FORCE_GTT,
        self::TIME_IN_FORCE_IOC, self::TIME_IN_FORCE_FOK,
    ];

    /**
     * @var array
     */
    public static $cancelAfterValues = [
        self::CANCEL_AFTER_MIN, self::CANCEL_AFTER_HOUR, self::CANCEL_AFTER_DAY
    ];

    /**
     * @var array
     */
    public static $orderTypeValues = [
        self::ORDER_TYPE_LIMIT, self::ORDER_TYPE_MARKET, self::ORDER_TYPE_STOP,
    ];

    /**
     * @var array
     */
    public static $orderSideValues = [
        self::ORDER_SIDE_BUY, self::ORDER_SIDE_SELL,
    ];

    /**
     * @var array
     */
    public static $stpValues = [
        self::STP_DC, self::STP_CO, self::STP_CN, self::STP_CB,
    ];

    /**
     * @var array
     */
    public static $orderStatusValues = [
        self::ORDER_STATUS_OPEN, self::ORDER_STATUS_PENDING, self::ORDER_STATUS_ACTIVE, self::ORDER_STATUS_ALL,
    ];

    /**
     * @var array
     */
    public static $fundingStatusValues = [
        self::FUNDING_STATUS_OUTSTANDING, self::FUNDING_STATUS_REJECTED, self::FUNDING_STATUS_SETTLED
    ];

    /**
     * @var array
     */
    public static $currencyValues = [
        self::CURRENCY_USD, self::CURRENCY_GBP, self::CURRENCY_EUR,
        self::CURRENCY_BTC, self::CURRENCY_ETH, self::CURRENCY_LTC,
    ];

    /**
     * @var array
     */
    public static $marginTransferTypeValues = [
        self::MARGIN_TRANSFER_TYPE_DEPOSIT,
        self::MARGIN_TRANSFER_TYPE_WITHDRAW,
    ];

    /**
     * @var array
     */
    public static $reportTypeValues = [
        self::REPORT_TYPE_FILLS, self::REPORT_TYPE_ACCOUNT,
    ];

    /**
     * @var array
     */
    public static $reportFormatValues = [
        self::REPORT_FORMAT_PDF, self::REPORT_FORMAT_CSV,
    ];

}
