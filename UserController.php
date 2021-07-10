<?php

namespace App\Http\Controllers\API;


use App\User;
use Illuminate\Http\Request;
use App\Like;

class UserController extends Controller
{

    public function __construct()
    {
        // $this->authorizeResource(User::class, 'user');
    }


    /**
     * Fetch and return all users data.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::with('ostan', 'city', 'role')->paginate(10);
    }


    /**
     * Store a new user data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		return $user->store($request);
    }

    /**
     * Fetch a specific user data.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user->load('ostan', 'city', 'role');
    }


    /**
     * Update user data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return $user->update($request);
    }

    /**
     * delete user.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return $user->delete($request);
    }


    /**
     * Return the complexes of a User
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function complexes(Request $request)
    {   
        return $request->user()->complexes()->paginate(10);
    }

    /**
     * Return the places of a User
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function places(Request $request)
    {   
        return $request->user()->places()->paginate(10);
    }
    
    /**
     * Return the likes of a User
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function likes(Request $request)
    {   
        return $request->user()->likes()->with('complex')->paginate(10);
    }
        /**
     * Return the comments of a User
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function comments(Request $request)
    {   
        return $request->user()->comments()->paginate(10);
    }

    /**
     * Return the transactions of a User
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function transactions(Request $request)
    {   
        return $request->user()->transactions()->paginate(10);
    }

    /**
     * Return the notifications of a User
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function notifications(Request $request)
    {   
        return $request->user()->notifications()->paginate(10);
    }

    /**
     * Return the liked places of a User
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function likedPlaces(Request $request)
    {   
        $user_id = $request->user()->id; 
        $complex_id = $request->complex_id; 
        if(Like::where('user_id', $user_id)->where('complex_id', $complex_id)->exists()){
            Like::where('user_id', $user_id)->where('complex_id', $complex_id)->delete();
        }else{
            Like::create(['user_id' => $user_id, 'complex_id' => $complex_id]);
        }

        return response(['message' => 'Successfully applied'] , 200);
    }


}
