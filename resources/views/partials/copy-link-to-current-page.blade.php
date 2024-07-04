<script>
    $(document).ready(function() {
        $('#share-page').click(function() {
            let copyText = $('#current-url')

            if (window.isSecureContext && navigator.clipboard) {
                copyToClipboard(copyText.val());
            } else {
                unsecuredCopyToClipboard(copyText.val());
            }

            displayNotification();
        });

        function displayNotification() {
            let alert = $('#success-alert');
            alert.removeClass('d-none');
            let alertContainer = alert.find('.container');
            alertContainer.first().text('Link untuk halaman ini sukses di salin');

            setTimeout(function() {
                location.reload(); // Refresh halaman setelah 3 detik
            }, 3000); // Delay 3 detik sebelum merefresh halaman
        }

        function copyToClipboard(value) {
            navigator.clipboard.writeText(value);
        }


        function unsecuredCopyToClipboard(value) {
            var textArea = document.createElement('textarea');
            textArea.value = value;
            document.body.prepend(textArea);
            textArea.focus();
            textArea.select();
            try {
                document.execCommand('copy')

            } catch (error) {
                console.log('Tidak dapat menyalin ke clipboard', error);

            }
            document.body.removeChild(textArea);
        }
    })
</script>
