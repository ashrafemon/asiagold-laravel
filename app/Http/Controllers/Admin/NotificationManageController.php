<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Notification;
use App\User;

class NotificationManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$notifications = Notification::all(); 

    	return view('admin.notification.index', compact('notifications'));
    }

    public function create(){
    	$users = User::where('status', 'active')
    					->where('role_id', 1)
    					->get();
    	return view('admin.notification.create', compact('users'));
    }

    public function store(){
        $data = request()->validate([
            'user_id' => 'required',
            'notification_title' => 'required',
            'notification_text' => 'required'
        ]);
    	$notification = new Notification();

    	$notification->user_id = request('user_id');
    	$notification->notification_title = request('notification_title');
    	$notification->notification_text = request('notification_text');

    	$notification->save();

    	return redirect()->route('notification.manage.index');
    }

    public function edit($id){
        $users = User::where('status', 'active')
                        ->where('role_id', 1)
                        ->get();
        $notification = Notification::where('id', $id)->first();

        return view('admin.notification.edit',compact('users','notification'));
    }

    public function update($id){
        $data = request()->validate([
            'user_id' => 'required',
            'notification_title' => 'required',
            'notification_text' => 'required'
        ]);
        
        $notification = Notification::where('id', $id)->first();

        $notification->user_id = request('user_id');
        $notification->notification_title = request('notification_title');
        $notification->notification_text = request('notification_text');
        $notification->visibility = 0;

        $notification->update();

        return redirect()->route('notification.manage.index');
    }

    public function destroy($id){
        $notification = Notification::where('id', $id)->first();

        $notification->delete();

        return redirect()->route('notification.manage.index');
    }
}
