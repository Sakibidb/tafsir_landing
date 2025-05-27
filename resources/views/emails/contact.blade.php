<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; margin: 0;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td align="center">
                <table style="max-width: 600px; background-color: #ffffff; padding: 20px; border-radius: 10px; width: 100%;">
                    <tr>
                        <td style="text-align: center;">
                            <h2 style="color: #2c3e50; margin-bottom: 5px;">বৈজ্ঞানিক তাফসীর ওয়েবসাইটে নতুন বার্তা</h2>
                            <p style="color: #555; font-size: 14px;">আপনার যোগাযোগ ফর্মের মাধ্যমে একটি নতুন বার্তা এসেছে।</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0;">
                            <p><strong>নাম:</strong> {{ $contact['name'] }}</p>
                            <p><strong>ইমেইল:</strong> {{ $contact['email'] }}</p>
                            <p><strong>বার্তা:</strong></p>
                            <div style="background-color: #f1f1f1; padding: 10px; border-radius: 5px; color: #333;">
                                {{ $contact['note'] }}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding-top: 20px;">
                            <img src="{{ $message->embed(public_path('images/logo/fav-logo.png')) }}" alt="Tafsir Logo" style="max-width: 150px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding-top: 15px; color: #999; font-size: 12px;">
                            <small>এই বার্তাটি বৈজ্ঞানিক তাফসীর ওয়েবসাইটের যোগাযোগ ফর্ম থেকে প্রেরিত</small>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
