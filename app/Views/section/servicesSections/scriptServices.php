  <script>
    // Scroll animations
    const observer = new IntersectionObserver((entries)=>{
      entries.forEach((entry)=>{
        if(entry.isIntersecting){
          entry.target.classList.add("reveal-in");
        }
      });
    }, {threshold:0.2});
    document.querySelectorAll(".reveal").forEach(el=>observer.observe(el));
  </script>