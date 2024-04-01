<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }
    </style>

</head>
<body>
<h2>Teams</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Team Name</th>
            <th>City</th>
            <th>Conference</th>
            <th>Division</th> <!-- Agregado -->
        </tr>
    </thead>
    <tbody>
        
    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($item->id); ?></td>
        <td><?php echo e($item->name); ?></td>
        <td><?php echo e($item->city_name); ?></td> <!-- Modificado para mostrar el nombre de la ciudad -->
        <td><?php echo e($item->conference_title); ?></td> <!-- Modificado para mostrar el título de la conferencia -->
        <td><?php echo e($item->division_name); ?></td> <!-- Agregado para mostrar el nombre de la división -->
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </tbody>
</table>
</body>
</html>
<?php /**PATH C:\Users\Kvin1\Music\Laravel\activity7\resources\views/teams/index.blade.php ENDPATH**/ ?>