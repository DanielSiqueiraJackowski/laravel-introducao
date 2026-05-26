

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Disciplinas</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <a href="<?php echo e(route('disciplinas.create')); ?>" class="btn btn-primary mb-3">Nova Disciplina</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Carga Horária</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($d->id); ?></td>
                        <td><?php echo e($d->nome); ?></td>
                        <td><?php echo e($d->carga_horaria); ?></td>
                        <td>
                            <a href="<?php echo e(route('disciplinas.show', $d)); ?>" class="btn btn-sm btn-secondary">Ver</a>
                            <a href="<?php echo e(route('disciplinas.edit', $d)); ?>" class="btn btn-sm btn-primary">Editar</a>
                            <form action="<?php echo e(route('disciplinas.destroy', $d)); ?>" method="POST" style="display:inline-block">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Confirma exclusão?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo e($disciplinas->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Pichau\Desktop\LaravelAtividade\laravel-introducao\resources\views/disciplina/index.blade.php ENDPATH**/ ?>