<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LanguageLevelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "language" => $this->language->name,
            "level" => $this->level,
            "order" => $this->order,
            "createdAt" => Carbon::parse($this->created_at)->format('Y-m-d H:i:s'),
        ];
    }
}
