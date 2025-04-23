
document.addEventListener('DOMContentLoaded', function () {
  const placeholders = document.querySelectorAll('[data-ajax-block]');

  placeholders.forEach(container => {
    const blockName = container.dataset.ajaxBlock;

    fetch(ajax_data.url, {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: new URLSearchParams({
        action: 'load_template_block',
        block: blockName
      })
    })
      .then(res => res.text())
      .then(html => {
        container.innerHTML = html;

        //document.querySelector('.faq-item').innerHTML = html;

        // 👉 Повторно инициализируем js
        initNumbers();
        initFAQAccordion();
        initSwiper();
      });
  });
});