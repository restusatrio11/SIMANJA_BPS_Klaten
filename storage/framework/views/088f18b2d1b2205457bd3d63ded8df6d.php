



<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <h2 class="display-4">Selamat Datang di Sistem Manajemen Kinerja</h2>
                <p class="lead">BPS Kabupaten Klaten</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Rata-Rata Nilai Kegiatan Pegawai</h4>
                        <canvas id="avgChart" class="visual"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Jumlah Kegiatan Pegawai</h4>
                        <canvas id="countChart" class="visual"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Tabel Kinerja Pegawai BPS Kabupaten Klaten</h4>
                        
                        <div class="table-responsive-xl">
                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm">
                                <thead>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Pegawai</th>
                                    
                                    <th class="text-center">Tugas</th>
                                    <th class="text-center">Asal</th>
                                    <th class="text-center">Target</th>
                                    <th class="text-center">Realisasi</th>
                                    <th class="text-center">Satuan</th>
                                    <th class="text-center">Deadline</th>
                                    <th class="text-center">Tgl Realisasi</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Keterangan</th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <input id="id<?php echo e($key); ?>" type="hidden" value="<?php echo e($task->task_id); ?>">
                                            <input id="pegawai_id<?php echo e($key); ?>" type="hidden"
                                                value="<?php echo e($task->pegawai_id); ?>">
                                            <input id="file<?php echo e($key); ?>" type="hidden" value="<?php echo e($task->file); ?>">
                                            <td class="text-center"><?php echo e($key + 1); ?></td>
                                            <td class="text-center" id="Pegawai<?php echo e($key); ?>"><?php echo e($task->name); ?></td>
                                            
                                            <td class="text-center" id="Nama<?php echo e($key); ?>"><?php echo e($task->nama); ?></td>
                                            <td class="text-center" id="Asal<?php echo e($key); ?>"><?php echo e($task->asal); ?></td>
                                            <td class="text-center" id="Target<?php echo e($key); ?>"><?php echo e($task->target); ?>

                                            </td>
                                            <td class="text-center" id="Realisasi<?php echo e($key); ?>">
                                                <?php echo e($task->realisasi); ?></td>
                                            <td class="text-center" id="Satuan<?php echo e($key); ?>"><?php echo e($task->satuan); ?>

                                            </td>
                                            <td class="text-center tgd" id="Deadline<?php echo e($key); ?>"
                                                data-value="<?php echo e($task->deadline); ?>">
                                                <?php echo e(date('d M Y', strtotime($task->deadline))); ?></td>
                                            <?php if($task->tgl_realisasi != null): ?>
                                                <td class="text-center tgr">
                                                    <?php echo e(date('d M Y', strtotime($task->tgl_realisasi))); ?></td>
                                            <?php else: ?>
                                                <td class="text-center tgr"></td>
                                            <?php endif; ?>
                                            <td class="text-center"><?php echo e($task->nilai); ?></td>
                                            <?php if($task->keterangan == 'Telah dikonfirmasi'): ?>
                                                <td><span
                                                        class="badge rounded-pill text-bg-success text-white"><?php echo e($task->keterangan); ?></span>
                                                </td>
                                            <?php elseif($task->keterangan == 'Belum dikerjakan'): ?>
                                                <td class="text-center">
                                                    <span
                                                        class="badge  rounded-pill text-bg-warning text-white"><?php echo e($task->keterangan); ?></span>
                                                </td>
                                            <?php elseif($task->keterangan == 'Tunggu Konfirmasi'): ?>
                                                <td class="text-center">
                                                    <span
                                                        class="badge rounded-pill text-bg-info text-white"><?php echo e($task->keterangan); ?></span>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\applicationLaravel\simanja-bpsKlaten\resources\views/visual.blade.php ENDPATH**/ ?>