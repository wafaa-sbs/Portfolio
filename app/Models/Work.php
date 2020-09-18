<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'works';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
     protected $fillable = ['id', 'work_name', 'url_link', 'image', 'created_at', 'updated_at'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

//     public function SetImageAttribute($value)
// {
//     $attribute_name = "image";
//     $disk = "public";
//     $destination_path = "storage/";
//
//     // if the image was erased
//     if ($value==null) {
//         // delete the image from disk
//         \Storage::disk($disk)->delete($this->{$attribute_name});
//
//         // set null in the database column
//         $this->attributes[$attribute_name] = null;
//     }
//
//     // if a base64 was sent, store it in the db
//     if (starts_with($value, 'data:image'))
//     {
//         // 0. Make the image
//         $image = \Image::make($value);
//         // 1. Generate a filename.
//         $filename = md5($value.time()).'.jpg';
//         // 2. Store the image on disk.
//         \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
//         // 3. Save the path to the database
//         $this->attributes[$attribute_name] = /*$destination_path.'/'.*/$filename;
//     }
// }

// public function setImageAttribute($value) {
// // use Intervention image or whatever you want to process that image
//
//     $image=$value;
//     $input['image'] = time().'.'.$image->getClientOriginalExtension();
//     $img = \Image::make($image->getRealPath());
//
//     $destinationPath = storage_path('/app/public');
//     $img->resize(640, 426, function ($constraint) {
//     $constraint->aspectRatio();
//     })->save($destinationPath.'/'.$input['image']);
//
//     // $destinationPath = storage_path('/app/public');
//     //
//     // $img->resize(100, 100, function ($constraint) {
//     // $constraint->aspectRatio();
//     // })->save($destinationPath.'/'.$input['imagename']);
//
//     // $image->move($destinationPath, $input['imagename']); // for no resize
//     $this->attributes['image'] = strtolower($input['image']);
//
//   }



  public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = public_path('/works');;

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
        $this->attributes['image'] = strtolower($value);

    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }


  // public function store(Request $request)
  // {
  //   // $prmter = $request->except(['_token']);
  //   $works = new Work();
  //   $works->work_name = $request['work_name'];
  //   $works->url_link = $request['url_link'];
  //
  //   if($request->hasFile('image')){
  //         $path = $request->file('image')->store('works');
  //     }
  //
  //   $works->image=$path;
  //   $works->save();
  //   return redirect('/work');
  // }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
