<h1>Lista de Textos</h1>
<table>
    <tr>
        <th>nome</th>
        <th>descrição</th>
    </tr>
    <?php $__currentLoopData = $textos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $texto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($texto->nm_arquivo); ?></td>
        <td><?php echo e($texto->descricao); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\xampp\htdocs\desenv\computatrum.ca\resources\views/juridico\textos\listatextos.blade.php ENDPATH**/ ?>