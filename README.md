# Unofficial GDAX PHP library.

**This library is still very much in *alpha* state.**

**Use with *caution* and keep an eye on your transaction if you trade with real money.**

## Installation

```
composer require benfranke/gdax-php
```

## Examples

### PublicClient

```php
$client = new \GDAX\Clients\PublicClient();
```
>Returns: GDAX\Clients\PublicClient

#### Sandbox
Override the baseURL Property of the Client:
```php
$client->setBaseURL(\GDAX\Utilities\GDAXConstants::GDAX_API_SANDBOX_URL);
```

#### Get Products
```php
$client->getProducts();
```
>Returns: GDAX\Types\Response\Market\Product[]

##### Get Product Order Book

```php
$product = (new GDAX\Types\Request\Market\Product())->setProductId(\GDAX\Utilities\GDAXConstants::PRODUCT_ID_BTC_USD)->setLevel(3);
$productOrderBook = $client->getProductOrderBook($product);
```
>Returns: GDAX\Types\Response\Market\ProductOrderBook

##### Get Product Ticker

```php
$product = (new GDAX\Types\Request\Market\Product())->setProductId(\GDAX\Utilities\GDAXConstants::PRODUCT_ID_BTC_USD);
$productTicker = $client->getProductTicker($product);
```
>Returns: GDAX\Types\Response\Market\ProductTicker

##### Get Product Trades
```php
$product = (new GDAX\Types\Request\Market\Product())
    ->setProductId(\GDAX\Utilities\GDAXConstants::PRODUCT_ID_BTC_USD)
    ->setStart(new DateTime('2017-01-01'))
    ->setEnd(new DateTime())
    ->setGranularity(1200);

$productTrades = $publicClient->getTrades($product);
```
> Returns: GDAX\Types\Response\Market\Trade[]

##### Get 24hr Stats
```php
$product = (new GDAX\Types\Request\Market\Product())->setProductId(\GDAX\Utilities\GDAXConstants::PRODUCT_ID_BTC_USD);
$product24HourStats = $publicClient->getProduct24HrStats($product);
```
> Returns: GDAX\Types\Response\Market\Product24HourStats

##### Get currencies
```php
$products = $publicClient->getCurrencies();
```
>Returns: GDAX\Types\Response\Market\Currency[]

##### Get the API server time
```php
$time = $publicClient->getTime();
```
>Returns: GDAX\Types\Response\Market\Time

### AuthenticatedClient
```php
$client = new \GDAX\Clients\AuthenticatedClient(
    API_KEY
    API_KEY_SECRET
    API_KEY_PASSPHRASE
);
```
>Returns: GDAX\Clients\AuthenticatedClient

##### List Accounts
```php
$accounts = $client->getAccounts();
```
>Returns: GDAX\Types\Response\Authenticated\Account[]

##### Get an Account
```php
$account = (new GDAX\Types\Request\Authenticated\Account())->setId('c7f461b7-d91e-499f-...');
$accountData = $client->getAccount($account);
```
>Returns: GDAX\Types\Response\Authenticated\Account

##### Get Account History
```php
$account = (new GDAX\Types\Request\Authenticated\Account())->setId('c7f461b7-d91e-499f-9f59-...')->toPaginated();
$accountHistory = $client->getAccountHistory($account);
```
>Returns: GDAX\Types\Response\Authenticated\Ledger[]

##### Get Holds
```php
$account = (new GDAX\Types\Request\Authenticated\Account())->setId('c7f461b7-d91e-499f-9f59-...')->toPaginated();
$accountHolds = $client->getAccountHolds($account);
```
>Returns: GDAX\Types\Response\Authenticated\Hold

##### Place order
```php
$order = (new GDAX\Types\Request\Authenticated\Order())
    ->setType(\GDAX\Utilities\GDAXConstants::ORDER_TYPE_LIMIT)
    ->setProductId(\GDAX\Utilities\GDAXConstants::PRODUCT_ID_BTC_USD)
    ->setSize(0.01)
    ->setSide(\GDAX\Utilities\GDAXConstants::ORDER_SIDE_BUY)
    ->setPrice(3800)
    ->setPostOnly(true)
    ->setStp(\GDAX\Utilities\GDAXConstants::STP_CO);

$response = $client->placeOrder($order);
```
>Returns: GDAX\Types\Response\Authenticated\Order

Check for ```$response->getMessage()``` or ```$response->getRejectReason()``` to see if the order has been placed correctly.

##### Cancel an order
```php
$order = (new GDAX\Types\Request\Authenticated\Order())->setId($id);
$response = $client->cancelOrder($order);
```
>Returns: GDAX\Types\Response\RawData

Check ```$response->getData()``` to see if your order id was cancelled.

##### Cancel all orders
```php
$response = $client->cancelOrders();
```
>Returns: GDAX\Types\Response\RawData

Check ```$response->getData()``` for an array of order ids that were cancelled.

##### List Orders
```php
$listOrders = (new GDAX\Types\Request\Authenticated\ListOrders())
    ->setStatus(\GDAX\Utilities\GDAXConstants::ORDER_STATUS_ALL)
    ->setProductId(\GDAX\Utilities\GDAXConstants::PRODUCT_ID_BTC_USD);
    
$orders = $client->getOrders($listOrders);
```
>Returns: GDAX\Types\Response\Authenticated\Order[]

##### Get an Order
```php
$order = (new GDAX\Types\Request\Authenticated\Order())->setId($id);
$orderData = $client->getOrder($order);
```
>Returns: GDAX\Types\Response\Authenticated\Order

##### List Fills
```php
$fill = (new \GDAX\Types\Request\Authenticated\Fill())
    ->setProductId(\GDAX\Utilities\GDAXConstants::PRODUCT_ID_BTC_USD);

$fillData = $client->getFills($fill);
```
>Returns: GDAX\Types\Response\Authenticated\Fill[]

##### List Fundings
```php
$funding = (new \GDAX\Types\Request\Authenticated\Funding())
    ->setStatus(\GDAX\Utilities\GDAXConstants::FUNDING_STATUS_SETTLED);

$fundingData = $client->getFundings($funding);
```
>Returns: GDAX\Types\Response\Authenticated\Funding[]

##### Repay Funding
```php
$funding = (new \GDAX\Types\Request\Authenticated\Funding())
    ->setAmount(600)
    ->setCurrency(\GDAX\Utilities\GDAXConstants::CURRENCY_USD);

$repay = $client->repay($funding);
```
>Returns: GDAX\Types\Response\Authenticated\RawData

##### Margin Transfer
```php
$marginTransfer = (new GDAX\Types\Request\Authenticated\MarginTransfer())
    ->setType(\GDAX\Utilities\GDAXConstants::MARGIN_TRANSFER_TYPE_WITHDRAW)
    ->setCurrency(\GDAX\Utilities\GDAXConstants::CURRENCY_USD)
    ->setMarginProfileId('c1a8236e-19b8-4cec-...')
    ->setAmount(10);

$marginTransferData = $client->marginTransfer($marginTransfer);
```
>Returns: GDAX\Types\Response\Authenticated\MarginTransfer

##### Get Position
```php
$position = $client->getPosition();
```
>Returns: GDAX\Types\Response\Authenticated\Position


---


Donations are very welcome

    BTC: 1KaFMrUdrwyEdPbMFDzSgy3PfH79nWvFYh
    ETH: 0x47c080504a6db77dFD4551EA7589969D39866894
