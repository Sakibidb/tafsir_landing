<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 20px;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td align="center">
                <table width="100%" style="max-width: 600px; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
                    <tr>
                        <td style="font-size: 16px; color: #333;">
                            <p>প্রিয় {{ $name }},</p>

                            <p>আল কোরআনের বৈজ্ঞানিক তাফসীর বিষয়ে আপনার আগ্রহের জন্য আন্তরিক ধন্যবাদ। নিচের লিংকে ক্লিক করে আপনি বইটির একটি নমুনা সংস্করণ দেখতে পারবেন:</p>

                            <p>
                                <a href="{{ $demoLink }}" style="color: #007bff; word-break: break-all;">{{ $demoLink }}</a>
                            </p>

                            <p>
                                দ্রুত যোগাযোগের জন্য আপনি আমাকে WhatsApp-এ মেসেজ করতে পারেন:
                                <strong>+8801716477600</strong>।
                                এছাড়াও, আপনার প্রয়োজন বিস্তারিতভাবে আলোচনা করতে চাইলে অনলাইনে মিটিংও করতে পারি।
                            </p>

                            <p>
                                আমি অনলাইনে থাকি <strong>শনিবার থেকে বৃহস্পতিবার</strong>, 
                                <strong>সকাল ১১:৩০টা থেকে সন্ধ্যা ৭:০০টা</strong> পর্যন্ত (বাংলাদেশ সময়, GMT+6)।
                            </p>

                            <p>
                                আপনি চাইলে নিচের লিংকে ক্লিক করে আপনার সুবিধামতো একটি সময় নির্ধারণ করতে পারেন:
                                <br>
                                <a href="https://calendly.com/spsbd2021/30min" style="color: #007bff;">
                                    https://calendly.com/spsbd2021/30min
                                </a>
                            </p>

                            <p style="margin-top: 30px;">শুভেচ্ছান্তে,<br><strong>সরলরেখা প্রকাশনা সংস্থা</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding-top: 20px;">
                            <img src="{{ $message->embed(public_path('images/logo/fav-logo.png')) }}" alt="Saralrekha Logo" style="max-width: 140px;">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="color: #999; font-size: 12px; padding-top: 10px;">
                            © {{ date('Y') }} সরলরেখা। সর্বস্বত্ব সংরক্ষিত।
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
