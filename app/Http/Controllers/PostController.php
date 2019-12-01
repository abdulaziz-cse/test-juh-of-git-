<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Send;
use App\Mony;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Requset;

use Illuminate\Http\Request;
class PostController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */    

       /**
     * Display a listing of the resource.
     *
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('hosPost.index');
     }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('hosPost.about');

    }

    public function signinc()
    {
        return view('hosPost.signinc');

    }
    
    public function contact()
    {
        return view('hosPost.contact');

    }
    public function text()
    {
        return view('hosPost.text');

    }
    public function comfile()
    {
        $post = Post::orderBy('created_at','desc')->paginate(10);
        return view('hosPost.comfile', compact('post'));
    }

    public function Blood()
    {
        $post = Post::orderBy('created_at','desc')->paginate(10);
        return view('hosPost.Blood', compact('post'));
    }
    public function sendBlood()
    {
        $post = Post::all();
        return view('hosPost.sendBlood', compact('post'));
    }

    

    public function sendMony()
    {

        return view('hosPost.sendMony');
    }


    public function Mony()
    {
        $mony = Mony::orderBy('created_at','desc')->paginate(10);

        return view('hosPost.sendMony', compact('mony'));
    }

    public function Monys()
    {
        $mony = Mony::orderBy('created_at','desc')->paginate(10);

        return view('hosPost.Monys', compact('mony'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'Nationality'=>'required',
            'Number'=>'required',
            'Type'=>'required',
            'Phone'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'Age'=>'required',
            'Natonality1'=>'required',
            'expmonth'=>'required',

              ]);

              $post = new Post();
              $post->firstname = $request->input('firstname');
              $post->Nationality = $request->input('Nationality');    
              $post->Number = $request->input('Number'); 
              $post->Type = $request->input('Type'); 
              $post->Phone = $request->input('Phone'); 
              $post->city = $request->input('city'); 
              $post->state = $request->input('state'); 
              $post->zip = $request->input('zip'); 
              $post->Age = $request->input('Age'); 
              $post->Natonality1 = $request->input('Natonality1'); 
              $post->expmonth = $request->input('expmonth'); 
              $post->save();

              return redirect('/comfile')->with('success' , 'New code success');

    }

    public function storemony(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'Phone'=>'required',
            'National'=>'required',
            'gander'=>'required',
            'Age'=>'required',
            'Weight'=>'required',
            'cost'=>'required',

              ]);

              $mony = new Mony();

              $mony->name = $request->input('name');
              $mony->Phone = $request->input('Phone');    
              $mony->National = $request->input('National'); 
              $mony->gander = $request->input('gander'); 
              $mony->Age = $request->input('Age'); 
              $mony->Weight = $request->input('Weight'); 
              $mony->cost = $request->input('cost'); 

              $mony->save();

              return redirect('/Mony')->with('success' , 'New code success');

    }
    

   
    

    public function comfiles()
    {
        $send = Send::orderBy('created_at','desc')->paginate(10);

        return view('hosPost.comfiles', compact('send'));
    }
    
    
    public function storeblood(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'Phone'=>'required',
            'National'=>'required',
            'gander'=>'required',
            'Age'=>'required',
            'Weight'=>'required',
            'TypeBlood'=>'required',

              ]);

              $send = new Send();
              $send->name = $request->input('name');
              $send->Phone = $request->input('Phone');    
              $send->National = $request->input('National'); 
              $send->gander = $request->input('gander'); 
              $send->Age = $request->input('Age'); 
              $send->Weight = $request->input('Weight'); 
              $send->TypeBlood = $request->input('TypeBlood'); 
              $send->save();

              return redirect('/comfiles')->with('success' , 'New code success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //$post = Post::find($id);         
        return view('hosPost.cheakbox', compact('post')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('hosPost.cheakbox', compact('post'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    
    public function updatesend(Request $request, $id)
    {
        $this->validate($request ,[
            'name'=>'required',
            'Phone'=>'required',
            'National'=>'required',
            'gander'=>'required',
            'Age'=>'required',
            'Weight'=>'required',
            'TypeBlood'=>'required',
                                ]);
 
         $send =   Send::find($id);
         $send->name = $request->input('name');
         $send->Phone = $request->input('Phone');    
         $send->National = $request->input('National'); 
         $send->gander = $request->input('gander'); 
         $send->Age = $request->input('Age'); 
         $send->Weight = $request->input('Weight'); 
         $send->TypeBlood = $request->input('TypeBlood'); 
        $send->save();
   
        $send->save();
      return redirect('/')->with('success', 'Done successfully');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request ,[
            'firstname'=>'required',
            'Nationality'=>'required',
            'Number'=>'required',
            'Type'=>'required',
            'Phone'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'Age'=>'required',
            'Natonality1'=>'required',
            'expmonth'=>'required'
                                ]);
 
         $post =   Post::find($id);
         $post->firstname = $request->input('firstname');
        $post->Nationality = $request->input('Nationality');    
        $post->Number = $request->input('Number'); 
        $post->Type = $request->input('Type'); 
        $post->Phone = $request->input('Phone'); 
        $post->city = $request->input('city'); 
        $post->state = $request->input('state'); 
        $post->zip = $request->input('zip'); 
        $post->Age = $request->input('Age'); 
        $post->Natonality1 = $request->input('Natonality1'); 
        $post->expmonth = $request->input('expmonth'); 
        $post->save();
   
        $post->save();
      return redirect('/')->with('success', 'Done successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =   Post::find($id);
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unauthorized');
        }
        if($post->post_image != 'noImage.jpg'){
            Storage::delete('public/images/'.$post->post_image);
        }


                $post->delete() ;   
            
                return redirect('/posts')->with('success', 'Done successfully');
    }

    //


 
}