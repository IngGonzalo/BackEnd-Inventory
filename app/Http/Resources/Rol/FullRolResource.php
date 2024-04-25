<?php

namespace App\Http\Resources\Rol;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FullRolResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $roles = Rol::find($this->id)->roles;

        return [
            "id" => $this->id,
            "name" => $this->name,            
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,
        ];
    }
}
