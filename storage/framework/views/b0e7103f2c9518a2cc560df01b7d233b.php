<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="bg-light p-3 mb-3 d-flex justify-content-between align-items-center">
        <h1 class="m-0">Editar Curso</h1>
        <a href="<?php echo e(route('disciplinas.index')); ?>" class="btn btn-secondary btn-sm">Voltar para Disciplinas</a>
    </div>

    <form action="<?php echo e(route('curso.update', $curso->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <input type="text" name="nome" class="form-control" placeholder="nome do curso" value="<?php echo e($curso->nome); ?>">
        </div>
        <div class="mb-3">
            <input type="number" name="duracao" class="form-control" placeholder="duração do curso" value="<?php echo e($curso->duracao); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Pichau\Desktop\LaravelAtividade\laravel-introducao\resources\views/curso/edit.blade.php ENDPATH**/ ?>