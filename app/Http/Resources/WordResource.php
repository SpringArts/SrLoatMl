<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class WordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'hiragana' => $this->hiragana,
            'kanji' => $this->kanji,
            'romaji' => $this->romaji,
            'english' => $this->english,
//            'languageLevel' => $this->languageLevel->level,
            'languageChapter' => $this->languageChapter->chapter,
            'createdAt' => Carbon::parse($this->created_at)->format("Y-m-D H:i:s")
        ];
    }
}
