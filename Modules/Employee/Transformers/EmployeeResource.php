<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'name' => $this->name,
        'phone' => $this->phone,
        //'created_at' => $this->created_at->format('d-m-Y'),
        //'updated_at' => $this->updated_at->format('d-m-Y'),
        ];
    }
}
