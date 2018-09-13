<?php

    namespace App;
    use Laravel\Passport\HasApiTokens;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class User extends Authenticatable
    {
        use HasApiTokens, SoftDeletes, Notifiable;

        protected $fillable = ['name', 'email', 'password'];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function tasks(){
            return $this->hasMany(Task::class);
        }
    }
