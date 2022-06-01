<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\files;
use App\Models\product;
use App\Models\productimages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Auth;

class ProductimagesController extends Controller
{

    public function index()
    {
        $cData = new \ArrayObject();
        $cData->data = productimages::orderByDesc('id')->get();

        return view('solaris.productimages', ['cData' => $cData, 'module' => "productimages"]);
    }


    public function create()
    {
        $cData = new \ArrayObject();
        $cData->categories = Category::where('parent_id', '=', 0)->where('type', '=', 1)->orderBy('sort')->get();


        return view('solaris.create-productimages', ['cData' => $cData,  'module' => 'productimages']);
    }


    public function store(Request $request)
    {


        if (request('degisID')) $cData = productimages::find(request('degisID'));
        else $cData = new productimages();


        $cData->title = request('title');
        $cData->category_id = request('category');


        $cData->sort = request('sort');
        $cData->description = request('description');
        $cData->shortdescription = request('shortdescription');
        $cData->model = request('model');
        $cData->leftside = request('leftside');
        $cData->topside = request('topside');


        $cData->user_id = Auth::id();
        $cData->save();

        if (request('file')) {
            foreach (request('file') as $key => $val) {
                if (substr_count($val, "http") == 0) {
                    $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);
                    $path = $filepond->getPathFromServerId($val);

                    $pathArr = explode('.', $path);
                    $imageExt = '';
                    if (is_array($pathArr)) {
                        $imageExt = end($pathArr);
                    }
                    $fileName = Str::random(30) . "." . $imageExt;

                    $finalLocation = storage_path('app/public/images/userfiles/' . $fileName);
                    \File::move($path, $finalLocation);

                    $file = new files;
                    $file->file = $fileName;
                    $file->mime_type = $imageExt;
                    $file->type = 100;
                    $file->sort = 10;
                    $file->user_id = Auth::id();
                    $file->type_id = $cData->id;
                    $file->save();
                }
            }
        }

        return redirect('/solaris/productimages')->with('status', 'success')->with('msg', 'Ürün eklendi!');
    }

    public function show(productimages $productimages)
    {
        //
    }


    public function edit(productimages $productimages)
    {
        $cData = new \ArrayObject();
        $cData->data = productimages::find(request("id"));
        $cData->categories = Category::where('parent_id', '=', 0)->where('type', '=', 1)->orderBy('sort')->get();


        return view('solaris.create-productimages', ['cData' => $cData, 'module' => 'productimages']);
    }


    public function update(Request $request, productimages $productimages)
    {
        //
    }


    public function destroy(productimages $productimages)
    {
        //
    }
}
