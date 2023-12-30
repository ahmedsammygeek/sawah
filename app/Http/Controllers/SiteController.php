<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;
use App\Models\Offer;
use App\Models\Review;
use App\Models\Project;
use App\Models\Category;
use App\Models\Area;
use App\Models\Goal;
use App\Http\Requests\Site\ContactUsRequest;
use Mail;
use App\Mail\ContactUsMail;
class SiteController extends Controller
{

    public function index()
    {
        $services = Service::where('is_active' , 1)->latest()->get();
        $reviews = Review::where('is_active' , 1)->latest()->get();
        $projects = Project::where('is_active' , 1 )->latest()->take(6)->get();
        $areas = Area::withCount('projects')->where('is_active' , 1 )->orderByRaw("RAND()")->take(6)->get();
        $categories = Category::where('is_active' , 1)->get();
        return view('site.index' , compact('projects' , 'areas'  , 'services' , 'reviews' , 'categories' ) );
    }

    public function about()
    {
        $goals = Goal::where('is_active' , 1 )->latest()->get();
        $reviews = Review::where('is_active' , 1)->latest()->take(3)->get();
        return view('site.about' , compact('reviews' , 'goals' ));
    }


    public function services()
    {
        $reviews = Review::where('is_active' , 1)->latest()->get();
        $services = Service::where('is_active' , 1)->latest()->get();
        return view('site.services'  , compact('services' , 'reviews'  ) );
    }


    public function projects()
    {
        $projects = Project::all();
        return view('site.projects' , compact('projects') );
    }

    public function show_project(Project $project)
    {
        $projects = Project::where('area_id' , $project->area_id )->where('category_id' , $project->category_id )->orderByRaw("RAND()")->take(4)->get();
        $project->load(['category' , 'area' , 'images' ]);
        return view('site.project' , compact('project'  , 'projects' ) );
    }

    public function offers()
    {
        $products = Product::where('is_active' , 1)->latest()->get();
        $offers = Offer::where('is_active' , 1)->latest()->get();
        $reviews = Review::where('is_active' , 1)->latest()->get();
        return view('site.offers' , compact('products' , 'reviews' , 'offers') );
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function terms()
    {
        return view('site.terms');
    }


    public function show_service(Service $service)
    {
        $offers = Offer::where('is_active' , 1)->latest()->get();
        $reviews = Review::where('is_active' , 1)->latest()->get();
        return view('site.service' , compact('service' , 'offers' , 'reviews'));
    }

    public function show_product(Product $product)
    {
        return view('site.product' , compact('product'));
    }
    


    /**
     * Update the specified resource in storage.
     */
    public function send(ContactUsRequest $request)
    {
        Mail::to('alaydealmasya.tech@gmail.com')->send(new ContactUsMail($request->all()));
        return back()->with('success' , trans('site.message_send_success') );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
