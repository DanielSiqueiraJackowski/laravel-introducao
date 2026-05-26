<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="bg-light p-3 mb-3 d-flex justify-content-between align-items-center">
        <h1 class="m-0">Cursos Cadastrados</h1>
        <div>
            <a href="<?php echo e(route('disciplinas.index')); ?>" class="btn btn-secondary btn-sm">Voltar para Disciplinas</a>
            <a href="<?php echo e(route('curso.create')); ?>" class="btn btn-primary btn-sm">Novo curso</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DURAÇÃO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($curso->id); ?></td>
                    <td><?php echo e($curso->nome); ?></td>
                    <td><?php echo e($curso->duracao); ?></td>
                    <td>
                        <a href="<?php echo e(route('curso.show', $curso->id)); ?>" class="btn btn-sm btn-info">Mais info</a>
                        <a href="<?php echo e(route('curso.edit', $curso->id)); ?>" class="btn btn-sm btn-warning">Editar</a>
                        <form action="<?php echo e(route('curso.destroy', $curso->id)); ?>" method="POST" style="display: inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Pichau\Desktop\LaravelAtividade\laravel-introducao\resources\views/curso/index.blade.php ENDPATH**/ ?>