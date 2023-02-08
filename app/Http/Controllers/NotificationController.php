<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class NotificationController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user =  User::first();
    }

    public function index()
    {
        $notifications = $this->user->notifications()->get();
        return $notifications;
    }

    public function readNotifications()
    {
        $readNotifications = $this->user->readNotifications()->get();
        return $readNotifications;
    }

    public function unreadNotifications()
    {
        $unReadNotifications = $this->user->unreadNotifications()->get();
        return $unReadNotifications;
    }

    public function markFirstOneRead()
    {
        $this->user->notifications->first()->markAsRead();
    }
}
