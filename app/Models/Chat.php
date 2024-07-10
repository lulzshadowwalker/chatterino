<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [ 'is_group' => 'boolean' ];
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'participants');
    }

    public function latestMessage(): Attribute
    {
        return Attribute::get(fn () => $this->messages()->latest()->first());
    }

    public function isGroup(): Attribute
    {
        return Attribute::get(fn () => $this->attributes['is_group']);
    }

    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        $search = trim($search ?? '');
        return $query->where('name', 'like', "%$search%")
                     ->orWhereHas('participants', fn (Builder $query) => $query->where('name', 'like', "%$search%"));
    }

    public function scopeMine(Builder $query): Builder
    {
        return $query->whereHas('participants', fn (Builder $query) => $query->where('user_id', auth()->user()->id));
    }
}
