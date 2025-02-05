<!-- Search ShortKey -->
<button type="button" class="hidden" aria-haspopup="dialog" aria-expanded="false"
    aria-controls="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"
    data-hs-overlay="#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger">
</button>
<script>
    window.addEventListener("keydown", function(evt) {
        if (evt.ctrlKey && evt.code === "Backslash") {
            const overlay = HSOverlay.getInstance(
                '#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger', true);
            const combobox = HSComboBox.getInstance(
                '#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger [data-hs-combo-box]',
                true);

            if (overlay.element && overlay.element.el.classList.contains('open')) return false;

            overlay.element.open();
            combobox.element.setCurrent();
        }
    });
</script>
<!-- End Search ShortKey -->
