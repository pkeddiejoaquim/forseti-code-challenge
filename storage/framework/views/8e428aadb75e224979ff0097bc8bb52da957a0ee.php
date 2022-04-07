<!doctype html>
<html lang="pt-br"></html>
<head>
    <meta charset="UTF-8">
    <meta name = "viewport"
          content ="width=device-width, user-scalable=no, inital-scrore">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Textos</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<br><br>
<body>
    <table>
        <tr>
            <td>Nome</td>
            <td>CPF / CNPJ</td>
            <td>Descrição</td>
        </tr>
        <?php $__currentLoopData = $textos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $texto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($texto->nome); ?></td>
            <td><?php echo e($texto->numbercpfcnpj); ?></td>
            <td><?php echo e($texto->descricao); ?></td>
            <td>
                <a href="">Ver Textos</a>
                <form action ="https://www.google.com.br/?gws_rd=ssl=" method="">
                    <input type="hidden" name="textos" value="">
                    <input type="submit" value="Remover">
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    
</body>
</html><?php /**PATH E:\server-www\htdocs\desenv\gis\resources\views/auth/textos.blade.php ENDPATH**/ ?>