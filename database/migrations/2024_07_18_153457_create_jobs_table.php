<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Employer;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employer::class)->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('salary');
            $table->string('workPlace');
            $table->string('emplType')->default('Plný úvazek');
            $table->string('url');
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
