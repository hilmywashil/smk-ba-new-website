<!-- FUNGSI: DELETE MODAL -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteMessageModal = document.getElementById('deleteMessageModal');
        const deleteMessageForm = document.getElementById('deleteMessageForm');
        const deleteMessageSender = document.getElementById('deleteMessageSender');

        deleteMessageModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Tombol yang men-trigger modal
            const url = button.getAttribute('data-url'); // URL hapus
            const sender = button.getAttribute('data-sender'); // Nama pengirim pesan

            deleteMessageForm.action = url;
            deleteMessageSender.textContent = sender;
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteModal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteForm');
        const titleText = document.getElementById('deletePostTitle');

        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const url = button.getAttribute('data-url');
            const title = button.getAttribute('data-title');

            deleteForm.action = url;
            titleText.textContent = title;
        });
    });
</script>

<!-- FUNGSI: TOAST NOTYF -->
<script>
    const notyf = new Notyf({
        position: { x: 'right', y: 'top' },
        duration: 3000,
        ripple: false,
        dismissible: true
    });

    @if (session('success'))
        notyf.success('{{ session('success') }}');
    @endif

    @if (session('error'))
        notyf.error('{{ session('error') }}');
    @endif
</script>

<!-- FUNGSI: CK EDITOR -->
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: [
                'heading', '|',
                'bold', 'italic', 'underline',
                '|',
                'link', 'bulletedList', 'numberedList',
                '|',
                'blockQuote',
                '|',
                'undo', 'redo'
            ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>

<!-- FUNGSI: PREVIEW GAMBAR BERITA -->
<script>
    const imageModal = document.getElementById('imagePreviewModal');

    imageModal.addEventListener('show.bs.modal', function (event) {
        const trigger = event.relatedTarget;
        if (!trigger) return;

        const imageUrl = trigger.getAttribute('data-image');
        const previewImage = document.getElementById('previewImage');

        if (imageUrl && previewImage) {
            previewImage.src = imageUrl;
        }
    });
</script>

<!-- FUNGSI: PREVIEW GAMBAR BERITA -->
<script>
    document.getElementById('btnUpload').addEventListener('click', function () {
        document.getElementById('image').click();
    });

    document.getElementById('image').addEventListener('change', function (e) {
        const file = e.target.files[0];
        const fileName = document.getElementById('fileName');
        const preview = document.getElementById('preview');

        if (file) {
            fileName.textContent = file.name;

            const reader = new FileReader();
            reader.onload = function (event) {
                preview.src = event.target.result;
                preview.classList.remove('d-none');
            };
            reader.readAsDataURL(file);
        } else {
            fileName.textContent = 'Belum ada file dipilih';
            preview.classList.add('d-none');
        }
    });
</script>

<!-- FUNGSI: JIKA FILE SIZE DIATAS 5MB UPLOAD DITOLAK -->
<script>
    const MAX_SIZE = 5 * 1024 * 1024;

    const imageInput = document.getElementById('image');
    const preview = document.getElementById('preview');
    const submitBtn = document.querySelector('button[type="submit"]');

    imageInput.addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (!file) return;

        if (file.size > MAX_SIZE) {
            notyf.error('Ukuran gambar maksimal 5 MB');

            imageInput.value = '';
            preview.classList.add('d-none');
            submitBtn.disabled = true;
            return;
        }

        submitBtn.disabled = false;
        preview.src = URL.createObjectURL(file);
        preview.classList.remove('d-none');
    });

    document.getElementById('title').addEventListener('input', function () {
        const title = this.value;

        const slug = title
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');

        document.getElementById('slug').value = slug;
    });
</script>

<!-- FUNGSI: MODAL DAN TOMBOL READ UNREAD -->
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const viewButtons = document.querySelectorAll('.btn-view-message');
        const btnMarkRead = document.getElementById('btnMarkRead');
        const btnMarkUnread = document.getElementById('btnMarkUnread');
        let currentMessageId = null;

        viewButtons.forEach(button => {
            button.addEventListener('click', function () {
                currentMessageId = this.dataset.id;
                const name = this.dataset.name;
                const email = this.dataset.email;
                const created = this.dataset.created;
                const status = this.dataset.status;
                const message = this.dataset.message;

                document.getElementById('msgName').textContent = name;
                document.getElementById('msgEmail').textContent = email;
                document.getElementById('msgCreatedAt').textContent = created;
                document.getElementById('msgContent').textContent = message;

                const statusBadge = document.getElementById('msgStatus');
                statusBadge.textContent = status === 'read' ? 'DIBACA' : 'BELUM DIBACA';
                statusBadge.className = 'badge ' + (status === 'read' ? 'bg-success' : 'bg-secondary');

                // Tombol
                btnMarkRead.style.display = status === 'read' ? 'none' : 'inline-block';
                btnMarkUnread.style.display = status === 'read' ? 'inline-block' : 'none';

                btnMarkRead.dataset.id = currentMessageId;
                btnMarkUnread.dataset.id = currentMessageId;
            });
        });

        // Tombol Baca Pesan
        btnMarkRead.addEventListener('click', function () {
            const messageId = this.dataset.id;
            fetch(`/dashboard/admin/message/${messageId}/read`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        const statusBadge = document.getElementById('msgStatus');
                        statusBadge.textContent = 'DIBACA';
                        statusBadge.className = 'badge bg-success';

                        btnMarkRead.style.display = 'none';
                        btnMarkUnread.style.display = 'inline-block';

                        const rowBadge = document.querySelector(`tr[data-id='${messageId}'] .badge`);
                        if (rowBadge) {
                            rowBadge.textContent = 'DIBACA';
                            rowBadge.className = 'badge bg-soft-success text-success';
                        }
                    }
                });
        });

        // Tombol Tandai Belum Dibaca
        btnMarkUnread.addEventListener('click', function () {
            const messageId = this.dataset.id;
            fetch(`/dashboard/admin/message/${messageId}/unread`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        const statusBadge = document.getElementById('msgStatus');
                        statusBadge.textContent = 'BELUM DIBACA';
                        statusBadge.className = 'badge bg-secondary';

                        btnMarkRead.style.display = 'inline-block';
                        btnMarkUnread.style.display = 'none';

                        const rowBadge = document.querySelector(`tr[data-id='${messageId}'] .badge`);
                        if (rowBadge) {
                            rowBadge.textContent = 'BELUM DIBACA';
                            rowBadge.className = 'badge bg-gray-200 text-dark';
                        }
                    }
                });
        });

    });
</script>

<!-- FUNGSI: TOMBOL TUTUP REFRESH -->
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const btnCloseModal = document.getElementById('btnCloseModal');

        btnCloseModal.addEventListener('click', function () {
            const modalEl = document.getElementById('viewMessageModal');
            const modal = bootstrap.Modal.getInstance(modalEl);

            modalEl.addEventListener('hidden.bs.modal', function () {
                location.reload();
            }, { once: true });
        });

    });
</script>