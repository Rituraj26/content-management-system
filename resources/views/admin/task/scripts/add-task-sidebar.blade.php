<script>
    const element = document.querySelector('[data-toggle=open-right-sidebar]');
    element.addEventListener('click', (e) => {
        document.querySelector('#right-sidebar').classList.toggle('open');
    })
</script>
