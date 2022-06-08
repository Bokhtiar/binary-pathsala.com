<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        try {
            $abouts = About::latest()->get();
            return view('admin.setting.about.index', compact('abouts'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function create()
    {
        return view('admin.setting.about.createOrUpdate');
    }

    public function store(Request $request)
    {
        $validated = About::query()->Validation($request->all());
        if($validated){
            try{
                DB::beginTransaction();
                $about = About::create([
                    'title' => $request->title,
                    'short_des' => $request->short_des,
                    'left_des' => $request->left_des,
                    'right_des' => $request->right_des,
                ]);

                if (!empty($about)) {
                    DB::commit();
                    return redirect()->route('admin.about.index')->with('success','About Created successfully!');
                }
                throw new \Exception('Invalid About Information');
            }catch(\Exception $ex){
                return back()->withError($ex->getMessage());
                DB::rollBack();
            }
        }
    }


    public function status($about_id)
    {
        try {
            $service = About::query()->FindID($about_id); //self trait
            About::query()->Status($service); // crud trait
            return redirect()->route('admin.about.index')->with('warning','about Status Change successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }


}
