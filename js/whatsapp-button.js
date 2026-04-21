// ===== Global Sticky WhatsApp Button =====
(function () {
    // Avoid double injection
    if (document.getElementById('stickyWa')) return;

    // Inject HTML
    var html = '<div class="sticky-wa-wrapper" id="stickyWa" aria-label="Chat with VCR Electrical Services on WhatsApp">'
        + '<a href="https://wa.me/447446111951" class="sticky-wa-link" target="_blank" rel="noopener noreferrer">'
        + '<span class="sticky-wa-label">Chat on WhatsApp</span>'
        + '<span class="sticky-wa-icon">'
        + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="#fff">'
        + '<path d="M16 0C7.163 0 0 7.163 0 16c0 2.822.736 5.469 2.027 7.773L0 32l8.437-2.01A15.93 15.93 0 0 0 16 32c8.837 0 16-7.163 16-16S24.837 0 16 0zm0 29.333a13.27 13.27 0 0 1-6.771-1.854l-.485-.288-5.008 1.194 1.224-4.875-.317-.5A13.267 13.267 0 0 1 2.667 16C2.667 8.636 8.636 2.667 16 2.667S29.333 8.636 29.333 16 23.364 29.333 16 29.333zm7.27-9.878c-.398-.199-2.354-1.162-2.72-1.294-.365-.133-.631-.199-.897.199-.266.398-1.03 1.294-1.263 1.56-.232.266-.465.299-.863.1-.398-.2-1.681-.619-3.203-1.977-1.184-1.057-1.983-2.363-2.215-2.761-.232-.398-.025-.613.174-.811.179-.178.398-.465.597-.698.199-.232.266-.398.398-.664.133-.266.067-.498-.033-.698-.1-.199-.897-2.163-1.23-2.961-.324-.778-.653-.673-.897-.686l-.764-.013c-.266 0-.698.1-1.063.498-.365.398-1.396 1.363-1.396 3.327s1.43 3.86 1.629 4.126c.199.266 2.814 4.296 6.818 6.025.953.411 1.696.657 2.275.841.956.304 1.826.261 2.514.158.767-.114 2.354-.962 2.687-1.891.332-.929.332-1.726.232-1.891-.099-.166-.365-.266-.763-.465z"/>'
        + '</svg>'
        + '</span>'
        + '</a>'
        + '</div>';

    // Inject as soon as body is available
    if (document.body) {
        document.body.insertAdjacentHTML('beforeend', html);
    } else {
        window.addEventListener('DOMContentLoaded', function () {
            document.body.insertAdjacentHTML('beforeend', html);
        });
    }

    // GA4 tracking
    var checkExist = setInterval(function () {
        var wa = document.getElementById('stickyWa');
        if (wa) {
            wa.addEventListener('click', function () {
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'click', {
                        event_category: 'WhatsApp',
                        event_label: 'WhatsApp Button Click',
                        value: 1
                    });
                }
            });
            clearInterval(checkExist);
        }
    }, 100);
})();
