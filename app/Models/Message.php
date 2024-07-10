<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Chat;
use App\Models\User;

class Message extends Model
{
    use HasFactory;

    const TYPE_TEXT = 'TEXT';

    protected $fillable = [
        'type',
        'content',
        'user_id',
        'chat_id',
    ];

    public function sentAt(): Attribute
    {
        return Attribute::get(fn () => $this->created_at);
    }

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class);
    }

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sentByMe(): Attribute
    {
        return Attribute::get(fn () => $this->user_id === auth()->user()?->id);
    }
}
