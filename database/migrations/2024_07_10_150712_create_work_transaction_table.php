<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('work_transaction', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('site_id');
            $table->integer('activity_id');
            $table->enum('uom',['Pokok','Meter']);
            $table->string('block');
            $table->string('task');
            $table->time('start');
            $table->time('end');
            $table->foreignId('machine_id')->constrained('machine')->restrictOnDelete()->cascadeOnUpdate();
            $table->integer('fuel')->default(0);
            $table->integer('check_by')->nullable();
            $table->timestamp('check_at')->nullable();
            $table->integer('verified_by')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->string('duty')->nullable();
            $table->text('reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_transaction');
    }
};
