

<style>
    .certificate-container{
        margin-bottom: 10px;
    }
</style>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Student Certificate Lists</h3>
            <div class="float-right">
                <button id="print-pdf" class="btn btn-primary">Print</button>
            </div>

        </div>
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php $__currentLoopData = $certificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $certificate; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const printButton = document.getElementById('print-pdf');
        if (printButton) {
            printButton.addEventListener('click', () => {
                // Save current body content to restore later
                const originalBody = document.body.innerHTML;
                
                // Extract and prepare all certificate content
                const certificates = Array.from(document.querySelectorAll('.certificate-container')).map(container => container.outerHTML).join('<div style="page-break-before: always;"></div>');

                // Set up the new HTML for printing
                document.body.innerHTML = `
                    <div id="print-content">
                        ${certificates}
                    </div>
                `;

                // Add print styles
                const printStyles = `
                    <style>
                        @media print {
                            body {
                                margin: 0;
                                padding: 0;
                            }
                            #print-content {
                                width: 100%;
                                height: 100%;
                                box-sizing: border-box;
                                margin: 0;
                                padding: 0;
                            }
                            @page {
                                size: A4 landscape;
                                margin: 10mm;
                            }
                            .certificate-container {
                                page-break-inside: avoid;
                                page-break-after: always;
                            }
                            div[style*="page-break-before"] {
                                page-break-before: always;
                            }
                        }
                    </style>
                `;
                document.head.insertAdjacentHTML('beforeend', printStyles);
                
                // Open print dialog
                window.print();
                
                // Restore original body content after printing
                document.body.innerHTML = originalBody;
            });
        } else {
            console.error('Print button not found.');
        }
    });
</script>


<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/certificate.blade.php ENDPATH**/ ?>