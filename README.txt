MOMO TELEGRAM DEMO

This project is intentionally a SAFE DEMO:
- Demo PIN is fixed at 1234.
- Real MoMo PINs and OTPs are never transmitted to Telegram.
- The phone number is masked before Telegram receives it.
- Telegram inline buttons only represent demo statuses.

SETUP
1. Upload these files to a PHP-enabled web host.
2. Configure environment variables:
   TELEGRAM_BOT_TOKEN = your BotFather token
   TELEGRAM_CHAT_ID   = your Telegram chat ID
3. Open index.html.
4. Enter a demo phone number and PIN 1234.
5. Check your Telegram chat for the inline keyboard.

IMPORTANT
Do not place the Telegram bot token inside index.html or other browser-side JavaScript.
If your hosting provider does not support environment variables, use its server-side secret/configuration facility rather than exposing the token publicly.

BUTTONS
- Mark Demo Verified
- Mark Demo Rejected
- Extend Demo Time

The included notify.php creates the inline keyboard. Handling button callbacks requires a Telegram webhook/backend; this starter project deliberately keeps the buttons as demo controls.
