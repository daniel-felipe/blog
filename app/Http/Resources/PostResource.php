<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'published_at' => $this->created_at->format('d F Y'),
            'author' => [
                'name' => $this->author->name,
            ],
            'category' => [
                'name' => $this->category->name,
            ],
            'tags' => $this->tags,
        ];
    }
}
