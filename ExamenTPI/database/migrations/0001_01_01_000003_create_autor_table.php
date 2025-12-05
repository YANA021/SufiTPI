<?php

public function up()
{
    Schema::create('autores', function (Blueprint $table) {
        $table->id('id_autor');
        $table->string('nombre', 120);
        $table->string('nacionalidad', 80)->nullable();
        $table->timestamps();
    });
}
