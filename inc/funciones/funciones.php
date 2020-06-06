<?php

function obtenerContactos() {
     include 'bd.php';
     try{
          return $conn->query("SELECT id, nombre, empresa, telefono, email,  direccion FROM contacto");
     } catch(Exception $e) {
          echo "Error!!" . $e->getMessage() . "<br>";
          return false; 
     }
}

// Obtiene un contacto toma un id.

function obtenerContacto($id) {
     include 'bd.php';
     try{
          return $conn->query("SELECT id, nombre, empresa, telefono, email, direccion FROM contacto WHERE id = $id");
     } catch(Exception $e) {
          echo "Error!!" . $e->getMessage() . "<br>";
          return false;
     }
}