<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer("age");
            $table->string("gender");
            $table->tinyInteger("status")->default(1);
            
            $table->unsignedBigInteger("role_id")->nullable();

            $table->foreign("role_id")->references("id")->on("roles")->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("age");
            $table->dropColumn("gender");
            $table->dropColumn("role_id");
        });

    }
}
