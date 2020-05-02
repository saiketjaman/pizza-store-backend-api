<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class user extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        
        // to display custom field
        // return [
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'email' => $request->email,
        // ];
    }
}