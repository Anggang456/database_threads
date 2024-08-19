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
        Schema::create('cookies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('value');
            $table->string('domain');
            $table->string('path');
            $table->double('expires')->nullable();
            $table->integer('size');
            $table->boolean('http_only')->default(false);
            $table->boolean('secure')->default(false);
            $table->boolean('session')->default(false);
            $table->string('priority');
            $table->boolean('same_party')->default(false);
            $table->string('source_scheme');
            $table->string('same_site')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cookies');
    }
};
