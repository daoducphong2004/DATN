<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Author::query()->latest('id')->paginate(10);
        return view('admin.authors.author_requests', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('user.nangcap', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20',
            'front_id_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'back_id_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'portrait_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'reason' => 'required|string',
        ]);

        $front_id_image = null;
        $back_id_image = null;
        $portrait_image = null;
        if ($request->hasFile('front_id_image')) {
            $front_id_image = $request->file('front_id_image')->store('images', 'public');
        }
        if ($request->hasFile('back_id_image')) {
            $back_id_image = $request->file('back_id_image')->store('images', 'public');
        }
        if ($request->hasFile('portrait_image')) {
            $portrait_image = $request->file('portrait_image')->store('images', 'public');
        }

        Author::create([
            'user_id' => Auth::id(),
            'phone' => $request->phone,
            'front_id_image' => $front_id_image,
            'back_id_image' => $back_id_image,
            'portrait_image' => $portrait_image,
            'reason' => $request->reason,
        ]);

        return back()->with('success', 'Yêu cầu đã được gửi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        // $author->update(['is_approved' => true]);

        // $author->user->roles()->sync([Role::where('name', 'author')->first()->id]);

        // return back()->with('success', 'Người dùng đã được phê duyệt thành tác giả.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }

    public function acceptRequest($id)
    {
        $accept = Author::find($id);

        if ($accept) {
            $accept->is_approve = 'accepted';
            $accept->save();

            $user = $accept->user;

            if ($user->role->name == 'user') {
                $user->role_id = Role::where('name', 'author')->first()->id;
                $user->save();
            }

            $name = $accept->user->username;
            $email = $accept->user->email;

            Mail::send('emails.test', compact('name'), function ($message) use ($name, $email) {
                $message->subject('Yêu cầu tác giả được chấp nhận');
                $message->to($email, $name);
            });

            return back()->with('success', 'Yêu cầu đã được chấp nhận và email đã được gửi.');
        }

        return back()->with('error', 'Không tìm thấy yêu cầu.');
    }

    public function rejectRequest($id)
    {
        $rejected = Author::find($id);

        if ($rejected) {
            $rejected->is_approve = 'rejected';
            $rejected->save();

            $name = $rejected->user->username;
            $email = $rejected->user->email;

            Mail::send('emails.test', compact('name'), function ($message) use ($name, $email) {
                $message->subject('Yêu cầu tác giả được chấp nhận');
                $message->to($email, $name);
            });

            return back()->with('success', 'Yêu cầu được từ chối.');
        }

        return back()->with('error', 'Không tìm thấy yêu cầu.');
    }
}
