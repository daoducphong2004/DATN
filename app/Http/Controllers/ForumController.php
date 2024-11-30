<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Http\Requests\StoreForumRequest;
use App\Http\Requests\UpdateForumRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\ForumComment;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Nette\Utils\Strings;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexHome()
    {
        $data_forum_home = Forum::all();
        dd($data_forum_home);
        return view('home.thaoluantrangchu', compact('data_forum_home'));
    }
    public function index()
    {
        $data_user_forums = Forum::query()->join('users', 'users.id', '=', 'forums.user_id')
            ->get([
                'users.username as username',
                'users.avatar_url as avt_user',
                'forums.id as id',
                'forums.title as title',
                'forums.content as content',
                'forums.created_at as created_at'
            ]);
        $data_categories_forums = Forum::join('categories', 'categories.id', '=', 'forums.category_id')->get([
            'categories.color as color',
            'categories.content as content_categories',
            'categories.slug as slug_categories'
        ]);
        $data_forums = Forum::query()->join('categories', 'categories.id', '=', 'forums.category_id')->join('users', 'users.id', '=', 'forums.user_id')->select([
            'categories.color as color',
            'categories.content as content_categories',
            'categories.slug as slug_categories',
            'users.username as username',
            'users.avatar_url as avt_user',
            'forums.id as id',
            'forums.title as title',
            'forums.content as content',
            'forums.created_at as created_at',
            'forums.viewer as viewer'
        ])->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        foreach ($data_forums as $forum) {
            $forum->time_ago = Carbon::parse($forum->created_at)->diffForHumans();
        }
        return view('home.thaoluan', compact('data_forums', 'data_user_forums', 'data_categories_forums', 'categories'));
    }
    public function filterThaoLuan(Request $request)
    {
        $query = Forum::all();
        $data_user_forums = Forum::query()->join('users', 'users.id', '=', 'forums.user_id')
            ->get([
                'users.username as username',
                'users.avatar_url as avt_user',
                'forums.id as id',
                'forums.title as title',
                'forums.content as content',
                'forums.created_at as created_at'
            ]);
        $data_categories_forums = Forum::join('categories', 'categories.id', '=', 'forums.category_id')->get([
            'categories.color as color',
            'categories.content as content_categories',
            'categories.slug as slug_categories'
        ]);
        $data_forums = Forum::query()->join('categories', 'categories.id', '=', 'forums.category_id')->join('users', 'users.id', '=', 'forums.user_id')->select([
            'categories.color as color',
            'categories.content as content_categories',
            'categories.slug as slug_categories',
            'users.username as username',
            'users.avatar_url as avt_user',
            'forums.id as id',
            'forums.title as title',
            'forums.content as content',
            'forums.created_at as created_at',
            'forums.viewer as viewer'
        ])->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        foreach ($data_forums as $forum) {
            $forum->time_ago = Carbon::parse($forum->created_at)->diffForHumans();
        }
        $fillter = $request->input('category');
        if ($fillter == "20" || $fillter == null || $fillter == "") {
            $data_forums = Forum::query()->join('categories', 'categories.id', '=', 'forums.category_id')->join('users', 'users.id', '=', 'forums.user_id')->select([
                'categories.color as color',
                'categories.content as content_categories',
                'categories.slug as slug_categories',
                'users.username as username',
                'users.avatar_url as avt_user',
                'forums.id as id',
                'forums.title as title',
                'forums.content as content',
                'forums.created_at as created_at',
                'forums.viewer as viewer',
                'forums.is_featured as featured'
            ])->orderBy('is_featured', 'desc')->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $data_forums = Forum::where('category_id', $fillter)->join('categories', 'categories.id', '=', 'forums.category_id')->join('users', 'users.id', '=', 'forums.user_id')->select([
                'categories.color as color',
                'categories.content as content_categories',
                'categories.slug as slug_categories',
                'users.username as username',
                'users.avatar_url as avt_user',
                'forums.id as id',
                'forums.title as title',
                'forums.content as content',
                'forums.created_at as created_at',
                'forums.viewer as viewer',
                'forums.is_featured as featured'
            ])->orderBy('is_featured', 'desc')->orderBy('created_at', 'desc')->paginate(10);
        }
        $categories = Category::all();
        $totalforumcomment = [];
        foreach ($data_forums as $forum) {
            $forumId = $forum->id; // Lấy ID của forum

            $totalforumcomment[$forumId] = ForumComment::where('forum_id', $forumId)->count();
            // Bây giờ bạn có $totalforumcomment cho từng forum
        }
        return view('home.thaoluan', compact('data_forums', 'categories', 'data_user_forums', 'data_categories_forums', 'totalforumcomment'));
    }
    public function indexadmin()
    {
        $data_user_forums = Forum::query()->join('users', 'users.id', '=', 'forums.user_id')
            ->get([
                'users.username as username',
                'users.avatar_url as avt_user',
                'forums.id as id',
                'forums.title as title',
                'forums.content as content',
                'forums.created_at as created_at'
            ]);
        $data_categories_forums = Forum::join('categories', 'categories.id', '=', 'forums.category_id')->get([
            'categories.color as color',
            'categories.content as content_categories',
            'categories.slug as slug_categories'
        ]);
        $data_forums = Forum::query()->join('categories', 'categories.id', '=', 'forums.category_id')->join('users', 'users.id', '=', 'forums.user_id')->select([
            'categories.color as color',
            'categories.content as content_categories',
            'categories.slug as slug_categories',
            'users.username as username',
            'users.avatar_url as avt_user',
            'forums.id as id',
            'forums.title as title',
            'forums.content as content',
            'forums.created_at as created_at',
            'forums.viewer as viewer'
        ])->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        foreach ($data_forums as $forum) {
            $forum->time_ago = Carbon::parse($forum->created_at)->diffForHumans();
        }
        return view('admin.forum.thaoluan', compact('data_forums', 'data_user_forums', 'data_categories_forums', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_book_forums = Forum::query()->join('books', 'books.id', '=', 'forums.book_id')->get([
            'books.slug as slug_book',
            'books.title as name_book',
            'books.author as name_author_forums',
            'books.view as view_book',
            'books.like as view_like',
            'books.painter as view_painter',
            'books.book_path as view_book_path',
            'books.description as view_description',
            'books.note as view_note',
            'books.status as view_status',
            'books.adult as view_adult',
            'books.id as id_book'
        ]);
        $books = Book::all();
        $categories = Category::all();
        $user = Auth::user();
        if (!empty($user)) {
            $userID = $user->id;
        } else {
            $userID = 1;
        }
        return view('user.themThaoLuan', compact('categories', 'books', 'userID'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreForumRequest $request)
    {
        $bruh = [
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'book_id' => $request->book_id,
            'viewer' => $request->viewer,
            'slug' => '',
            'created_at' => Carbon::now()
        ];
        Forum::query()->create($bruh);
        return redirect()->route('thao-luan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum, string $id)
    {
        $data = Forum::findOrFail($id);
        // dd($data);
        $data_forums = Forum::findOrFail($id)->join('categories', 'categories.id', '=', 'forums.category_id')->join('users', 'users.id', '=', 'forums.user_id')->select([
            'categories.color as color',
            'categories.content as content_categories',
            'categories.slug as slug_categories',
            'users.username as username',
            'users.avatar_url as avt_user',
            'users.role_id as role_id',
            'forums.id as id',
            'forums.title as title',
            'forums.content as content',
            'forums.created_at as created_at'
        ])->orderBy('created_at', 'desc')->get();
        $data_user = User::findOrFail($data->user_id);
        $data_list_forum = ForumComment::with('user')
            ->where('forum_id', $data->id) // Lọc theo forum_id
            ->whereNull('parent_id')
            ->orderBy('created_at', 'desc')
            ->get();

        $data_child_list_forum = [];
        foreach ($data_list_forum as $parentComment) {
            $childComments = ForumComment::with('user')
                ->where('parent_id', $parentComment->id)
                ->orderBy('created_at', 'asc')
                ->get();
            $data_child_list_forum[$parentComment->id] = $childComments; // Lưu bình luận con vào mảng
        }
        $lockforum = Forum::where('id', $id)->value('lock');
        Forum::where('id', $id)->increment('viewer');
        return view('user.chitiet_forum', compact('data', 'data_forums', 'data_user', 'data_list_forum', 'data_child_list_forum', 'lockforum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum, string $id)
    {

        return view('forum.editforum', compact('data'));
    }

    public function editforum(Forum $forum, string $id)
    {
        $data_book_forums = Forum::query()->join('books', 'books.id', '=', 'forums.book_id')->get([
            'books.slug as slug_book',
            'books.title as name_book',
            'books.author as name_author_forums',
            'books.view as view_book',
            'books.like as view_like',
            'books.painter as view_painter',
            'books.book_path as view_book_path',
            'books.description as view_description',
            'books.note as view_note',
            'books.is_VIP as view_is_VIP',
            'books.status as view_status',
            'books.adult as view_adult',
            'books.id as id_book'
        ]);
        $books = Book::all();
        $categories = Category::all();
        $user = Auth::user();
        if (!empty($user)) {
            $userID = $user->id;
        } else {
            $userID = 1;
        }
        $data = Forum::findOrFail($id);

        return view('admin.forum.editforum', compact('data', 'userID', 'books', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateForumRequest $request, Forum $forum)
    {
        //
    }

    public function updateadmin(UpdateForumRequest $request, string $id)
    {
        $forum = Forum::findOrFail($id);
        $data_update_forum = [
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'book_id' => $request->book_id,
            'viewer' => $request->viewer,
            'slug' => '',
            'updated_at' => Carbon::now()
        ];
        $forum->update($data_update_forum);
        return redirect()->route('thao_luan');
    }
    /**
     * Remove the specified resource from storage.
     */

    public function delete(string $id){
        $data = ForumComment::findOrFail($id);
        $data->unview = 1;
        $data->updated_at=Carbon::now();
        $data->save();
        return back();
    }
    
    public function destroy(string $id)
    {
        $data = Forum::findOrFail($id);
        $data->delete();
        return back();
    }
}
