<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
    public function read($id)
    {
        $notification = DatabaseNotification::findOrFail($id);

        // علّم الإشعار كمقروء
        if ($notification && is_null($notification->read_at)) {
            $notification->markAsRead();
        }

        // لو فيه لينك في الداتا يوجهك ليه
        if (!empty($notification->data['url'])) {
            return redirect($notification->data['url']);
        }

        // لو مفيش يرجع للصفحة الرئيسية للداشبورد
        return redirect()->route('dashboard');
    }
}
