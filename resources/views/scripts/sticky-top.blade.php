<script>
    // Intersection Observer for stopping sticky effect outside component
    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0
    };

    const observeSticky = (titleId, componentId) => {
        const title = document.getElementById(titleId);
        const component = document.getElementById(componentId);

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    title.classList.remove("sticky", "top-36");
                } else {
                    title.classList.add("sticky", "top-36");
                }
            });
        }, observerOptions);

        observer.observe(component);
    };

    observeSticky("title1", "component1");
    observeSticky("title2", "component2");
</script>