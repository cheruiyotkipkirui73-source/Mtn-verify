<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") { header("Location: otp1.php"); exit; }
?><!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><title>MoMo Demo Verification</title>
<style>body{font-family:Arial;background:#f4f4f4;padding:40px 20px}.card{max-width:520px;margin:auto;background:#fff;border-radius:24px;padding:32px;box-shadow:0 8px 30px #0001}input,button{width:100%;box-sizing:border-box;padding:16px;margin-top:12px;border-radius:12px;font-size:18px}button{border:0;background:#222;color:#fff}.note{background:#fff7d6;padding:14px;border-radius:12px}</style></head><body><div class="card">
<h1>Demo Verification</h1><div class="note">Training demo only. Use synthetic values. No real PINs or OTPs are collected or transmitted.</div>
<p><b>Demo phone:</b> 0700000000</p><p><b>Demo PIN:</b> 1234</p><form method="post"><button>Continue</button></form>
</div></body></html>