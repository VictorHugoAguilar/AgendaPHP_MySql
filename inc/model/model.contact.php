<?php

// Comprobamos las acciones a realizar
if (isset($_POST['accion'])) {
     if ($_POST['accion'] == 'editar') {
          $accion = 'editar';
     } else if ($_POST['accion'] == 'crear') {
          $accion = 'crear';
     }
} else if (isset($_GET['accion'])) {
     if ($_GET['accion'] == 'borrar') {
          $accion = 'borrar';
     }
}

// Switch para llamar a los métodos
switch ($accion) {
     case 'crear':
          crear();
          break;
     case 'borrar':
          eliminar();
          break;
     case 'editar':
          modificar();
          break;
     default:
          sinDatos();
          break;
}

// Function para crear un nuevo registro
function crear()
{
     // creará un nuevo registro en la base de datos
     require_once('../funciones/bd.php');

     // Validar las entradas
     $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
     $empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_STRING);
     $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
     $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
     $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);

     try {
          $stmt = $conn->prepare("INSERT INTO contacto (nombre, empresa, telefono, email, direccion) VALUES (?, ?, ?,?, ?)");
          $stmt->bind_param("sssss", $nombre, $empresa, $telefono, $email, $direccion);
          $stmt->execute();
          if ($stmt->affected_rows == 1) {
               $respuesta = array(
                    'respuesta' => 'correcto',
                    'datos' => array(
                         'nombre' => $nombre,
                         'empresa' => $empresa,
                         'telefono' => $telefono,
                         'email' => $email,
                         'direccion' => $direccion,
                         'id_insertado' => $stmt->insert_id
                    )
               );
          }
          $stmt->close();
          $conn->close();
     } catch (Exception $e) {
          $respuesta = array(
               'error' => $e->getMessage()
          );
     }
     echo json_encode($respuesta);
}

// Función para eliminar un registro
function eliminar()
{
     require_once('../funciones/bd.php');

     $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

     try {
          $stmt = $conn->prepare("DELETE FROM contacto WHERE id = ? ");
          $stmt->bind_param("i", $id);
          $stmt->execute();
          if ($stmt->affected_rows == 1) {
               $respuesta = array(
                    'respuesta' => 'correcto'
               );
          }
          $stmt->close();
          $conn->close();
     } catch (Exception $e) {
          $respuesta = array(
               'error' => $e->getMessage()
          );
     }
     echo json_encode($respuesta);
}

// Función para modificar un registro
function modificar()
{
     require_once('../funciones/bd.php');

     // Validar las entradas
     $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
     $empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_STRING);
     $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
     $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
     $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);
     $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

     try {
          $stmt = $conn->prepare("UPDATE contacto SET nombre = ?, telefono = ?, empresa = ?, email = ?, direccion = ? WHERE id = ?");
          $stmt->bind_param("sssssi", $nombre,  $telefono,  $empresa, $email, $direccion, $id);
          $stmt->execute();
          if ($stmt->affected_rows == 1) {
               $respuesta = array(
                    'respuesta' => 'correcto'
               );
          } else {
               $respuesta = array(
                    'respuesta' => 'error'
               );
          }
          $stmt->close();
          $conn->close();
     } catch (Exception $e) {
          $respuesta = array(
               'error' => $e->getMessage()
          );
     }
     echo json_encode($respuesta);
}

// Funcion de control de acciones a realizar
function sinDatos()
{
     $respuesta = array(
          'respuesta' => 'incorrecto',
          'datos' => 'No se han pasado ninguna acción',
          'accion pasada ' => is_null($accion) ? 'null' : $accion
     );
     echo json_encode($respuesta);
}
