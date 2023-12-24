<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;
use function Symfony\Component\Translation\t;

class LanguageChapterResource extends JsonResource
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
            "language" => $this->languageLevel->language->name,
            "language_level" =>  $this->languageLevel->level,
            "chapter" => $this->chapter,
            "order" => $this->order,
            "createdAt" => Carbon::parse($this->created_at)->format('Y-m-d H:i:s'),
        ];
    }
}
