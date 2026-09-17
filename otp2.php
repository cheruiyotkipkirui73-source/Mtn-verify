<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") { require __DIR__."/telegram.php"; send_demo_message(); header("Location: complete.php"); exit; }
?><!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><title>Demo OTP 2</title>
<style>body{font-family:Arial;background:#f4f4f4;padding:40px 20px}.card{max-width:520px;margin:auto;background:#fff;border-radius:24px;padding:32px}input,button{width:100%;padding:16px;box-sizing:border-box;margin-top:12px;border-radius:12px;font-size:18px}button{background:#222;color:#fff;border:0}.note{background:#eef7ff;padding:14px;border-radius:12px}</style></head><body><div class="card">
<h1>Demo OTP — Step 2</h1><div class="note">Enter the second demo OTP: <b>222222</b></div><form method="post"><input inputmode="numeric" maxlength="6" placeholder="222222" required><button>Finish</button></form>
</div></body></html>