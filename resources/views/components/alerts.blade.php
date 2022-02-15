@if (session()->has('success'))
    <script wire:key="{{ time() }}">
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session()->get("success") }}',
                icon: 'success',
                timer: 3000,
            });
        });
    </script>
@endif

@if (session()->has('error'))
    <script wire:key="{{ time() }}">
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Gagal!',
                text: '{{ session()->get("error") }}',
                icon: 'error',
                timer: 3000,
            });
        });
    </script>
@endif

@if (session()->has('confirmDeletion'))
    <script wire:key="{{ time() }}">
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Hapus data?',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Dikonfirmasi',
                        text: 'Data akan dihapus sebentar lagi.',
                        icon: 'success',
                        timer: 3000,
                    });

                    return setTimeout(() => {
                        window.Livewire.emit('delete')
                    }, 1000);
                }

                Swal.fire(
                    'Dibatalkan',
                    'Data tidak dihapus.',
                    'info',
                );
            });
        });
    </script>
@endif