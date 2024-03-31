
# TradingView Alerts to Telegram Bot

This project forwards alerts from TradingView directly to a Telegram channel. When specific financial conditions are met and an alert is triggered on TradingView, this PHP script automatically sends the alert's content to the specified Telegram channel.

## Features

- Captures real-time alerts from TradingView.
- Forwards the content of these alerts to a Telegram channel.

## Requirements

- A PHP server (web hosting)
- Telegram bot token and channel ID

## Setup

1. **Create Telegram Bot and Obtain Token:**
   - Contact @BotFather on Telegram and create a new bot. After creating your bot, you will receive a unique token. Note down this token.

2. **Create a Telegram Channel and Add Your Bot:**
   - Create a Telegram channel and add the bot you created as an admin of this channel.

3. **Setting Up the PHP Script:**
   - Upload the contents of this repository to your web server.
   - Open the `webhook.php` file and update the following fields with your information:
     ```php
     $telegramBotToken = 'YOUR_TELEGRAM_BOT_TOKEN';
     $chatID = 'YOUR_TELEGRAM_CHAT_ID';
     ```
   - Ensure you have a URL to access your script, e.g., `https://yourdomain.com/webhook.php`

4. **Configure TradingView Alert:**
   - Create an alert on TradingView and select the "Webhook URL" option.
   - Enter your script's URL (from step 3) as the webhook URL.

## Usage

Once the setup is complete, whenever the conditions set in TradingView are met and an alert is triggered, the content of this alert will automatically be sent to the Telegram channel you specified.

## Security Note

This script does not include any authentication mechanism. Consider implementing additional security measures to prevent misuse of your webhook URL.
