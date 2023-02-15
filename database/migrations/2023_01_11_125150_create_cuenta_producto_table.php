<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use App\Models\Cuenta;
    use App\Models\Producto;

    return new class extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('cuenta_producto', function (Blueprint $table) {
                $table->foreignId('cuenta_id')->constrained('cuentas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->foreignId('producto_id')->constrained('productos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->timestamps();
                $table->integer('cantidad');
                $table->decimal('precio', 10, 2);
//                $table->primary(['cuenta_id', 'producto_id']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('cuenta_producto');
        }
    };
