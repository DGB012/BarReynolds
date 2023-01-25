<?php

namespace lang\database\migrations;

use App\Models\Cuentas;
use App\Models\Producto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_cuentas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('cantidad');
            $table->decimal('precio', 10, 2);
            $table->foreignIdFor(Cuentas::class)->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignIdFor(Producto::class)->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_cuentas');
    }
};