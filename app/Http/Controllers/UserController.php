<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Category;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    
    public function sendEmailReminder(Request $request, $id)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }

    public static function sendEmail(Request $request)
    {
        Mail::to('xdawidoskipl@gmail.com')->send(new SendMail());
   
        $ids = Category::get3categorys();
        $products = Post::advertProducts($ids);
        $carousel = Post::GetProductForCarousel();
        return redirect('/')->with('success',"Wiadomość wysłana.");
    }

}
