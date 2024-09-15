
@extends('layouts.backend')
<style>
    .certificate-container{
        margin-bottom: 10px;
    }
</style>
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Student Certificate Lists</h3>
            <div class="float-right">
                <button id="print-pdf" class="btn btn-primary">Print</button>
            </div>

        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @foreach ($certificates as $certificate)
                            {!! $certificate !!}
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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

