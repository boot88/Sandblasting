<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Новая заявка</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.45; background-color:#f5f5f5; padding:20px;">
    <table width="100%%" cellpadding="0" cellspacing="0" border="0" style="max-width:620px;margin:0 auto;background:#ffffff;border-radius:8px;overflow:hidden;">
        <tr>
            <td style="padding:20px 24px 16px 24px;border-bottom:1px solid #e5e7eb;">
                <h2 style="margin:0 0 4px;font-size:18px;color:#111827;">Новая заявка с сайта SandBlast</h2>
                <p style="margin:0;font-size:12px;color:#6b7280;">{{ $lead['created_at'] ?? '' }}</p>
            </td>
        </tr>
        <tr>
            <td style="padding:16px 24px 4px 24px;">
                <table cellpadding="6" cellspacing="0" border="0" style="border-collapse: collapse; width:100%%; font-size:14px;">
                    <tr>
                        <td style="color:#4b5563;width:110px;"><strong>Имя:</strong></td>
                        <td style="color:#111827;">{{ $lead['name'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <td style="color:#4b5563;"><strong>Телефон:</strong></td>
                        <td style="color:#111827;">{{ $lead['phone'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <td style="color:#4b5563;vertical-align:top;"><strong>Описание:</strong></td>
                        <td style="color:#111827;white-space:pre-line;">{{ $lead['message'] ?? '' }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding:12px 24px 16px 24px;">
                <p style="margin:0 0 4px;font-size:13px;color:#6b7280;"><strong>Страница:</strong> {{ $lead['page'] ?? '' }}</p>
                <p style="margin:0 0 4px;font-size:13px;color:#6b7280;"><strong>IP:</strong> {{ $lead['ip'] ?? '' }}</p>
                <p style="margin:0;font-size:12px;color:#9ca3af;"><strong>User-Agent:</strong> {{ $lead['user_agent'] ?? '' }}</p>
            </td>
        </tr>
    </table>
</body>
</html>
