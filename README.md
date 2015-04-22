PHP LivechatInc API
==============

PHP library with ready-to-use LiveChat API implementation.


## Installation

add this package to your `composer.json` by running this command

```shell
  composer require gufy/livechat-api
```

or add this package manually to your `composer.json`

```json
{
  "require":{
    "gufy/livechat-api":"~1"
  }
}
```

## Available Models
This models are available and ready to use
  - Agent
  - CannedResponse
  - Chat
  - Goal
  - Greeting
  - Group
  - Report
  - Status
  - Tag
  - Ticket
  - Visitor
  - Webhook

## Usage

Try this code below

```php
<?php
include 'vendor/autoload.php'

use Gufy\LivechatApi\LivechatApi;

$api = new LivechatApi('your-user-name', 'your-api-key');

// retrieving all agents

$agents = $api->agent->get();

print_r($agents);
```
