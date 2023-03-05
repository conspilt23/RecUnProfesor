<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Reaction;
use App\Models\Opinion;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReactionController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like(Request $request)
    {
        $input = $request->validate([
            'type' => 'required|string|in:opinion,reply',
            'id' => 'required|numeric|exists:'. (request()->input('type') == 'opinion' ? 'App\Models\Opinion' : 'App\Models\Reply') .',id'
        ]);

        $type = $input['type'];
        $id = $input['id'];

        // Check if the reaction already exists
        $reaction = Reaction::where('user_id', auth()->user()->id)
            ->where(($type == 'opinion') ? 'opinion_id' : 'reply_id', $id)
            ->first();

        if ($reaction) {
            // Update the existing reaction
            if ($reaction->like == 1 && $reaction->dislike == 0) {
                $reaction->like = 0;
            } elseif ($reaction->dislike == 1) {
                $reaction->dislike = 0;
                $reaction->like = 1;
            } elseif ($reaction->like == 1) {
                $reaction->like = 0;
                $reaction->dislike = 0;
            } else {
                $reaction->like = 1;
            }
            $reaction->save();
        } else {
            // Create a new reaction
            $reaction = new Reaction();
            $reaction->user_id = auth()->user()->id;
            $reaction->like = 1;
            if ($type == 'opinion') {
                $reaction->opinion_id = $id;
            } else {
                $reaction->reply_id = $id;
            }
            $reaction->save();
        }

        // Count the reactions 
        $like_count = Reaction::where(($type == 'opinion') ? 'opinion_id' : 'reply_id', $id)->where('like', 1)->count();
        $dislike_count = Reaction::where(($type == 'opinion') ? 'opinion_id' : 'reply_id',  $id)->where('dislike', 1)->count();

        if(request()->input('type') == 'opinion'){
            $user = Opinion::find($id);
            if($user->user_id != auth()->id() && !$user->user->notifications()->where('type', 'like')
            ->where('user_id', $user->user_id)
            ->where('notifier_id', auth()->id())
            ->where('link', "/opiniones/" . str(str_replace('-', ' ', $user->teacher->name))->slug())
            ->exists()
        ) {
                $notifier = Auth::id();

                $notification = new Notification();
                $notification->user_id = $user->user_id;
                $notification->notifier_id = $notifier;
                $notification->type = 'like';
                $notification->link = "/opiniones/" . str(str_replace('-', ' ', $user->teacher->name))->slug();
                $notification->class_icon = 'fa-heart';
                $notification->message = "El usuario '" . User::find($notifier)->username .  "' le ha dado like a tu opinión sobre " . $user->teacher->name;
                $notification->save();
                
            }
        }

        return response()->json([
            'success' => true,
            'like_count' => $like_count,
            'dislike_count' => $dislike_count
        ]);
    }

    public function dislike(Request $request)
    {
        $input = $request->validate([
            'type' => 'required|string',
            'id' => 'required|numeric'
        ]);
        $type = $input['type'];
        $id = $input['id'];

        // Check if the reaction already exists
        $reaction = Reaction::where('user_id', auth()->user()->id)
            ->where(($type == 'opinion') ? 'opinion_id' : 'reply_id', $id)
            ->first();

        if ($reaction) {
            // Update the existing reaction
            if ($reaction->like === 1 && $reaction->dislike === 0) {
                $reaction->like = 0;
                $reaction->dislike = 1;
            } elseif ($reaction->dislike == 1) {
                $reaction->dislike = 0;
            } elseif ($reaction->like == 1) {
                $reaction->like = 0;
                $reaction->dislike = 1;
            } else {
                $reaction->dislike = 1;
            }
            $reaction->save();
        } else {
            // Create a new reaction
            $reaction = new Reaction();
            $reaction->user_id = auth()->user()->id;
            $reaction->dislike = 1;
            if ($type == 'opinion') {
                $reaction->opinion_id = $id;
            } else {
                $reaction->reply_id = $id;
            }
            $reaction->save();
        }

        // Count the reactions 
        $like_count = Reaction::where(($type == 'opinion') ? 'opinion_id' : 'reply_id', $id)->where('like', 1)->count();
        $dislike_count = Reaction::where(($type == 'opinion') ? 'opinion_id' : 'reply_id',  $id)->where('dislike', 1)->count();

        return response()->json([
            'success' => true,
            'like_count' => $like_count,
            'dislike_count' => $dislike_count
        ]);
    }
}
