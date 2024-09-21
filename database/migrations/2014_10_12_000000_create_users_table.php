<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();  // Llave primaria autoincrementable
            $table->foreignId('user_id')->constrained('users');  // Llave foránea de la tabla users
            $table->string('title');  // Título de la tarea
            $table->text('description');  // Descripción de la tarea
            $table->string('status');  // Estado de la tarea: pendiente, en progreso, completada
            $table->date('due_date');  // Fecha límite de la tarea
            $table->timestamps();  // Campos created_at y updated_at
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
