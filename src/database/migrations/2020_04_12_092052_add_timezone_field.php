<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimezoneField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('users', static function(Blueprint $table) {
            $table->string(config('user-timezone.timezone_column'))->default('UTC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('users', static function(Blueprint $table) {
            $table->dropColumn(config('user-timezone.timezone_column'));
        });
    }
}
