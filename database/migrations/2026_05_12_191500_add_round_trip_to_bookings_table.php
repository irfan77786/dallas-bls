<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasColumn('bookings', 'round_trip')) {
            Schema::table('bookings', function (Blueprint $table) {
                $table->boolean('round_trip')->default(false)->after('return_time');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('bookings', 'round_trip')) {
            Schema::table('bookings', function (Blueprint $table) {
                $table->dropColumn('round_trip');
            });
        }
    }
};
