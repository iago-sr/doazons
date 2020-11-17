<?php

use Library\Library;
use Item\Book\Book;

/**
 * 
 *Registrar cualquier tipo de documento en los formatos permitidos.
 *Listar todos los documentos de la biblioteca.
 *Listar todos los documentos con un formato específico.
 * Borrar un documento por su ID.
 * Mostrar la información de la biblioteca.
 * También debería permitir conocer el número de bibliotecas creadas en cualquier momento.
 *
 */
function main()
{
    $library = new Library('IES SAN CLEMENTE', 'AULA 24', '881 86 75 01');
    $mahabharata = new Book('Mahabharata', 'III a.C', '13000');
    $library->register($mahabharata);
    $library->list();
    //  $library->list('$book');
    $library->remove($mahabharata);
    $library->info();
    $library->instances();
}
