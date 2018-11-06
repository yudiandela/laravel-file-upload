<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    /**
     * Passing variable
     *
     * @var array
     */
    protected $response = [];

    /**
     * passing id from user
     *
     * @var integer
     */
    protected $user_id = 1;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'images'   => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg'
        ]);

        $images = $this->uploadFiles($request);

        if (Auth::user()) {
            $this->user_id = Auth::user()->id;
        }

        foreach ($images as $image) {
            list($value) = $image;

            $this->response[] = Image::create([
                'user_id' => $this->user_id,
                'value'   => $value
            ]);
        }

        return response()->json([
            'data'    => $this->response,
            'message' => 'success'
        ], 201);
    }

    /**
     * Upload multiple file
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    protected function uploadFiles($request)
    {
        $uploadedImages = [];

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $uploadedImages[] = $this->uploadFile($image);
            }
        }

        return $uploadedImages;
    }

    /**
     * Upload single file
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    protected function uploadFile($image)
    {
        $originalName  = $image->getClientOriginalName();
        $fileExtension = $image->getClientOriginalExtension();
        $fileNameOnly  = pathinfo($originalName, PATHINFO_FILENAME);

        $fileName = str_slug($fileNameOnly);
        if (Auth::user()) {
            $fileName .= '-' . str_slug(Auth::user()->name);
        }
        $fileName .='-' . time() . '.' . $fileExtension;

        $images = $image->storeAs('user', $fileName);

        return [$images];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
