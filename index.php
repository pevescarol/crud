<?php
require_once 'includes/db.php';
$query = "SELECT * FROM `students`";

$results = mysqli_query($conn, $query);
$records = mysqli_num_rows($results);
$msg = "";
if (!empty($_GET['msg'])) {
    $msg = $_GET['msg'];
    $alert_msg = ($msg == "add") ? "Ha sido agregado exitosamente!" : (($msg == "del") ? "Ha sido eliminado exitosamente!" : "Ha sido actualizado exitosamente!");
} else {
    $alert_msg = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partial/head.php';?>
<body>
   <?php include 'partial/nav.php';?>
    <div class="container">
<?php if (!empty($alert_msg)) {?>
        <div class="alert alert-success"><?php echo $alert_msg; ?></div>
<?php }?>
    <div class="info"></div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Género</th>
                <th scope="col">Email</th>
                <th scope="col">Curso</th>
                <th scope="col">Opción</th>

                </tr>
            </thead>
            <tbody>
                <?php
if (!empty($records)) {
    while ($row = mysqli_fetch_assoc($results)) {
        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td>
                                        <a href="/crud/add.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">EDITAR</a>
                                        <a href="/crud/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onClick="javascript:return confirm('Realmente lo quieres eliminar?');" >BORRAR</a>
                                    </td>
                                </tr>

                            <?php
}
}
?>



            </tbody>
        </table>
    </div>
</body>
</html>