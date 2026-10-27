<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasColumn('bookings', 'round_trip')) {
            Schema::table('bookings', function (Blueprint $table) {
                // No ->after() so this works regardless of which other
                // booking columns (return_time, etc.) already exist.
                $table->boolean('round_trip')->default(false);
            });
        }

        if (!Schema::hasColumn('bookings', 'return_date')) {
            Schema::table('bookings', function (Blueprint $table) {
                $table->date('return_date')->nullable();
            });
        }

        if (!Schema::hasColumn('bookings', 'return_time')) {
            Schema::table('bookings', function (Blueprint $table) {
                $table->time('return_time')->nullable();
            });
        }
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $drop = [];
            foreach (['round_trip', 'return_date', 'return_time'] as $column) {
                if (Schema::hasColumn('bookings', $column)) {
                    $drop[] = $column;
                }
            }
            if ($drop !== []) {
                $table->dropColumn($drop);
            }
        });
    }
};
