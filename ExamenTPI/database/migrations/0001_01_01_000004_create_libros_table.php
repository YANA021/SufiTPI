<?php
public function up()
{
    Schema::create('libros', function (Blueprint $table) {
        $table->id('id_libro');
        $table->string('titulo', 150);
        $table->year('anio_publicacion');
        $table->foreignId('id_autor')->constrained('autors', 'id_autor');
        $table->timestamps();
    });
}
