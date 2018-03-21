<?php
 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Personal;
use Illuminate\Http\Request;
use Validator;
 
class PublicController extends Controller
{
   /**
    * Show the Start Page.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      return view('personal.start');
   }

   /**
    * Store User Input.
    *
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
   		$this->validate($request, 
        [
            'name' => 'required|unique:personal|max:190',
            'location' => 'required|numeric|max:11'
        ]
    );

   		Personal::create($request->all());

   		$name = $request->get('name');
   		$id = Personal::where('name', $name)->value('id');

   		return redirect('show/'.$id)->with('success', 'City is successfully hightlighted!');
   }

    /**
    * Show Individual Map Page
    *
    * @param  \Illuminate\Http\Request $id
    * @return \Illuminate\Http\Response
    */
	public function show($id)
	{
		$user = Personal::findOrFail($id);

		$data = [
    		'user' => $user,
    	];

    	return view('personal.show')->with($data);
	}

    /**
    * Show Overview Map Page
    *
    * @return \Illuminate\Http\Response
    */
	public function overview()
	{
		$num_1 = Personal::where('location', '1')->count();
		$num_2 = Personal::where('location', '2')->count();
		$num_3 = Personal::where('location', '3')->count();
		$num_4 = Personal::where('location', '4')->count();
		$num_5 = Personal::where('location', '5')->count();
		$num_6 = Personal::where('location', '6')->count();
		$num_7 = Personal::where('location', '7')->count();
		$num_8 = Personal::where('location', '8')->count();
		$num_9 = Personal::where('location', '9')->count();
		$num_10 = Personal::where('location', '10')->count();

		$data = [
    		'num_1' => $num_1,
    		'num_2' => $num_2,
    		'num_3' => $num_3,
    		'num_4' => $num_4,
    		'num_5' => $num_5,
    		'num_6' => $num_6,
    		'num_7' => $num_7,
    		'num_8' => $num_8,
    		'num_9' => $num_9,
    		'num_10' => $num_10,
    	];

    	return view('personal.overview')->with($data);
	}

	/**
    * Show Participant List Page
    *
    * @return \Illuminate\Http\Response
    */
    public function participant()
    {
    	$users = Personal::paginate(env('USER_LIST_PAGINATION_SIZE'));
    	return view('personal.participant', compact('users'));
    }
}