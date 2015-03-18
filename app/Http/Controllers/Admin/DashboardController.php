<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\User;
use App\Data as Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Admin\ExportRequest as ExportRequest;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class DashboardController extends AdminController {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $title = "Dashboard";

      
		return view('admin.dashboard.index',  compact('title'));
	}
	
	/* public function export(ExportRequest $request)
    {
                $data = new Data();

         $data->title = $request->title;
		 $data->data = $request->base64data;
		 $data -> save();
    }*/
  public function export(ExportRequest $request)
    {
	      $data = new Data();
          $data->title = $request->title;
		  $data->data = $request->base64data;
		  $data -> save();
          return '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">*</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Added Successfully.</p>
              </div>';
    }
	public function listing()
    {   
	       $title = "Listing";
		    $q = Data::query();
			 if (Input::get('keyword'))
             {
     // simple where here or another scope, whatever you like
             $datas =  $q->where('title','like',Input::get('keyword'));
			 $datas = $q->orderBy('created_at','DESC')->paginate(5);
              }
			   else
			   {
			   $datas = Data::orderBy('created_at','DESC')->paginate(5);
			   }
           
	       
	        // Show the page
			$datas->setPath('listing');
        return view('admin.listing.index', compact('title', 'datas'));
         
    }
	/*	public function listings()
    {   
	       $title = "Listing";
	      $datas = Data::search('title','banner')->with('posts')->paginate(20);
	        // Show the page
			$datas->setPath('listing');
        return view('admin.listing.index', compact('title', 'datas'));
         
    }*/
	
}